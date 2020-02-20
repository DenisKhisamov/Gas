<?php
/**
 * ---THIS-HEAD-INFO---
 */

define('CORE_INIT',true);

define('ROOT_DIR',dirname(__FILE__).'/');

define('ROOT_URL','http://gasprom.rosdex.ru/');

include ROOT_DIR.'config.php';

include ROOT_DIR.'Core/Dev.php';

Core\Dev::sInit();

try {
    include ROOT_DIR . 'Core/DB.php';
    
    include ROOT_DIR . 'Core/Includes.php';
    
    Core\Includes::sInit();
    
    $init = new Core\Init();
    
    $init->start();
} catch (Exception $exception) {
    Core\Dev::sException($exception);
}

function vd($arg)
{
    var_dump($arg);
}
exit;