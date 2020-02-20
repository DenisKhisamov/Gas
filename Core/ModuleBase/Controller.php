<?php
/**
 * ---THIS-HEAD-INFO---
 */

namespace Core\ModuleBase;

use Core\Response;

abstract class Controller extends ModuleBase implements ControllerInterface {
    
    public abstract function start();
    
    public function &model() {
        $model = $this->core()->modulesWorker()->getModel($this->getModuleName());
        return $model;
    }
    
    /**
     * Подготавливает результат, вызывается автоматически
     */
    public function response():Response {
        $response = $this->model()->getResponse();
        $response->setModelResult($this->model()->result());
        $this->model()->setResponse(new Response());
        $this->model()->setResult(new ModelResult($this->getModuleName()));
        return $response;
    }
}