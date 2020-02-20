<?php
/**
 * ---THIS-HEAD-INFO---
 */

namespace Core\ModuleBase;

interface ControllerInterface {
    /**
     * Запускает базовые действия модуля
     * @return mixed
     */
    public function start();
}