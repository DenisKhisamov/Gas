<?php
/**
 * ---THIS-HEAD-INFO---
 */

namespace Core;

class Init {
    /**
     * @var string
     */
    private $url;
    /**
     * @var ModulesWorker
     */
    private $modulesWorker;
    
    private $request;
    
    /**
     * Обращение к другим модулям
     * @var Modules
     */
    private $modules;
    
    /**
     * Обращение к другим модулям
     * @return Modules
     */
    public function &modules():Modules {
        return $this->modules;
    }
    
    /**
     * Работа с модулями
     * @return ModulesWorker
     */
    public function &modulesWorker():ModulesWorker {
        return $this->modulesWorker;
    }
    
    public function getUrl():string {
        return $this->url;
    }
    
    public function setUrl(string $url) {
        $this->url = $url;
    }
    
    /**
     * Класс для работы с входящими данными
     * @return Request
     */
    public function request():Request {
        return $this->request;
    }
    
    /**
     * Запускает инициализацию движка
     */
    public function start() {
        $this->core = $this;
        $this->request = new Request();
        $this->modulesWorker = new ModulesWorker($this);
        $this->modules = new Modules($this);
        
        $this->modules()->users->initSession();
        $this->mPrepareRequest();
        $this->modulesWorker()->startModule($this->modulesWorker()->getCurrent());
    }
    
    private function mPrepareRequest() {
        if ($this->request()->isAjax()) {
            $this->modulesWorker()->setCurrent($this->request()->post('module'));
            $this->setUrl('');
        }
        else {
            $menu = $this->modules()->menu->getMenu();
            $menu_modules = array();
            foreach ($menu as $menu_item) {
                $menu_modules[]=$menu_item['url'];
            }
            $menu_modules[]=strtolower(AUTORIZATION_MODULE);
            if (!empty($_GET['rewrite'])) {
                $url = $_GET['rewrite'];
                $url = explode('/', $url, 2);
                if (in_array($url[0],$menu_modules)) {
                    $this->modulesWorker()->setCurrent($url[0]);
                    if (!empty($url[1])) {
                        $this->setUrl($url[1]);
                    } else $this->setUrl('');
                } else {
                    $this->modulesWorker()->getResponseWorker()->return404();
                }
            } else {
                $this->setUrl('');
                $this->modulesWorker()->setCurrent(array_shift($menu_modules));
            }
        }
        $userId = $this->modules()->users->getId();
        if (!$userId && $this->modulesWorker()->getCurrent()!=AUTORIZATION_MODULE) {
            $this->modulesWorker()->setCurrent(AUTORIZATION_MODULE);
        }
    }
    
}