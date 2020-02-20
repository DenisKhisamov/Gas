<?php
/**
 * Created by PhpStorm.
 * User: Денис
 * Date: 26.01.2018
 * Time: 11:12
 */

if (!defined('CORE_INIT')) exit;

/**
 * @var $this \Core\Template
 * @var $data mixed Данные модуля
 */

echo  '
';
if (!empty($data['title']))
    echo '<label for="'.$data['name'].'" class="field-label text-muted fs18 mb10">'.$data['title'].'</label>';
    
    echo '
    <label for="'.$data['name'].'" class="field prepend-icon">
        <input id="'.$data['name'].'" type="'.$data['type'].'" value="'.$data['value'].'" name="'.$data['name'].'" placeholder="'.$data['placeholder'].'" class="gui-input">
        <label for="'.$data['name'].'" class="field-icon"><i class="fa fa-'.$data['icon'].'"></i></label>
    </label>
';