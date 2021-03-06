<?php
/**
 *
 * author Cary
 * contact QQ : 373889161($S$-memory)
 *
 */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>

<table class="table">
    <tr>
        <th colspan="4">系统信息</th>
    </tr>
    <tr>
        <td style="width:265px;">服务器操作系统:</td>
        <td><?php echo php_uname('s');?></td>
        <td>Web 服务器:</td>
        <td><?php echo $_SERVER["SERVER_SOFTWARE"]?></td>
    </tr>
    <tr>
        <td style="width:265px;">PHP 版本:</td>
        <td><?php echo PHPVERSION();?></td>
        <td>MySQL 版本:</td>
        <td><?php echo $version;?></td>
    </tr>
    <tr>
        <td style="width:265px;">安全模式:</td>
        <td><?php echo (boolean) ini_get('safe_mode') ?  '是':'否';?></td>
        <td>安全模式GID:</td>
        <td><?php echo (boolean) ini_get('safe_mode_gid') ? '是' : '否';?></td>
    </tr>
    <tr>
        <td style="width:265px;">Socket 支持:</td>
        <td><?php echo function_exists('fsockopen') ? '已开启' : '未开启';?></td>
        <td>时区设置:</td>
        <td><?php echo function_exists("date_default_timezone_get") ? date_default_timezone_get() : '无需设置';?></td>
    </tr>
    <tr>
        <td style="width:265px;">GD 库:</td>
        <td><?php if (function_exists('imagecreate')){
                echo '支持GD库';
            }else echo '不支持GD库';?></td>
        <td>Zlib 支持:</td>
        <td><?php echo function_exists('gzclose') ? '支持':'不支持';?></td>
    </tr>
    <tr>
        <td style="width:265px;">服务器IP:</td>
        <td><?php echo GetHostByName($_SERVER['SERVER_NAME']);?></td>
        <td>文件上传的最大大小:</td>
        <td><?php echo ini_get('upload_max_filesize');?></td>
    </tr>
    <tr>
        <td style="width:265px;">编码:</td>
        <td><?php echo strtoupper(Yii::$app->db->charset);?></td>
        <td>Zend版本：</td>
        <td><?php echo Zend_Version()?></td>
    </tr>
    <tr>
        <td style="width:265px;">服务器Web端口：</td>
        <td><?php echo $_SERVER['SERVER_PORT'];?></td>
        <td>服务器语言：</td>
        <td><?php echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];?></td>
    </tr>
    <tr>
        <td style="width:265px;">PHP安装路径：</td>
        <td><?php echo DEFAULT_INCLUDE_PATH;?></td>
        <td>当前文件绝对路径：</td>
        <td><?php echo __FILE__;?><br></td>
    </tr>
    <tr>
        <td style="width:265px;">当前登录IP：</td>
        <td><?php echo $_SERVER['REMOTE_ADDR'];?><br></td>
        <td>PHP运行方式：</td>
        <td><?php echo php_sapi_name();?><br></td>
    </tr>
</table>

