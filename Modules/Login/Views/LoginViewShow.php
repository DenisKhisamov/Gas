<?php
/**
 * ---THIS-HEAD-INFO---
 */

if (!defined('CORE_INIT')) exit;


?>
                <div class="panel panel-info mt10 br-n">
                    <form id="contact" class="ajax" method="post" action="">
                        <input type="hidden" name="module" value="Login">
                        <input type="hidden" name="action" value="autorization">
                        <input type="hidden" name="ajax" value="true">
                        <div class="panel-body bg-light p30">
                            <div class="row">
                                <div class="col-sm-7 pr30">
                                    <div class="section">
                                    <?php
                                    echo $this->getTextInput('username', 'text', '', 'Пользователь', 'Введите логин', 'user');
                                    ?>
                                    </div>
                                    <div class="section">
                                    <?php
                                    echo $this->getTextInput('password', 'password', '', 'Пароль', 'Введите пароль', 'lock');
                                    ?>
                                    </div>
                                    <div class="errors error"></div>
                                </div>
                                <div class="col-sm-5 br-l br-grey pl30">
                                    <h3 class="mb25"> You'll Have Access To Your:</h3>
                                    <p class="mb15"><span class="fa fa-check text-success pr5"></span> Unlimited Email Storage</p>
                                    <p class="mb15"><span class="fa fa-check text-success pr5"></span> Unlimited Photo Sharing/Storage</p>
                                    <p class="mb15"><span class="fa fa-check text-success pr5"></span> Unlimited Downloads</p>
                                    <p class="mb15"><span class="fa fa-check text-success pr5"></span> Unlimited Service Tickets</p>
                                </div>
                            </div>
                            <div class="panel-footer clearfix p10 ph15">
                                <button type="submit" class="button btn-primary mr10 pull-right">Вход</button>
                                <label class="switch ib switch-primary pull-left input-align mt10">
                                    <input id="remember" type="checkbox" name="remember" checked="">
                                    <label for="remember" data-on="Да" data-off="Нет"></label> <span>Запомнить меня</span>
                                </label>
                            </div>
                    </form>
                </div>


