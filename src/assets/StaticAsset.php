<?php
namespace paw\cp\assets;

use yii\web\AssetBundle;

class StaticAsset extends AssetBundle
{
    public $sourcePath = '@pawcp_root/static';

    public $css = [
        'css/floating-labels.css',
    ];

    public $js = [
        ['js/vue.js', 'position' => \yii\web\View::POS_HEAD],
    ];
}