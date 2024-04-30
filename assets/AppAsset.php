<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
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
        'css/fonts.css',
        'plugins/icofont/icofont.min.css',
        'plugins/splide/splide.min.css',
        'plugins/fancybox/fancybox.min.css',
    ];
    public $js = [
        'js/index.js',
        'plugins/splide/splide.min.js',
        'plugins/fancybox/fancybox.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
