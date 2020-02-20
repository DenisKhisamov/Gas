<?php
/**
 * ---THIS-HEAD-INFO---
 */

namespace Modules\Login;


use Core\ModuleBase\Model;

class LoginModel extends Model {
    public function show() {
        $this->setTemplate('Login');
        $this->result()->setView('Show');
        $result=array();
        $this->result()->setData($result);
    }
    
    public function autorization() {
        $this->getResponse()->setAjax(true);
        $result = array();
        if (!$this->isPost('username') || !$this->isPost('password')) {
            $result['errors'][]='Не задан лигин или пароль';
        }
        else {
            $username = $this->post('username');
            $password = $this->post('password');
            $userId = \DB::queryFetchValue("call users_verify('%s','%s');", array($username, $password));
            if (!$userId) {
                $result['errors'][] = 'Не найден пользователь с указаным логином и паролем';
            }
            else {
                $this->modules()->users->setUser(array('id'=>$userId));
                $result['result'] = 'success';
                $result['redirect'] = ROOT_URL;
            }
        }
        $this->result()->setData($result);
    }
    
}