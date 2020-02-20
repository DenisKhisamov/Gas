<?php
/**
 * ---THIS-HEAD-INFO---
 */

namespace Core;

use Modules\Login\LoginController;
use Modules\Objects\ObjectsController;
use Modules\Users\UsersController;
use Modules\Menu\MenuController;
use Modules\Map\MapController;

/**
 * Class Modules
 * @package Core
 *
 * @property LoginController $login Модуль авторизации
 * @property ObjectsController $objects Модуль объекты
 * @property UsersController $users Модуль пользователи
 * @property MenuController $menu Модуль меню
 * @property MapController $map Модуль меню
 */
class Modules extends Base {
    public function &__get($name) {
        $moduleName = ucfirst($name);
        return $this->core()->modulesWorker()->getController($moduleName);
    }
    
    /*public function __call($name, $arguments) {
        // TODO: Implement __call() method.
    }*/
}