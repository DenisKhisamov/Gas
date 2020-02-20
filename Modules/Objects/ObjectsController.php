<?php
/**
 * ---THIS-HEAD-INFO---
 */

namespace Modules\Objects;


use Core\ModuleBase\Controller;

/**
 * Class ObjectsController
 * @package Modules\Objects
 *
 * @method ObjectsModel model()
 */
class ObjectsController extends Controller {
    public function start() {
        if (!$this->request()->isAjax()) {
            $url = $this->core()->getUrl();
            $url = explode('/',$url);
            if (empty($url) || empty($url[0])) {
                if ($this->modules()->users->getRoleId()!=4) {
                    $this->model()->show();
                } else {
                    $this->model()->showForService();
                }
            } elseif ($url[0] == 'add') {
                $this->model()->add(intval(!empty($url[1])?$url[1]:0));
            } elseif ($url[0] == 'edit') {
                $this->model()->edit(intval((!empty($url[1])?$url[1]:0)), (!empty($url[2])?$url[2]:0), (!empty($url[3])?$url[3]:0));
            }
        } else {
            if ($this->isPost('action')) {
                switch ($this->post('action')) {
                    case 'saveAdd':
                        $this->model()->saveAdd();
                        break;
                    case 'saveEdit':
                        $this->model()->saveEdit();
                        break;
                    case 'saveEditEvent':
                        $this->model()->saveEditEvent();
                        break;
                    case 'saveEditService':
                        $this->model()->saveEditService();
                        break;
                }
            }
        }
    }
}