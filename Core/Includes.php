<?php
/**
 * ---THIS-HEAD-INFO---
 */

namespace Core;

/**
 * Class Includes Подключения файлов классов
 * @package Core
 */
class Includes {
    public static function sInit() {
        spl_autoload_register(array('Core\\Includes','sAutoloader'));
    }
    
    public static function sAutoloader($class) {
        $path = $class.'.php';
        $path = str_replace('\\','/',$path);
        if (file_exists(ROOT_DIR.$path)) include ROOT_DIR.$path;
    }
}