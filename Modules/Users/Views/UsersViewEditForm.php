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

?>
<div class="panel mb25 mt5">
    <div class="panel-heading br-b-ddd"><span class="panel-title hidden-xs"> Редактирование объекта</span>
    </div>
    <div class="panel-body p20 pb10">
        <div class="tab-content pn br-n admin-form">
            <div id="tab1_1" class="tab-pane active">
                <form method="post" class="ajax">
                    <input type="hidden" name="module" value="Users">
                    <input type="hidden" name="action" value="editUsers">
                    <input type="hidden" name="ajax" value="true">
                    <input type="hidden" name="id" value="<?php echo $data['object']['id'];?>">
                    <div class="section row mbn">
                        <div class="col-md-9 pl15">
                            <div class="section row mb15">
                                <div class="col-xs-6">
                                    <?php echo $this->getTextInput('fio', 'text', $data['users_data']['fio'], 'ФИО', 'Введите ФИО', 'user-plus'); ?>
                                </div>
                                <div class="col-xs-6">
                                    <?php echo $this->getTextInput('phone', 'text',  $data['users_data']['phone'], 'Телефон', 'Введите телефон', 'phone'); ?>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <?php echo $this->getTextInput('login', 'text', $data['users_data']['login'], 'Логин', 'Введите логин', 'user'); ?>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <?php echo $this->getTextInput('email', 'text',  $data['users_data']['email'], 'Email', 'Введите Email', 'envelope-o'); ?>
                                </div>
                            </div>
                            <div class="section row mb15">
                                <div class="col-xs-12 col-md-6">
                                    <?php echo $this->getTextInput('password1', 'text', '', 'Пароль', 'Введите новый пароль', 'cog'); ?>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <?php echo $this->getSelect('role_id', $data['users_data']['role_id'], $data['users'], 'Роль');?>

                                </div>
                                <?php
                                echo '<input type="hidden" value="'.$data['users_data']['id'].'" name="id">';
                                echo '<input type="hidden" value="'.$data['users_data']['password'].'" name="password">';
                                ?>

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div data-provides="fileupload" class="fileupload fileupload-new admin-form">
                                <div class="fileupload-preview thumbnail mb15"><img data-src="holder.js/100%x147" alt="100%x147" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTk5IiBoZWlnaHQ9IjE0NyIgdmlld0JveD0iMCAwIDE5OSAxNDciIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTk5IiBoZWlnaHQ9IjE0NyIgZmlsbD0iIzMwYjVlMSIvPjxnPjx0ZXh0IHg9IjczLjU2MjUiIHk9IjczLjUiIHN0eWxlPSJmaWxsOiM4NGNkZWE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTBwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4xOTl4MTQ3PC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true" style="height: 147px; width: 100%; display: block;"></div><span class="button btn-system btn-file btn-block ph5"><span class="fileupload-new">Загрузить</span><span class="fileupload-exists">Загрузить</span>
                                <input type="file"></span>
                            </div>
                        </div>
                    </div>
                    <div class="section row mbn">
                        <div class="section col-md-3">
                            <br>
                            <button class="button btn-system btn-block ph5" return="false">Сохранить</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>