<?php
/**
 * ---THIS-HEAD-INFO---
 */

namespace Core;


use Core\ModuleBase\Controller;
use Core\ModuleBase\Model;
use Core\ModuleBase\ModelResult;
use http\Env\Response;

class ModulesWorker extends Base {
    private $mCurrent;
    
    
    
    public function getCurrent() {
        return $this->mCurrent;
    }
    
    public function setCurrent(string $moduleName) {
        $this->mCurrent = ucfirst($moduleName);
    }
    
    /**
     * Проверить установлен ли модуль
     *
     * @param string $moduleName
     *
     * @return bool
     */
    public function isInstalled(string $moduleName):bool {
        if (in_array($moduleName,INSTALLED_MODULES)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function startModule(string $moduleName) {
        $controller = $this->getController($moduleName);
        $controller->start();
        $response = $controller->response();
    
        $this->getResponseWorker()->returnResponse($response);
    }
    
    public function &getController(string $moduleName):Controller {
        $controller = $this->getObject($moduleName, 'Controller');
        if (! is_subclass_of($controller, 'Core\\ModuleBase\\ControllerInterface'))
        {
            \Core\Dev::sException(new \Exception('Контроллер модуля '.$moduleName.' должен реализовать интерфейс Core\\ModuleBase\\ControllerInterface.'));
        }
        return $controller;
    }
    
    /**
     * Получить модель модуля
     * @param string         $moduleName
     * @param \Core\Response $response
     *
     * @return Model
     */
    public function &getModel(string $moduleName):Model {
        $module = $this->getObject($moduleName, 'Model');
        return $module;
    }
    
    /**
     * Получить объект модуля с указанным типом
     * (Контроллер, Модель)
     * @param string $moduleName
     * @param string $type
     *
     * @return mixed
     */
    public function &getObject(string $moduleName, string $type) {
        $class = 'Modules\\'.$moduleName.'\\'.$moduleName.$type;
        $object = $this->getCache($class);
        if (is_null($object)) {
            if (!$this->isInstalled($moduleName)) {
                Dev::sException(new \Exception('Попытка получить доступ к не установленному модулю '.$moduleName));
            }
            $object = new $class($this->core(),$moduleName);
            $this->setCache($class,$object);
        }
        return $object;
    }
    
    public function &getTemplateWorker():Template {
        $template = $this->getCache('Core\\Template');
        if (is_null($template)) {
            $template = new Template($this->core());
            $this->setCache('Core\\Template',$template);
        }
        return $template;
    }
    
    public function &getResponseWorker():ResponseWorker {
        $responseWorker = $this->getCache('Core\\ResponseWorker');
        if (is_null($responseWorker)) {
            $responseWorker = new ResponseWorker($this->core());
            $this->setCache('Core\\ResponseWorker',$responseWorker);
        }
        return $responseWorker;
    }
}