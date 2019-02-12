<?php
namespace paw\cp;

use Yii;

class Module extends \yii\base\Module
{
    public $layout = '@pawcp_base/templates/_layouts/cp.twig';
    protected $_viewPath = __DIR__ . '/templates';

    public function getViewPath()
    {
        return $this->_viewPath;
    }

    public function setViewPath($viewPath)
    {
        $this->_viewPath = $viewPath;
    }

    public function init()
    {
        Yii::setAlias('@pawcp_root', dirname(__DIR__));
        Yii::setAlias('@pawcp_base', __DIR__);
        parent::init();
    }
}