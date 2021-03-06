<?php
/**
 * ---THIS-HEAD-INFO---
 */

if (!defined('CORE_INIT')) exit;

/**
 * @var $this \Core\Template
 * @var $data mixed Данные модуля
 * @var $moduleName string Название модуля
 */

echo '<div class="tray tray-center" style="height: 520px;">';
//echo $this->getView('AddForm',$moduleName, $data);
?>
    <div class="panel">
        <div class="clearfix"></div>
        <div class="panel-menu admin-form theme-primary">
            <div class="row">
                <!--div class="col-md-4">
                    <label class="field select">
                        <select id="filter-purchases" name="filter-purchases" class="empty">
                            <option value="0">Filter by Purchases</option>
                            <option value="1">1-49</option>
                            <option value="2">50-499</option>
                            <option value="1">500-999</option>
                            <option value="2">1000+</option>
                        </select><i class="arrow double"></i>
                    </label>
                </div-->
                <div class="col-md-4">
                    <label class="field select">
                        <select id="filter-status" name="filter-status" class="empty">
                            <option value="0">Фильтровать по статусу</option>
                            <option value="1">Активен</option>
                            <option value="2">Не активен</option>
                            <option value="3">Приостановлен</option>
                            <option value="4">Онлайн</option>
                            <option value="5">Офлайн</option>
                        </select><i class="arrow double"></i>
                    </label>
                </div>
            </div>
        </div>
        <div class="panel-body pn">
            <div class="table-responsive of-a">
                <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                    <thead>
                    <tr class="bg-light">
                        <th class="text-center">Выбор</th>
                        <th>Фото</th>
                        <th>Наименование</th>
                        <th>Тип</th>
                        <th>Адрес</th>
                        <th>Отвественный</th>
                        <th>Обслуживание</th>
                        <th>Дата</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    
                    if (!empty($data['rows'])) {
                        foreach ($data['rows'] as $row) {
                            echo '
                            <tr>
                                <td class="text-center">
                                    <label class="option block mn">
                                        <input type="checkbox" name="mobileos" value="FR"><span
                                                class="checkbox mn"></span>
                                    </label>
                                </td>
                                <td class="w50"><img title="user" src="'.ROOT_URL.'img/valve2.jpg"
                                                     class="img-responsive mw30 ib mr10"></td>
                                <td><a href="'.ROOT_URL.'objects/edit/'.$row['id'].'/services/'.$row['service_id'].'">'.$row['name'].'</a></td>
                                <td>'.$row['type_name'].'</td>
                                <td>'.$row['address'].'</td>
                                <td>'.$row['user_name'].'</td>
                                <td>'.$row['service_name'].'</td>
                                <td>'.$row['date'].'</td>
                            </tr>
                            ';
                        }
                    }
                    
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php

//echo $this->getView('Filter',$moduleName, $data);