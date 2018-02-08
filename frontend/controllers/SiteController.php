<?php
namespace frontend\controllers;

use app\models\Navisort;
use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use app\models\Navigation;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use app\models\EntryForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        //获取缓存组件
        $cache = Yii::$app->cache;
        //类型,,top(头条，默认),shehui(社会),guonei(国内),guoji(国际),yule(娱乐),tiyu(体育)junshi(军事),keji(科技),caijing(财经),shishang(时尚)
        $news = $cache->get('cache_data_news');
        if($news === false)
        {
            $news = $this->juhe_news();
            $cache->set('cache_data_news',$this->juhe_news(),60*60);
        }
        $shehui = $cache->get('cache_data_shehui');
        if($shehui ===false)
        {
            $shehui = $this->juhe_news('shehui');
            $cache->set('cache_data_shehui',$this->juhe_news('shehui'),60*60);
        }
        $keji = $cache->get('cache_data_keji');
        if($keji === false )
        {
            $keji = $this->juhe_news('keji');
            $cache->set('cache_data_keji',$this->juhe_news('keji'),60*60);
        }
        $tiyu = $cache->get('cache_data_tiyu');
        if($tiyu === false)
        {
            $tiyu = $this->juhe_news('tiyu');
            $cache->set('cache_data_tiyu',$this->juhe_news('tiyu'),60*60);
        }
        $yule = $cache->get('cache_data_yule');
        if($yule === false)
        {
            $yule = $this->juhe_news('yule');
            $cache->set('cache_data_yule',$this->juhe_news('yule'),60*60);
        }
        
        $chetime = $cache->get('cache_data_session_date'); //取出缓存时间
        $oldtime = strtotime(date('Y-m-d',$chetime));  //缓存时间
        $now = strtotime(date('Y-m-d'));                //当前时间
        if($now > $oldtime)  //判断当前时间大于缓存时间则更新数据
        {
            //echo '更新缓存数据！';
            $today = $this->juhe_date(date('Y-n-j',time()));
            $cache->set('cache_data_today',$this->juhe_date(date('Y-n-j',time())),60*60*24);
            $cache->set('cache_data_session_date',time());
        }else{
            $today = $cache->get('cache_data_today');  //缓存数据
        }
        $data = $cache->get('cache_data_zset');
        $common = $cache->get('cache_data_common');
        $jobs = $cache->get('cache_data_jobs');
        if ($data === false) {
            $common = $this->shownav(1);  //常用地址
            $jobs = $this->shownav(5);    //招聘地址
            $query = Navisort::find()->joinWith('navigation');
            $result = $query->where(['status'=>1])->andWhere(['and',['>','number',0]])
                ->orderBy('sort_id desc')
                ->select(['id','name','number'])
                ->all();
            //循环取出要显示的导航分类
            foreach($result as $ky)
            {
                $zset[] = ['id'=>$ky->id,'name'=>$ky->name,'data'=>$this->shownav($ky->id)];
            }
            if(!isset($zset))
            {
                $zset = '';
            }
            $data = $zset;
            //这里我们可以操作数据库获取数据，然后通过$cache->set方法进行缓存
            $cacheData = $zset;
            //set方法的第一个参数是我们的数据对应的key值，方便我们获取到
            //第二个参数即是我们要缓存的数据
            //第三个参数是缓存时间，如果是0，意味着永久缓存。默认是0
            $cache->set('cache_data_zset', $cacheData,3600*24);
            $cache->set('cache_data_common', $common,3600*24);
            $cache->set('cache_data_jobs', $jobs,3600*24);
        }
        return $this->render('index',[
            'common' => $common,
            'jobs' => $jobs,
            'zset' => $data,
            'news' => $news,
            'shehui' => $shehui,
            'keji' => $keji,
            'tiyu' => $tiyu,
            'yule' => $yule,
            'today' => $today,
        ]);
    }
    //社区模块
    public function actionForum()
    {
        return $this->render('forum');
    }
    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionFlush()
    {
        //获取缓存组件
        $cache = Yii::$app->cache;
        $cache->flush();
        $cache->delete('');
        $this->redirect('/');
    }
    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate())
        {
            if ($model->sendEmail(Yii::$app->params['adminEmail']))
            {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            }
            else
            {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }
            return $this->refresh();
        }
        else
        {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        $model = new ContactForm();
        return $this->render('about',[
            'model' => $model,
        ]);
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
    public function actionEntry()
    {
        $model = new EntryForm;
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // 验证 $model 收到的数据
            //$model->save();  //保存数据
            $model->signup();  //保存数据
            // 做些有意义的事 ...
            return $this->render('entry-confirm', ['model' => $model]);
        } else {
            // 无论是初始化显示还是数据验证错误
            return $this->render('entry', ['model' => $model]);
        }
    }

    /**
     * @param $id   导航分类ID
     * @param $limit    显示的数量
     * @return array|\yii\db\ActiveRecord[]
     * 显示的导航
     */
    public function shownav($id)
    {
        $query = Navigation::find();
        $number = Navisort::findOne($id);
        $model = $query->where(['is_show'=>1,'nav_pid'=>$id])->orderBy('ordery desc ,nav_id desc') //排序（多个排序,隔开）
        ->select(['nav_name','nav_url','sun_name','sun_url','is_target'])   //要显示的字段
        ->limit($number->number)     //限制显示数据
        ->all();
        return $model;
    }

    /**
     * @param $type
     * @return mixed
     * 万的历当天信息
     */
    private function juhe_date($type)
    {
        $appkey = "dfbbe8198bb412fa50aeb16ae9105c82";
        $url = "http://v.juhe.cn/calendar/day";
        $params = array(
            "key" => $appkey,//接口的appKey
            "date" => $type,//指定日期,格式为YYYY-MM-DD,如月份和日期小于10,则取个位,如:2012-1-1
        );
        $paramstring = http_build_query($params);
        $content = $this->juhecurl($url,$paramstring);
        $news = json_decode($content,true);
        return $news;
    }
    /**
     * @param string $type 返回的新闻类型
     * @return mixed
     * 新闻函数
     */
    private function juhe_news($type='')
    {
        //类型,,top(头条，默认),shehui(社会),guonei(国内),guoji(国际),yule(娱乐),tiyu(体育)junshi(军事),keji(科技),caijing(财经),shishang(时尚)
        //配置新闻的appkey
        $appkey = "c1df6d8f53cf90621a40f87ba0323df2";
        $url = "http://v.juhe.cn/toutiao/index";
        $params = array(
            "key" => $appkey,//接口的appKey
            "type" => $type,//需要返回的新闻分类
        );
        $paramstring = http_build_query($params);
        $content = $this->juhecurl($url,$paramstring);
        $news = json_decode($content,true);
        return $news;
    }
    /**
     * 请求接口返回内容
     * @param  string $url [请求的URL地址]
     * @param  string $params [请求的参数]
     * @param  int $ipost [是否采用POST形式]
     * @return  string
     */
    private function juhecurl($url,$params=false,$ispost=0){
        $httpInfo = array();
        $ch = curl_init();

        curl_setopt( $ch, CURLOPT_HTTP_VERSION , CURL_HTTP_VERSION_1_1 );
        curl_setopt( $ch, CURLOPT_USERAGENT , 'JuheData' );
        curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT , 60 );
        curl_setopt( $ch, CURLOPT_TIMEOUT , 60);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER , true );
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        if( $ispost )
        {
            curl_setopt( $ch , CURLOPT_POST , true );
            curl_setopt( $ch , CURLOPT_POSTFIELDS , $params );
            curl_setopt( $ch , CURLOPT_URL , $url );
        }
        else
        {
            if($params){
                curl_setopt( $ch , CURLOPT_URL , $url.'?'.$params );
            }else{
                curl_setopt( $ch , CURLOPT_URL , $url);
            }
        }
        $response = curl_exec( $ch );
        if ($response === FALSE) {
            //echo "cURL Error: " . curl_error($ch);
            return false;
        }
        $httpCode = curl_getinfo( $ch , CURLINFO_HTTP_CODE );
        $httpInfo = array_merge( $httpInfo , curl_getinfo( $ch ) );
        curl_close( $ch );
        return $response;
    }

}
