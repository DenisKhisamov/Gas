<?php
/**
 * ---THIS-HEAD-INFO---
 */

namespace Modules\Objects;


use Core\ModuleBase\Model;

class ObjectsModel extends Model {
    public function show() {
        $this->setTemplate('Site');
        $this->result()->setView('Show');
        $this->result()->setH1('Объекты');
        $this->result()->setBreadcrumb(array('Объекты'=>''));
        $result=array();
        $objects_types = \DB::queryFetchRows("call objects_type_get_list()");
        foreach ($objects_types as $type) {
            $result['objects_types'][$type['id']]=$type['name'];
        }
        $result['rows'] = \DB::queryFetchRows("call objects_get_list()");
        $this->result()->setData($result);
    }
    
    public function showForService() {
        $this->setTemplate('Site');
        $this->result()->setView('ShowForService');
        $this->result()->setH1('Объекты');
        $this->result()->setBreadcrumb(array('Объекты'=>''));
        $result=array();
        $time=time();
        $result['rows'] = \DB::queryFetchRows("SELECT o.id, o.name, o.address, o.type_id, o.lat, o.lon, o.user_id, o.area_id,objects_type_get_name(o.type_id) as type_name,users_get_fio(o.user_id) as user_name, format_date(s.date) as date, s.id as service_id, s.name as service_name FROM objects as o INNER JOIN services as s ON s.object_id=o.id WHERE o.user_id=%d AND s.date>=%d ORDER BY s.date ASC",array($this->modules()->users->getId(),($time-$time%86400)));
        $this->result()->setData($result);
    }
    
    public function add(int $type_id) {
        $result=$this->addEditPrepare();
        $result['type_id'] = $type_id;
        $this->setTemplate('Site');
        $this->result()->setView('AddForm'.$type_id);
        $this->result()->setH1('Добавление объекта');
        $this->result()->setBreadcrumb(array('Объекты'=>'objects','Добавление объекта'=>''));
        $this->result()->setData($result);
    }
    
    public function edit(int $id, string $type, $dop_id = 0) {
        $result=$this->addEditPrepare();
        $result['object'] = \DB::queryFetchRow("call objects_get(%d)",array($id));
        if (!$result['object']) {
            return;
        }
        if ($type=='events') {
            $result['events_tab'] = true;
            $result['event'] = \DB::queryFetchRow("SELECT *, objects_events_get_type(e.type_id) as type_name, objects_events_get_status_name(e.status_id) as status_name FROM objects_events as e WHERE id=%d",array($dop_id));
        } elseif ($type=='services') {
            $result['services_tab'] = true;
            $result['service'] = \DB::queryFetchRow("SELECT s.*,cs.id as carried_service_id,cs.comment FROM services as s LEFT JOIN carried_services as cs ON cs.service_id=s.id WHERE s.id=%d",array($dop_id));
            
            $result['service_jobs'] = \DB::queryFetchRows("SELECT sj.*,j.name,csj.id as job_completed FROM services_jobs as sj INNER JOIN jobs as j ON j.id=sj.job_id LEFT JOIN carried_services_jobs as csj ON csj.carried_service_id=%d AND csj.job_id=sj.job_id WHERE sj.service_id=%d ORDER BY j.name ASC",array($result['service']['carried_service_id'],$result['service']['id']));
        }
        
        //$result['events'] = \DB::queryFetchRows("call objects_events_get_list_by_id(%d)",array($id));
        
        $result['services'] = \DB::queryFetchRows("SELECT s.*,cs.date as date_service,users_get_fio(cs.user_id) as user_name FROM services as s LEFT JOIN carried_services as cs ON cs.service_id=s.id WHERE s.object_id=%d ORDER BY s.date DESC",array($id));
        
        $this->setTemplate('Site');
        $this->result()->setView('EditForm'.$result['object']['type_id']);
        $this->result()->setH1($result['object']['name'].'');
        $this->result()->setBreadcrumb(array('Объекты'=>'objects','Редактирование объекта'=>''));
        $this->result()->setData($result);
    }
    
    public function addEditPrepare() {
        $result=array();
        $users = \DB::queryFetchRows("call users_get_list()");
        $result['users']=array(0=>'Отвественный...');
        foreach ($users as $user) {
            $result['users'][$user['id']]=$user['fio'];
        }
        $objects_types = \DB::queryFetchRows("call objects_type_get_list()");
        $result['objects_types']=array(0=>'Тип объекта...');
        foreach ($objects_types as $type) {
            $result['objects_types'][$type['id']]=$type['name'];
        }
        return $result;
    }
    
    public function saveAdd() {
        $this->getResponse()->setAjax(true);
        $result = array();
        if (!$this->isPost('name')) {
            $result['errors']['name']='Необходимо задать наименование';
        }
        if (!$this->isPost('address')) {
            $result['errors']['address']='Необходимо задать адрес';
        }
        if (!$this->isPost('lat')) {
            $result['errors']['lat']='Необходимо задать latitude';
        }
        if (!$this->isPost('lon')) {
            $result['errors']['lon']='Необходимо задать longitude';
        }
        if (!$this->isPost('type_id')) {
            $result['errors']['type_id']='Необходимо задать тип объекта';
        }
        
        if (!empty($result['errors'])) {
        
        } else {
            $name = $this->post('name');
            $address = $this->post('address');
            $lat = $this->post('lat');
            $lon = $this->post('lon');
            $type_id = $this->post('type_id');
            $user_id = $this->post('user_id');
            $objectId = \DB::queryFetchValue("call object_add('%s','%s', %d, %f, %f, %d, %d);", array($name, $address,$type_id,$lat,$lon,$user_id,0));
            if (!$objectId) {
                $result['errors'][] = 'Ошибка создания объекта пожалуйста обновите старницу и попробуйте снова';
            }
            else {
                $result['result'] = 'success';
                $result['redirect'] = ROOT_URL.'objects';
            }
        }
        $this->result()->setData($result);
    }
    
    public function saveEdit() {
        $this->getResponse()->setAjax(true);
        $result = array();
        if (!$this->isPost('name')) {
            $result['errors']['name']='Необходимо задать наименование';
        }
        if (!$this->isPost('address')) {
            $result['errors']['address']='Необходимо задать адрес';
        }
        if (!$this->isPost('lat')) {
            $result['errors']['lat']='Необходимо задать latitude';
        }
        if (!$this->isPost('lon')) {
            $result['errors']['lon']='Необходимо задать longitude';
        }
        
        if (!empty($result['errors'])) {
        
        } else {
            $id = $this->post('id');
            $name = $this->post('name');
            $address = $this->post('address');
            $lat = $this->post('lat');
            $lon = $this->post('lon');
            $user_id = $this->post('user_id');
            \DB::query("call objects_edit(%d, '%s','%s', %f, %f, %d, %d);", array($id, $name, $address, $lat,$lon,$user_id,0));
            
            $result['result'] = 'success';
            $result['redirect'] = ROOT_URL.'objects';
        }
        $this->result()->setData($result);
    }
    
    public function saveEditEvent() {
        $this->getResponse()->setAjax(true);
        $result = array();
        if (!$this->isPost('dispatcher_comment')) {
            $result['errors']['dispatcher_comment']='Необходимо задать комментарий';
        }
    
        if (!empty($result['errors'])) {
        
        } else {
            $id = $this->post('id');
            $dispatcher_comment = $this->post('dispatcher_comment');
            \DB::query("UPDATE objects_events SET status_id=2,dispatcher_comment='%s' WHERE id=%d", array($dispatcher_comment,$id));
        
            $result['result'] = 'success';
            $result['redirect'] = ROOT_URL.'objects';
        }
        $this->result()->setData($result);
    }
    
    public function saveEditService() {
        $this->getResponse()->setAjax(true);
        $result = array();
        if (!$this->isPost('comment')) {
            $result['errors']['comment']='Необходимо задать комментарий';
        }
    
        if (!empty($result['errors'])) {
        
        } else {
            $id = $this->post('id');
            $comment = $this->post('comment');
            $cservice = \DB::queryFetchRow("SELECT cs.* FROM carried_services as cs WHERE cs.service_id=%d",array($id));
            if (empty($cservice)) {
                $cserviceId = \DB::queryFetchValue("INSERT INTO carried_services (service_id, date, user_id, comment) VALUES (%d,%d,%d,'%s')",array($id,time(),$this->modules()->users->getId(),$comment));
            } else {
                $cserviceId = $cservice['id'];
                \DB::query("UPDATE carried_services SET date=%d,comment='%s',user_id=%d WHERE id=%d", array(time(), $comment, $this->modules()->users->getId(),$cserviceId));
                \DB::query("DELETE FROM carried_services_jobs WHERE carried_service_id=%d",array($cserviceId));
            }
            if ($this->isPost('jobs')) {
                $jobs = $this->post('jobs');
                foreach ($jobs as $job) {
                    \DB::query("INSERT INTO carried_services_jobs (carried_service_id, job_id) VALUES (%d,%d)",array($cserviceId,$job));
                }
            }
        
            $result['result'] = 'success';
            $result['redirect'] = ROOT_URL.'objects';
        }
        $this->result()->setData($result);
    }
}