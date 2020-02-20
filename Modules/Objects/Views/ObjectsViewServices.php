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


echo '<div class="panel-body pn">';
if (!empty($data['services_tab'])) {
    echo '<div class="table-responsive of-a">';
        if (!empty($data['service'])) {
            echo  '
                <form method="post" class="ajax">
                    <input type="hidden" name="module" value="Objects">
                    <input type="hidden" name="action" value="saveEditService">
                    <input type="hidden" name="ajax" value="true">
                    <input type="hidden" name="id" value="'.$data['service']['id'].'">
                    <div class="section mbn">
                        <div class="col-md-9 pl15">
                            <div class="section row mb15">
                                <h2>'.$data['service']['name'].'</h2>
                            </div>
                            <div class="section row mb15">
                                <div class="col-xs-12 col-md-4">
                                    '.$this->getTextarea('comment', 'text', $data['service']['comment'], 'Комментарий', 'Комментарий','').'
                                </div>
                            </div>
                            <div class="section row mb15">
                                <div class="table-responsive of-a">
                                    <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                                        <thead>
                                        <tr class="bg-light">
                                            <th></th>
                                            <th>Наименование</th>
                                            <th>Отметка</th>
                                        </tr>
                                        </thead>
                                        <tbody>';
            $i=0;
            foreach ($data['service_jobs'] as $job)
            {
                $i++;
                echo '<tr>';
                    echo '<td>'.($i).'</td>';
                    echo '<td>'.$job['name'].'</td>';
                    echo '<td>
                                <label class="switch ib switch-primary pull-left input-align mt10">
                                    <input id="jobs_'.$job['job_id'].'" type="checkbox" name="jobs[]"'.(!empty($job['job_completed'])?' checked':'').' value="'.$job['job_id'].'">
                                    <label for="jobs_'.$job['job_id'].'" data-on="Да" data-off="Нет"></label>
                                </label>
                         </td>';
                echo '</tr>';
            }
            echo '
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="section row mb15">
                                <div class="col-xs-12 col-md-2">
                                    <button class="button btn-system btn-block ph5">Закрыть</button>
                                </div>
                                <div class="col-xs-12 col-md-2">
                                    <button class="button btn-system btn-block ph5">Сохранить</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            ';
        }
    echo '</div>';
        
        return;
}

?>

                
                    <div class="table-responsive of-a">
                        <table class="table admin-form theme-warning tc-checkbox-1 fs13">
                            <thead>
                            <tr class="bg-light">
                                <th></th>
                                <th>Дата</th>
                                <th>Наименование</th>
                                <th>Отвественный</th>
                                <th>Дата проведения</th>
                            </tr>
                            </thead>
                            <tbody>
                    
                                <?php
                                if (!empty($data['services'])) {
                                    foreach ($data['services'] as $service) {
                                        echo '
                                            <tr>
                                                <td></td>
                                                <td>'.date('d.m.Y',$service['date']).'</td>
                                                <td>'.$service['name'].'</td>
                                                <td>'.(!empty($service['user_name'])?$service['user_name']:$data['object']['user_name']).'</td>
                                                <td>'.(!empty($service['date_service'])?date('d.m.Y',$service['date_service']):'Не проводилось').'</td>
                                            </tr>
                                            ';
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>