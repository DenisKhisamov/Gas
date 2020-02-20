<?php
/**
 * ---THIS-HEAD-INFO---
 */

namespace Modules\Login;


use Core\ModuleBase\Controller;
use Core\ModuleBase\ControllerInterface;
use Core\ModuleBase\ModelResult;

/**
 * Class LoginController
 * @package Modules\Login
 *
 * @method LoginModel model()
 */
class LoginController extends Controller {
    public function start() {
        if (!$this->request()->isAjax()) {
            if ($this->core()->getUrl()=='logout') {
                $this->modules()->users->setUser(array('id'=>0));
                $this->response()->redirect('');
            }
            if ($this->modules()->users->getId()) {
                $this->response()->redirect('');
            }
            $this->model()->show();
            
        }
        else {
            if ($this->isPost('action')) {
                switch ($this->post('action')) {
                    case 'autorization':
                        $this->model()->autorization();
                        break;
                }
            }
        }
    }
}