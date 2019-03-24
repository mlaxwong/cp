<?php
namespace paw\cp\services;

use yii\base\Component;

class CP extends Component
{
    protected $_menus = null;

    public function setMenus($menus)
    {
        $this->_menus = $menus;
    }

    public function getMenus()
    {
        if ($this->_menus === null) {
            return [
                'global' => [
                    [
                        'label' => 'Dashboard',
                        'url' => ['/admin'],
                        'icon' => null,
                    ],
                    [
                        'label' => 'Setting',
                        'url' => ['/admin/setting'],
                        'icon' => null,
                    ],
                ],
            ];
        } else {
            return $this->_menus;
        }
    }
}