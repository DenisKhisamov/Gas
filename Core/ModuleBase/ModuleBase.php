<?php
/**
 * ---THIS-HEAD-INFO---
 */

namespace Core\ModuleBase;


use Core\Base;
use Core\Init;
use Core\Request;

class ModuleBase extends Base {
    /**
     * @var string
     */
    private $moduleName;
    
    public function __construct(Init &$core, string $moduleName) {
        parent::__construct($core);
        $this->moduleName = $moduleName;
    }
    
    public function getModuleName():string {
        return $this->moduleName;
    }
    
    /**
     * Получить заголовки запроса
     * @return array|false
     */
    public function getHeaders() {
        return $this->core()->request()->getHeaders();
    }
    
    /**
     * Проверка наличия в $_POST переменной (аналог isset())
     * @param $name
     *
     * @return bool
     */
    public function isPost($name):bool {
        return $this->core()->request()->isPost($name);
    }
    
    /**
     * Получить переменную $_POST
     * @param $name
     *
     * @return mixed
     */
    public function post($name) {
        return $this->core()->request()->post($name);
    }
    
    /**
     * Проверка наличия в $_GET переменной (аналог isset())
     * @param $name
     *
     * @return bool
     */
    public function isGet($name):bool {
        return $this->core()->request()->isGet($name);
    }
    
    /**
     * Получить переменную $_GET
     * @param $name
     *
     * @return mixed
     */
    public function get($name) {
        return $this->core()->request()->get($name);
    }
    
    /**
     * Проверка наличия в $_COOKIE переменной (аналог isset())
     * @param $name
     *
     * @return bool
     */
    public function isCookie($name):bool {
        return $this->core()->request()->isCookie($name);
    }
    
    /**
     * Получить переменную $_COOKIE
     * @param $name
     *
     * @return mixed
     */
    public function cookie($name) {
        return $this->core()->request()->cookie($name);
    }
    
    public function request():Request {
        return $this->core()->request();
    }
    
    public function getModuleObject($type) {
        return $this->core()->modulesWorker()->getObject($this->getModuleName(),$type);
    }
}