<?php
/**
 * ---THIS-HEAD-INFO---
 */

namespace Core;
use function PHPSTORM_META\type;

/**
 * Класс для обработки ошибок
 * Class Dev
 * @package Core
 */
class Dev {
    private static $shutdownHandlers;
    
    public static function sInit()
    {
        // регистрация ошибок
        set_error_handler(array('Core\\Dev', 'sErrorHandler'));
    
        self::$shutdownHandlers = array();
        register_shutdown_function(array('Core\\Dev', 'sShutdown'));
    
        ini_set('display_errors', 'on');
        error_reporting(E_ALL | E_STRICT);
    
        if (function_exists("xdebug_disable"))
        {
            xdebug_disable();
        }
    }
    
    public static function sErrorHandler($line, $message)
    {
        $backtrace = debug_backtrace();
        $file = '';
        $line = '';
    
        if (isset( $backtrace[0]['file'] ) && isset( $backtrace[0]['line'] ))
        {
            $file = $backtrace[0]['file'];
            $line = $backtrace[0]['line'];
        }
        if(strpos($message, 'unable to connect to') !== false || strpos($message, 'php_network_getaddresses') !== false)
        {
            return true;
        }
        
        var_dump($backtrace);
    
        /*if($trace = self::backtrace_to_string($backtrace))
        {
            if(! defined('MOD_DEVELOPER') || ! MOD_DEVELOPER || defined('MOD_DEVELOPER_ADMIN') && MOD_DEVELOPER_ADMIN && empty($_COOKIE['dev']))
                return true;
        
            self::warning($message, $file, $line, $trace);
        }*/
        return true;
    }
    
    public static function sShutdown()
    {
        if (!empty(self::$shutdownHandlers)) {
            self::$shutdownHandlers = array_reverse(self::$shutdownHandlers);
            foreach (self::$shutdownHandlers as $function) {
                if (is_array($function)) {
                    if (count($function)==2 && gettype($function[0])=='object') call_user_func($function);
                    else forward_static_call($function);
                }
                else
                {
                    call_user_func($function);
                }
            }
        }
        $error = error_get_last();
        
        if(isset($error) && in_array($error['type'], array(E_ERROR, E_PARSE, E_COMPILE_ERROR, E_CORE_ERROR)))
        {
            var_dump($error['message'], $error['file'], $error['line']);
        }
    }
    
    public static function sException($exception) {
        var_dump($exception);
    }
    
    public static function sSetShutdownHandler($function) {
        self::$shutdownHandlers[]=$function;
    }
}