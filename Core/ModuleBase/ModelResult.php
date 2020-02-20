<?php
/**
 * ---THIS-HEAD-INFO---
 */

namespace Core\ModuleBase;


class ModelResult {
    /**
     * Шаблон вывода результата
     * @var string
     */
    private $view;
    
    /**
     * Данные результата
     * @var mixed
     */
    private $data;

    /**
     * @var string
     */
    private $h1;
    /**
     * @var array
     */
    private $breadcrumb;
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $description;
    /**
     * @var string
     */
    private $keywords;

    /**
     * Название модуля
     * @var string
     */
    private $moduleName;
    
    public function __construct($moduleName) {
        $this->setModuleName($moduleName);
        $this->h1='';
        $this->breadcrumb=array();
        $this->title='';
        $this->description='';
        $this->keywords='';
    }
    
    /**
     * Получить установленный шаблон отображения результата
     * @return string
     */
    public function getView(): string {
        return $this->view;
    }
    
    /**
     * Установить шаблон отображения результата
     * @param string $view
     */
    public function setView(string $view) {
        $this->view = $view;
    }
    
    /**
     * Получить данные результата
     * @return mixed
     */
    public function getData() {
        return $this->data;
    }
    
    /**
     * Установить данные результата
     * @param mixed $data
     */
    public function setData($data) {
        $this->data = $data;
    }
    
    /**
     * @return string
     */
    public function getModuleName(): string {
        return $this->moduleName;
    }
    
    /**
     * @param string $moduleName
     */
    public function setModuleName(string $moduleName) {
        $this->moduleName = $moduleName;
    }

    /**
     * @return string
     */
    public function getH1(): string
    {
        return $this->h1;
    }

    /**
     * @param string $h1
     */
    public function setH1(string $h1)
    {
        $this->h1 = $h1;
    }

    /**
     * @return array
     */
    public function getBreadcrumb(): array
    {
        return $this->breadcrumb;
    }

    /**
     * @param array $breadcrumb
     */
    public function setBreadcrumb(array $breadcrumb)
    {
        $this->breadcrumb = $breadcrumb;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getKeywords(): string
    {
        return $this->keywords;
    }

    /**
     * @param string $keywords
     */
    public function setKeywords(string $keywords)
    {
        $this->keywords = $keywords;
    }
    
    
}