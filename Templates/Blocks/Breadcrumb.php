<?php
/**
 * ---THIS-HEAD-INFO---
 */

if (!defined('CORE_INIT')) exit;

/**
 * @var $this \Core\Template
 * @var $data mixed Данные модуля
 */


if (!empty($data)) {
    echo '<ol class="breadcrumb">';
    //echo '<li class="crumb-active"><a href="'.ROOT_URL.'">Объекты</a></li>';
    echo '<li class="crumb-icon"><a href="'.ROOT_URL.'"><span class="glyphicon glyphicon-home"></span></a></li>';
    //echo '<li class="crumb-link"><a href="'.ROOT_URL.'">Главная</a></li>';
    foreach ($data as $name => $link) {
        if (empty($link)) {
            echo '<li class="crumb-trail">' . $name . '</li>';
        } else {
            echo '<li class="crumb-link"><a href="'.ROOT_URL.$link.'">'.$name.'</a></li>';
        }
    }
    echo '</ol>';
}

?>
