<?php
/**
 * ---THIS-HEAD-INFO---
 */

namespace Modules\Map;

use Core\ModuleBase\Controller;

class MapController extends Controller {
    public function start()
    {
        if (!$this->request()->isAjax()) {
            $this->model()->showMap();
        }
        else
            {
            if ($this->isPost('action')) {
                switch ($this->post('action')) {
                    case 'get_data':
                        $this->model()->get_data();
                        break;
                    case 'get_object':
                        $this->model()->get_object();
                        break;
                    case 'push_time':
                        $this->model()->push_time();
                        break;
                }
            }
        }
    }


    public function showMap():string {
        $this->model()->showMap();
        $result = $this->model()->result();
        return $this->core()->modulesWorker()->getTemplateWorker()->getView($result->getView(),$this->getModuleName(),$result->getData());
    }
}