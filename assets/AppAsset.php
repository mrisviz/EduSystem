<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/node.css',
        'css/defaults.css',
        'css/system.css',
        'css/user.css',
        'css/style_.css-v8.css',
        'css/style.css-v8.css',
        'css/legacy.css-v8.css',
        'css/print.css-v8.css',
        'js/lib/photoswipe/photoswipe.css',
        'js/lib/photoswipe/default-skin/default-skin.css',
    ];
    public $js = [
    ];
    public $jsOptions = ['position' =>  \yii\web\View::POS_HEAD];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
