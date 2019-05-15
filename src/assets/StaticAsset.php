<?php
namespace paw\cp\assets;

use yii\web\AssetBundle;

class StaticAsset extends AssetBundle
{
    public $css = [
        'css/floating-labels.css',
    ];

    public $js = [
        ['js/vue.js', 'position' => \yii\web\View::POS_HEAD],
    ];

    public function init()
    {
        parent::init();
        $this->sourcePath = dirname(dirname(__DIR__)) . '/static';
    }
}
