<?php
namespace paw\cp\assets;

use yii\web\AssetBundle;

class CPAsset extends AssetBundle
{
    public $sourcePath = '@pawcp_root/dist';

    public $css = [
        'asset.cp.css'
    ];

    public $js = [
        'asset.cp.js',
    ];

    public $depends = [
        \paw\bootstrap4\BootstrapAsset::class,
        \paw\cp\assets\FontAwsomeAsset::class,
        \paw\cp\assets\StaticAsset::class,
    ];
}