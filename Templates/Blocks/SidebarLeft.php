<?php
/**
 * ---THIS-HEAD-INFO---
 */

if (!defined('CORE_INIT')) exit;

/**
 * @var $this \Core\Template
 * @var $data mixed Данные модуля
 */

//echo $this->getBlock('Header');

//echo 'In Templates/Login.php ) ';

echo $this->modules()->menu->showMenu();
//echo $this->getBlock('Footer');
?>
