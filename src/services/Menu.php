<?php
namespace paw\cp\services;

use yii\base\Component;

class Menu extends Component
{
    public $menus = [

    ];

    public function get($key)
    {
        return isset($this->menus[$key]) ? $this->menus[$key] : [];
    }
}