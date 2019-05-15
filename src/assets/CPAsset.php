<?php
namespace paw\cp\assets;

use yii\web\AssetBundle;

class CPAsset extends AssetBundle
{
    public $css = [
        'asset.cp.css',
    ];

    public $js = [
        'asset.cp.js',
    ];

    public $depends = [
        \paw\cp\assets\StaticAsset::class,
        \paw\twig\assets\TwigAsset::class,
    ];

    public function init()
    {
        parent::init();
        $this->sourcePath = dirname(dirname(__DIR__)) . '/dist';
    }
}
