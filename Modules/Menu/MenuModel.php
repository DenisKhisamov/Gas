<?php
/**
 * ---THIS-HEAD-INFO---
 */

namespace Modules\Menu;


use Core\ModuleBase\Model;

class MenuModel extends Model {
    public function showMenu() {
        $result=$this->getMenu();
        $this->result()->setView('ShowMenu');
        
        $this->result()->setData($result);
    }

    public function getMenu() {
        $role = $this->modules()->users->getRoleId();
        $result=\DB::queryFetchRows("call menu_select(%d);", array($role));
        return $result;
    }
}