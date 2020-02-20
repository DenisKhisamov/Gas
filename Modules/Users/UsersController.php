<?php
/**
 * ---THIS-HEAD-INFO---
 */

namespace Modules\Users;


use Core\ModuleBase\Controller;

/**
 * Class UsersController
 * @package Modules\Users
 *
 * @method UsersModel model()
 */
class UsersController extends Controller {
    public function start() {
        if (!$this->request()->isAjax()) {
            $url = $this->core()->getUrl();
            $url = explode('/',$url);
            if (empty($url) || empty($url[0])) {
                $this->model()->show();
            } elseif ($url[0] == 'add') {
                $this->model()->add_users(intval(!empty($url[1])?$url[1]:0));
            }elseif ($url[0] == 'edit') {
                $this->model()->edit(intval((!empty($url[1])?$url[1]:0)), (!empty($url[2])?$url[2]:0), (!empty($url[3])?$url[3]:0));
            }
        } else {
            if ($this->isPost('action')) {
                switch ($this->post('action')) {
                    case 'saveAdd':
                        $this->model()->saveAdd();
                        break;
                    case 'editUsers':
                        $this->model()->editUsers();
                        break;
                }
            }
        }
       // $this->model()->show();
    }
    
    public function initSession() {
        $this->getModuleObject('Session')->init();
    }
    
    public function setUser(array $user) {
        $this->model()->setUser($user);
    }
    
    public function getId():int {
        $id = $this->model()->getId();
        return $id;
    }
    
    public function getRoleId():int {
        $id = $this->model()->getRoleId();
        return $id;
    }
}