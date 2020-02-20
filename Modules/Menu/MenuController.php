<?php
/**
 * ---THIS-HEAD-INFO---
 */

namespace Modules\Menu;

use Core\ModuleBase\Controller;

class MenuController extends Controller {
    public function start() {}

    public function showMenu():string {
        $this->model()->showMenu();
        $result = $this->model()->result();
        return $this->core()->modulesWorker()->getTemplateWorker()->getView($result->getView(),$this->getModuleName(),$result->getData());
    }
    
    public function getMenu() {
        return $this->model()->getMenu();
    }
}