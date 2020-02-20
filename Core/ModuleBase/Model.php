<?php
/**
 * ---THIS-HEAD-INFO---
 */

namespace Core\ModuleBase;

use Core\Init;
use Core\Response;

class Model extends ModuleBase {
    /**
     * Ответ
     * @var Response
     */
    private $response;
    
    /**
     * Результат работы модели
     * @var ModelResult
     */
    private $result;
    
    public function __construct(Init $core, $moduleName) {
        parent::__construct($core, $moduleName);
        $this->setResponse(new Response());
        $this->setResult(new ModelResult($this->getModuleName()));
    }
    
    /**
     * Получаем ответ
     * @return Response
     */
    public function &getResponse(): Response {
        return $this->response;
    }
    
    /**
     * @param Response $response
     */
    public function setResponse(Response $response) {
        $this->response = $response;
    }
    
    public function setAjax(bool $ajax) {
        $this->response->setAjax($ajax);
    }
    
    public function setTemplate(string $template) {
        $this->response->setTemplate($template);
    }
    
    /**
     * Результат модели
     * @return ModelResult
     */
    public function &result(): ModelResult {
        return $this->result;
    }
    
    /**
     * Установить результат модели
     * @param ModelResult $mResult
     */
    public function setResult(ModelResult $result) {
        $this->result = $result;
    }
}