<?php
/**
 * ---THIS-HEAD-INFO---
 */

namespace Core;

/**
 * Class Request Работа с входяшими заголовками и параметрами
 * @package Core
 */
class Request {
    /**
     * @var array|false
     */
    private $headers;
    
    /**
     * @var bool
     */
    private $ajax;
    
    public function __construct() {
        $this->headers = $this->getAllHeaders();
        if ($this->isPost('ajax') && $this->isPost('module')) {
            $this->ajax=true;
        } else {
            $this->ajax=false;
        }
    }
    
    /**
     * Получить заголовки запроса
     * @return array|false
     */
    public function getHeaders() {
        return $this->headers;
    }
    
    /**
     * Проверка наличия в $_POST переменной (аналог isset())
     * @param $name
     *
     * @return bool
     */
    public function isPost($name):bool {
        if (!empty($_POST[$name])) {
            return true;
        } else {
            return false;
        }
    }
    
    /**
     * Получить переменную $_POST
     * @param $name
     *
     * @return mixed
     */
    public function post($name) {
        if ($this->isPost($name))
            return $_POST[$name];
        else
            return null;
    }
    
    /**
     * Проверка наличия в $_GET переменной (аналог isset())
     * @param $name
     *
     * @return bool
     */
    public function isGet($name):bool {
        if (isset($_GET[$name])) {
            return true;
        } else {
            return false;
        }
    }
    
    /**
     * Получить переменную $_GET
     * @param $name
     *
     * @return mixed
     */
    public function get($name) {
        if ($this->isGet($name))
            return $_GET[$name];
        else
            return null;
    }
    
    /**
     * Проверка наличия в $_COOKIE переменной (аналог isset())
     * @param $name
     *
     * @return bool
     */
    public function isCookie($name):bool {
        if (isset($_COOKIE[$name])) {
            return true;
        } else {
            return false;
        }
    }
    
    /**
     * Получить переменную $_COOKIE
     * @param $name
     *
     * @return mixed
     */
    public function cookie($name) {
        if ($this->isCookie($name))
            return $_COOKIE[$name];
        else
            return null;
    }
    
    /**
     * Аякс запрос
     * @return bool
     */
    public function isAjax(): bool {
        return $this->ajax;
    }
    
    private function getAllHeaders() {
        if (!function_exists('getallheaders')) {
            $headers = [];
            foreach ($_SERVER as $name => $value) {
                if (substr($name, 0, 5) == 'HTTP_') {
                    $headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value;
                }
            }
        }
        else
        {
            $headers = getallheaders();
        }
        return $headers;
    }
}