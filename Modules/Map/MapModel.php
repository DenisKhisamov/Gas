<?php
/**
 * ---THIS-HEAD-INFO---
 */

namespace Modules\Map;


use Core\ModuleBase\Model;

class MapModel extends Model {
    public function showMap() {

        $this->setTemplate('Site');
        $this->result()->setH1('Карта');
        $this->result()->setBreadcrumb(array());
        $this->result()->setView('ShowMap');
        $result = array();

        $result['rows'] = 'sadasdasd';

        $this->result()->setData($result);

    }
   public function get_data() {
       $this->getResponse()->setAjax(true);
        $results=\DB::queryFetchRows("call get_object_event_object();");
        $data = array();

       $day_ago = mktime(23, 59, 0, date("m"), date("d")-10, date("Y"));

        foreach ($results as $result)
        {
            if ($day_ago > $result['time'])
            {
                $data['check_flag1'] = 0;
            }
            else{
                $data['check_flag1'] = 1;
            }
            $data['day_ago'] = $day_ago;
            $data['check_flag'] = $data['check_flag1'];
            $data['time'] = $result['time'];
            $data['id'] = $result['id'];
            $data['lat'] = $result['lat'];
            $data['lon'] = $result['lon'];
            $data['type_id'] = $result['type_id'];
            $data['name'] = $result['name'];
            $data['status_id'] = $result['status_id'];
            $rows[]=$data;
        }

       $this->result()->setData($rows);
    }
    public function get_object()
    {
        $this->getResponse()->setAjax(true);
        $results=\DB::queryFetchRows("call objects_events_get_list();");
        $data = array();
        foreach ($results as $result)
        {
            $data['object_id'] = $result['object_id'];
            $rows[]=$data;
        }
        $this->result()->setData($rows);
    }
    public function push_time()
    {

        if (!empty($_POST['id']))
        {
            $time = mktime(23, 59, 0, date("m"), date("d"), date("Y"));
            \DB::query("call object_update_time(%d, %d);", array($_POST['id'], $time));
        }
    }
}