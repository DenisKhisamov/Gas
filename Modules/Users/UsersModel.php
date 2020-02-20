<?php
/**
 * ---THIS-HEAD-INFO---
 */

namespace Modules\Users;


use Core\ModuleBase\Model;

class UsersModel extends Model {
    private $user;
    
    public function show() {
        $this->setTemplate('Site');
        $this->result()->setView('Show');
        $result = array();
        
        $result['rows'] = \DB::queryFetchRows("call users_get_list()");
    
        $this->result()->setH1('Пользователи');
        $this->result()->setBreadcrumb(array('Пользователи и роли'=>''));
        $this->result()->setData($result);
    }
    
    public function setUser(array $user) {
        $this->user = array();
        if (empty($user) || empty($user['id']))
            return;
        if (count($user)==1) {
            $user = \DB::queryFetchRow("call users_get(%d)",array($user['id']));
            if (!$user)
                return;
        }
        $this->user = $user;
    }

    public function add_users(int $type_id) {
        $result=$this->addEditPrepare();
        $result['type_id'] = $type_id;
        $this->setTemplate('Site');
        $this->result()->setView('AddForm'.$type_id);
        $this->result()->setH1('Добавление пользователя');
        $this->result()->setBreadcrumb(array('Пользователи'=>'users','Добавление пользователя'=>''));
        $this->result()->setData($result);
    }
    public function addEditPrepare() {
        $result=array();
        $users = \DB::queryFetchRows("call users_role()");
        $result['users']=array(1=>'Администратор...');
        foreach ($users as $user) {
            $result['users'][$user['id']]=$user['name'];
        }
        /*$objects_types = \DB::queryFetchRows("call objects_type_get_list()");
        $result['objects_types']=array(0=>'Тип объекта...');
        foreach ($objects_types as $type) {
            $result['objects_types'][$type['id']]=$type['name'];
        }*/
        return $result;
    }

    public function getUser():array {
        if (empty($this->user))
            return array();
        else
            return $this->user;
    }
    
    public function getId():int {
        if (empty($this->user) || empty($this->user['id']))
            return 0;
        else
            return $this->user['id'];
    }
    
    public function getRoleId():int {
        if (empty($this->user) || empty($this->user['role_id']))
            return 0;
        else
            return $this->user['role_id'];
    }
    public function saveAdd() {
        $this->getResponse()->setAjax(true);
        $result = array();
        if (!$this->isPost('fio')) {
            $result['errors']['name']='Необходимо задать фио';
        }
        if (!$this->isPost('phone')) {
            $result['errors']['phone']='Необходимо задать телефон';
        }
        if (!$this->isPost('email')) {
            $result['errors']['email']='Необходимо задать email';
        }
        if (!$this->isPost('login')) {
            $result['errors']['login']='Необходимо задать логин';
        }
        if (!$this->isPost('password')) {
            $result['errors']['password']='Необходимо задать пароль';
        }

        if (!empty($result['errors'])) {

        } else {
            $fio = $this->post('fio');
            $phone = $this->post('phone');
            $email = $this->post('email');
            $login = $this->post('login');
            $password = md5(md5($this->post('password')));
            $role_id = $this->post('role_id');
            $created = mktime(0, 0, 0, date("m"), date("d"), date("Y"));
            $objectId = \DB::queryFetchValue("call users_add('%s',%d, %d, '%s', '%s', '%s', %d, %d);", array($fio, $phone,$role_id,$email,$login,$password,0, $created));
            if (!$objectId) {
                $result['errors'][] = 'Ошибка добавления пользователя пожалуйста обновите старницу и попробуйте снова';
            }
            else {
                $result['result'] = 'success';
                $result['redirect'] = ROOT_URL.'users';
            }
        }
        $this->result()->setData($result);
    }
    public function edit(int $id, string $type, $dop_id = 0) {

        $result=$this->addEditPrepare();
        //$result['events'] = \DB::queryFetchRows("call objects_events_get_list_by_id(%d)",array($id));

        $result['users_data'] = \DB::queryFetchRow("SELECT * FROM users WHERE id=%d",array($id));

        $this->setTemplate('Site');
        $this->result()->setView('EditForm');
        $this->result()->setH1($result['users_data']['fio'].'');
        $this->result()->setBreadcrumb(array('Пользователи'=>'users','Редактирование пользователя'=>''));
        $this->result()->setData($result);
    }
    public function editUsers() {
        $this->getResponse()->setAjax(true);
        $result = array();
        if (!$this->isPost('fio')) {
            $result['errors']['name']='Необходимо задать фио';
        }
        if (!$this->isPost('phone')) {
            $result['errors']['phone']='Необходимо задать телефон';
        }
        if (!$this->isPost('email')) {
            $result['errors']['email']='Необходимо задать email';
        }
        if (!$this->isPost('login')) {
            $result['errors']['login']='Необходимо задать логин';
        }



        if (!empty($result['errors'])) {

        } else {

            $id = $this->post('id');
            $fio = $this->post('fio');
            $phone = $this->post('phone');
            $email = $this->post('email');
            $login = $this->post('login');
            $role_id = $this->post('role_id');
            if (!empty($this->post('password1'))) {
                $password = md5(md5($this->post('password1')));
            } else{
                $password = $this->post('password');
            }
           \DB::query("call users_edit('%s','%s',%d,'%s','%s','%s', %d);", array($fio, $phone, $role_id, $email,$login,$password,$id));

            $result['result'] = 'success';
            $result['redirect'] = ROOT_URL.'users';
        }
        $this->result()->setData($result);
    }

}