<?php
namespace paw\cp;

use Yii;

class Module extends \paw\cp\base\Module
{
    public $layout = '@pawcp_base/views/_layouts/cp.twig';
    
    public function init()
    {
        parent::init();

        Yii::setAlias('@pawcp_root', dirname(__DIR__));
        Yii::setAlias('@pawcp_base', __DIR__);

        $this->modules = [
            'setting' => ['class' => \paw\cp\modules\setting\Module::class],
        ];
    }
}