<?php
/**
 * ---THIS-HEAD-INFO---
 */

namespace Modules\Sos;


use Core\ModuleBase\Controller;

/**
 * Class SosController
 * @package Modules\Sos
 *
 * @method SosModel model()
 */
class SosController extends Controller {
    public function start() {
        if (!$this->request()->isAjax()) {
            if (empty($this->core()->getUrl())) {
                $this->model()->show();
            } elseif ($this->core()->getUrl() == 'add') {
                $this->model()->add();
            } elseif (substr($this->core()->getUrl(),0,4) == 'edit') {
                $this->model()->edit(intval(substr($this->core()->getUrl(),5)));
            }
        } else {
            if ($this->isPost('action')) {
                switch ($this->post('action')) {
                    case 'sos':
                        $this->model()->sos();
                        break;
                    case 'getEvents':
                        $this->model()->getEvents();
                        break;
                }
            }
        }
    }
}