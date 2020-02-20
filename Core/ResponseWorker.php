<?php
/**
 * ---THIS-HEAD-INFO---
 */

namespace Core;


use Core\ModuleBase\ModelResult;

class ResponseWorker extends Base {
    
    public function returnResponse(Response $response) {
        if ($response->isAjax()) {
            $this->returnAjaxResponse($response->getModelResult());
        }
        elseif (!empty($template=$response->getTemplate())) {
            $data = $this->core()->modulesWorker()->getTemplateWorker()->showTemplate($template,$response->getModelResult());
            $this->returnHtmlResponse($data);
        }
        else {
            $this->return404();
            // \Core\Dev::sException(new \Exception('Модуль не вернул шаблон отображения или json ответ'));
        }
    }
    
    /**
     * Возвращает результат браузеру в ввиде Json
     * @param $data
     */
    public function returnAjaxResponse(ModelResult $data) {
        $this->setResponseCode(200);
        $this->setCacheHeaders();
        $this->setJsonHeaders();
        echo json_encode($data->getData());
    }
    
    public function returnHtmlResponse($data) {
        $this->setResponseCode(200);
        $this->setCacheHeaders();
        $this->setHtmlHeaders();
        echo $data;
    }
    
    public function return404() {
        $modelResult = new ModelResult('');
        $this->setResponseCode(404);
        $modelResult->setView('404');
        
        $data = $this->core()->modulesWorker()->getTemplateWorker()->showTemplate('Site',$modelResult);
        $this->returnHtmlResponse($data);
    }
    
    /**
     * Устанавливает заголовки кеширования
     */
    private function setCacheHeaders() {
        if (!defined('CAHCE_ENABLE') || !CAHCE_ENABLE) {
            /**
             * Отключаем кеш если его не включили
             */
            $this->setHeader("Last-Modified", gmdate("D, d M Y H:i:s", strtotime("-1 day")) . " GMT");
            $this->setHeader("Cache-Control", "no-store, no-cache, must-revalidate");
            $this->setHeader("Expires", "0");
            $this->setHeader("Pragma", "no-cache");
        }
    }
    
    /**
     * Устанавливает заголовки для Json
     */
    private function setJsonHeaders() {
    
    }
    
    private function setHtmlHeaders() {
    
    }
    
    private function setResponseCode(int $code) {
        http_response_code($code);
    }
    
    private function setHeader(string $name, string $value) {
        header($name.': '.$value);
    }
}