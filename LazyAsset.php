<?php
namespace cluwong\lazy;

/**
 * Asset for https://github.com/eisbehr-/jquery.lazy
 */

class LazyAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/jquery-lazy';
    public $js = [
        'jquery.lazy.min.js',
        'jquery.lazy.plugins.min.js',
    ];  
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
