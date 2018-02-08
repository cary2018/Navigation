<?php
/**
 *
 * author Cary
 * contact QQ : 373889161($S$-memory)
 *
 */
/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '后台首页',
        'brandUrl' => '/',
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => '首页', 'url' => ['/site/index']],
        ['label' => '管理员列表', 'url' => ['/admin/index']],
        ['label' => '测试页面', 'url' => ['/test/index']],
        ['label' => '商品列表','url' => ['/goods/index']],
        ['label' => '商品分类','url' => ['/category/index']],
        ['label' => '文章列表','url' => ['/article/index']],
        ['label' => '文章分类','url' => ['/sort/index']],
        ['label' => '导航列表','url' => ['/navigation/index']],
        ['label' => '导航分类','url' => ['/navigation/sort']],
    ];
    if(resession(SESSION_NAME)){
        $menuItems[] = ['label' => '安全退出'.resession(SESSION_NAME)->username,'url' => ['/admin/logut']];
    }else{
        $menuItems[] = ['label' => '管理登录', 'url' => ['/admin/login']];
    }
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => '用户登录', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                '用户退出 (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>