<?php
return \yii\helpers\ArrayHelper::merge(
    require PATH_VENDOR . '/mlaxwong/paw/bootstrap/console.php',
    configbypath(dirname(__DIR__) . '/config/_global'),
    configbypath(dirname(__DIR__) . '/config/console')
);