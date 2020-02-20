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



if (!empty($data['events_tab'])) {
    ?>
        <div class="tab-content pn br-n admin-form">
            <div id="tab1_1" class="tab-pane active">
                <form method="post" class="ajax">
                    <input type="hidden" name="module" value="Objects">
                    <input type="hidden" name="action" value="saveEditEvent">
                    <input type="hidden" name="ajax" value="true">
                    <input type="hidden" name="id" value="<?php echo $data['event']['id'];?>">
                    <div class="section row mbn">
                        <div class="col-md-9 pl15">
                            <div class="section row mb15">
                                <h2 style="color:red;">Событие <?php echo $data['event']['id'];?>, тип <?php echo $data['event']['type_name'];?></h2>
                            </div>
                            <div class="section row mb15">
                                <div class="col-xs-4">
                                    <?php echo $this->getTextInput('dispatcher_comment', 'text', '', '', 'Комментарий диспетчера',''); ?>
                                </div>
                                <div class="col-xs-2">
                                    <button class="button btn-system btn-block ph5">Закрыть</button>
                                </div>
                                <div class="col-xs-2">
                                    <button class="button btn-system btn-block ph5">Передать в ОС</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php
}

?>

                <div class="panel-body pn">
                    <div class="table-responsive of-a">
                        <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                            <thead>
                            <tr class="bg-light">
                                <th>Дата</th>
                                <th>Тип</th>
                                <th>Статус</th>
                                <th>Комментарий диспетчера</th>
                                <th>Комментарий обслуживающей компании</th>
                            </tr>
                            </thead>
                            <tbody>
                    
                                <?php
                                if (!empty($data['events'])) {
                                    foreach ($data['events'] as $event) {
                                        echo '
                                            <tr>
                                                <td>'.$event['time'].'</td>
                                                <td>'.$event['type_name'].'</td>
                                                <td>'.$event['status_name'].'</td>
                                                <td>'.$event['dispatcher_comment'].'</td>
                                                <td>'.$event['comment'].'</td>
                                            </tr>
                                            ';
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>