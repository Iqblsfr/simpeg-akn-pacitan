<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ThemeAsset extends AssetBundle
{
    public $basePath = '@app/themes/green';
    public $baseUrl = '@web/themes/green';
    public $css = [
        'css/green.css',
    ];
    public $js = [
        'js/main.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
       /* 'yii\bootstrap\BootstrapAsset',*/
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
