<?php
namespace paw\cp\assets;

class CPAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@pawcp_root/static';

    public $css = [
        'dist/cp.css'
    ];

    public $js = [
        ['js/vue.js', 'position' => \yii\web\View::POS_HEAD],
        'dist/cp.js',
    ];

    public $depends = [
        \paw\bootstrap4\BootstrapAsset::class
    ];
}