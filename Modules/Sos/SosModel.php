<?php
/**
 * ---THIS-HEAD-INFO---
 */

namespace Modules\Sos;


use Core\ModuleBase\Model;

class SosModel extends Model {
    public function show() {
        $this->setTemplate('Sos');
        $this->result()->setView('Show');
        $this->result()->setH1('SOS');
        $this->result()->setBreadcrumb(array('SOS'=>''));
        $result=array();
        $this->result()->setData($result);
    }
    
    public function sos() {
        $this->getResponse()->setAjax(true);
        $result = array();
        
        if (!empty($result['errors'])) {
        
        } else {
            $id = 11;
            if ($this->modules()->users->getId()==15)
                $id=9;
            \DB::query("call objects_events_add(%d, %d, %d, '%s', '%s');", array($id, 4, 0, '',''));
            $result['result'] = 'success';
        }
        $this->result()->setData($result);
    }
    
    public function getEvents() {
        $this->getResponse()->setAjax(true);
        $result = array();
        
        if (!empty($result['errors'])) {
        
        } else {
            $event = \DB::queryFetchRow("call objects_events_get_new();",array());
            if (!empty($event) && !empty($event['id'])) {
                $result['redirect'] = ROOT_URL.'objects/edit/'.$event['object_id'].'/events/'.$event['id'];
            }
            $result['result'] = 'success';
        }
        $this->result()->setData($result);
    }
}