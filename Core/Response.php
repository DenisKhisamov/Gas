<?php
/**
 * ---THIS-HEAD-INFO---
 */

namespace Core;


use Core\ModuleBase\ModelResult;

class Response {
    /**
     * Ответ как ajax
     * @var bool
     */
    private $ajax;
    
    /**
     * Шаблон отображения
     * @var string
     */
    private $template;
    
    /**
     * Данные ответа модуля
     * @var ModelResult
     */
    private $modelResult;
    
    public function __construct() {
        $this->ajax=false;
        $this->template='';
    }
    
    /**
     * @return bool
     */
    public function isAjax(): bool {
        return $this->ajax;
    }
    
    /**
     * Задать результат как аякс
     * @param bool $ajax
     */
    public function setAjax(bool $ajax) {
        $this->ajax = $ajax;
    }
    
    /**
     * Получить заданный шаблон
     * @return string
     */
    public function getTemplate(): string {
        return $this->template;
    }
    
    /**
     * Установить шаблон вывода
     * @param string $template
     */
    public function setTemplate(string $template) {
        $this->template = $template;
    }
    
    /**
     * Получить результат модуля
     * @return ModelResult
     */
    public function getModelResult(): ModelResult {
        return $this->modelResult;
    }
    
    /**
     * Получить результат модуля
     * @param ModelResult $modelResult
     */
    public function setModelResult(ModelResult $modelResult) {
        $this->modelResult = $modelResult;
    }
    
    /**
     * Редирект на указанный урл
     * @param string $url
     */
    public function redirect(string $url) {
        header ("Last-Modified: ".gmdate("D, d M Y H:i:s", strtotime("-1 day"))." GMT");
        header ("Cache-Control: no-store, no-cache, must-revalidate");
        header ("Expires: 0");
        header ("Pragma: no-cache");
        if (empty($url))
            $url=ROOT_URL;
        if (substr($url, 0, 4) != 'http')
        {
            $url = ROOT_URL.$url;
        }
        echo '<meta http-equiv="Refresh" content="0; URL='.$url.'" />';
        exit;
    }
    
    public function redirectWithCache(string $url,int $http_response_code=301) {
        if (substr($url, 0, 4) != 'http')
        {
            $url = ROOT_URL.$url;
        }
        $url = str_replace(array("\n", "\r", '&amp;'), array('', '', '&'), $url);
        header('Location: '.$url, true, $http_response_code);
        exit;
    }
}