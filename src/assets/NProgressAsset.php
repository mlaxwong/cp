<?php
namespace paw\cp\assets;

use yii\web\AssetBundle;

class NProgressAsset extends AssetBundle
{
    public $sourcePath = '@npm/nprogress';

    public $css = [
        'nprogress.css',
    ];

    public $js = [
        'nprogress.js',
    ];
}