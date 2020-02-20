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
    <div class="panel-heading br-b-ddd"><span class="panel-title hidden-xs"> Добавление объекта</span>
        <ul class="nav panel-tabs-border panel-tabs">
            <li class="active"><a href="#tab1_1" data-toggle="tab" aria-expanded="true">Основные</a></li>
            <li class=""><a href="#tab1_2" data-toggle="tab" aria-expanded="false">Дополнительно</a></li>
            <li class=""><a href="#tab1_4" data-toggle="tab" aria-expanded="false">События</a></li>
        </ul>
    </div>
    <div class="panel-body p20 pb10">
        <div class="tab-content pn br-n admin-form">
            <div id="tab1_1" class="tab-pane active">
                <form method="post" class="ajax">
                    <input type="hidden" name="module" value="Objects">
                    <input type="hidden" name="action" value="saveAdd">
                    <input type="hidden" name="ajax" value="true">
                    <input type="hidden" name="type_id" value="<?php echo $data['type_id'];?>">
                    <div class="section row mbn">
                        <div class="col-md-9 pl15">
                            <div class="section row mb15">
                                <div class="col-xs-6">
                                    <?php echo $this->getTextInput('name', 'text', '', '', 'Введите ФИО', 'building-o'); ?>
                                </div>
                                <div class="col-xs-6">
                                    <?php echo $this->getTextInput('bithday', 'date', '', '', 'Введите дату рождения', 'map-marker1'); ?>
                                </div>
                            </div>
                            <div class="section row mb15">
                                <div class="col-xs-6">
                                    <?php echo $this->getTextInput('address', 'text', '', '', 'Введите домашний адрес', 'map-marker'); ?>
                                </div>
                                <div class="col-xs-6">
                                    <?php echo $this->getTextInput('address2', 'text', '', '', 'Введите рабочий адрес', 'map-marker'); ?>
                                </div>
                            </div>
                            <div class="section row mb15">
                                <div class="col-xs-12">
                                    <?php echo $this->getTextInput('address2', 'text', '', '', 'Введите дополнительный адрес', 'map-marker'); ?>
                                </div>
                            </div>
                            <div class="section row mb15">
                                <div class="col-xs-6">
                                    <?php echo $this->getTextInput('lat', 'text', '', '', 'Введите latitude', 'map-marker'); ?>
                                </div>
                                <div class="col-xs-6">
                                    <?php echo $this->getTextInput('lon', 'text', '', '', 'Введите longitude', 'map-marker'); ?>
                                </div>
                            </div>
                            <div class="section row mb15">
                                <div class="col-xs-6">
                                    <?php echo $this->getSelect('type1_id', 0,array('Вид прибора мониторинга...','Браслет М214','Телефон'));?>
                                </div>
                                <div class="col-xs-6">
                                    <?php echo $this->getTextInput('aaa11', 'text', '', '', 'Введите Телефон мобильный', 'phone'); ?>
                                </div>
                            </div>
                            <div class="section row mb15">
                                <div class="col-xs-4">
                                    <?php echo $this->getTextInput('aaa11', 'text', '', '', 'Введите Телефон домашний', 'phone'); ?>
                                </div>
                                <div class="col-xs-4">
                                    <?php echo $this->getTextInput('aaa11', 'text', '', '', 'Введите Телефон родственника 1', 'phone'); ?>
                                </div>
                                <div class="col-xs-4">
                                    <?php echo $this->getTextInput('aaa11', 'text', '', '', 'Введите Телефон родственника 2', 'phone'); ?>
                                </div>
                            </div>
                            <div class="section row mb15">
                                <div class="col-xs-12">
                                    <?php echo $this->getTextInput('aaa11', 'text', '', '', 'Введите Обслуживающая организация', 'map-marker'); ?>
                                </div>
                            </div>
                            <div class="section row mb15">
                                <div class="col-xs-3">
                                    <?php echo $this->getTextInput('aaa11', 'text', '', '', 'Введите № договора', 'map-marker1'); ?>
                                </div>
                                <div class="col-xs-3">
                                    <?php echo $this->getTextInput('aaa11', 'text', '', '', 'Введите Даты договора', 'map-marker1'); ?>
                                </div>
                                <div class="col-xs-3">
                                    <?php echo $this->getTextInput('aaa11', 'text', '', '', 'Введите Дата начала', 'map-marker1'); ?>
                                </div>
                                <div class="col-xs-3">
                                    <?php echo $this->getTextInput('aaa11', 'text', '', '', 'Введите Дата окончания', 'map-marker1'); ?>
                                </div>
                            </div>
                            <div class="section row mb15">
                                <div class="col-xs-6">
                                    <?php echo $this->getSelect('user_id', 0,$data['users']);?>
                                </div>
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
                            <button class="button btn-system btn-block ph5">Сохранить</button>
                        </div>
                    </div>
                </form>
            </div>
            <div id="tab1_2" class="tab-pane">
                <div class="section row mbn">
                    <div class="col-xs-6 pr15">
                        <div class="section row mb15">
                            <div class="col-xs-12">
                                <textarea id="textArea2" rows="3" class="form-control" placeholder="Введите диагноз"></textarea>
                            </div>
                        </div>
                        <div class="section row mb15">
                            <label class="col-md-2 text-right">Нормальные показатели</label>
                            <div class="col-xs-2">
                                <?php echo $this->getTextInput('address1', 'text', '', '', 'Пульс', 'map-marker'); ?>
                            </div>
                            <div class="col-xs-3">
                                <?php echo $this->getTextInput('address2', 'text', '', '', 'Давление', 'map-marker'); ?>
                            </div>
                            <div class="col-xs-3">
                                <?php echo $this->getTextInput('address2', 'text', '', '', 'Температура', 'map-marker'); ?>
                            </div>
                            <div class="col-xs-2">
                                <?php echo $this->getTextInput('address2', 'text', '', '', 'Сахар', 'map-marker'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                    
                    </div>
                </div>
                <hr class="short alt mtn">
                <div class="section mb15">
                    <div class="col-xs-6 pr15">
                        <label class="field prepend-icon">
                            <textarea id="cust-note" name="cust-note" placeholder="История измерений" class="gui-textarea br-light bg-light"></textarea>
                            <label for="cust-note" class="field-icon"><i class="fa fa-edit"></i></label>
                        </label>
                    </div>
                </div>
            </div>
            <div id="tab1_4" class="tab-pane">
                <div class="section">
                    <?php ?>
                </div>
            </div>
        </div>
    </div>
</div>