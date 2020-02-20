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

    
echo '
    <label for="'.$data['name'].'" class="field-label text-muted fs18 mb10">'.$data['title'].'</label>
    <label for="'.$data['name'].'" class="field select">
        <select id="'.$data['name'].'" name="'.$data['name'].'" class="empty" '.$data['attributes'].'>';

foreach ($data['selects'] as $k=>$val) {
    echo '<option value="'.$k.'"'.(!empty($k==$data['value'])?' selected':'').'>'.$val.'</option>';
}

echo '
        </select><i class="arrow double"></i>
    </label>
';