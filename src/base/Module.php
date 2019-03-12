<?php
namespace paw\cp\base;

use Yii;

class Module extends \paw\base\Module
{
    protected $_layoutPath = null;

    public $theme = [
        'asset' => \paw\cp\assets\CPAsset::class
    ];

    public function getLayoutPath()
    {
        if ($this->_layoutPath === null) {
            $this->_layoutPath = $this->getViewPath() . DIRECTORY_SEPARATOR . '_layouts';
        }

        return $this->_layoutPath;
    }

    public function setLayoutPath($path)
    {
        $this->_layoutPath = Yii::getAlias($path);
    }
}