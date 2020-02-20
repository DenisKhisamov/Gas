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
    <div class="panel-menu">
        <a href="<?php echo ROOT_URL;?>users/add/1" class="btn btn-default btn-sm fw600 ml10"><span class="fa fa-plus pr5"></span> Добавить пользователя</a>
    </div>
    <div class="panel">
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
                        <select id="filter-group" name="filter-group" class="empty">
                            <option value="0">Фильтровать по роли</option>
                            <option value="1">Слесарь</option>
                            <option value="2">Диспетчер</option>
                            <option value="3">Администратор</option>
                            <option value="4">Начальник</option>
                        </select><i class="arrow double"></i>
                    </label>
                </div>
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
                        <th>Аватар</th>
                        <th>Имя</th>
                        <th>Роль</th>
                        <th>Телефон</th>
                        <th>Email</th>
                        <th>Зарегистрирован</th>
                        <th class="text-right">Статус</th>
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
                                <td class="w50"><img title="user" src="assets/img/avatars/1.jpg"
                                                     class="img-responsive mw30 ib mr10"></td>
                                <td> <a href="'.ROOT_URL.'users/edit/'.$row['id'].'">'.$row['fio'].'</a></td>
                                <td>'.$row['role_name'].'</td>
                                <td>'.$row['phone'].'</td>
                                <td>'.$row['email'].'</td>
                                <td>'.$row['created'].'</td>
                                <td class="text-right">
                                    <div class="btn-group text-right">
                                        <button type="button" data-toggle="dropdown" aria-expanded="false"
                                                class="btn btn-success br2 btn-xs fs12 dropdown-toggle">Active<span
                                                    class="caret ml5"></span></button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">Edit</a></li>
                                            <li><a href="#">Contact</a></li>
                                            <li class="divider"></li>
                                            <li class="active"><a href="#">Active</a></li>
                                            <li><a href="#">Suspend</a></li>
                                            <li><a href="#">Remove</a></li>
                                        </ul>
                                    </div>
                                </td>
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