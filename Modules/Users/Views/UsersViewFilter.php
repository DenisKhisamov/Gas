<?php
/**
 * ---THIS-HEAD-INFO---
 */

if (!defined('CORE_INIT')) exit;

/**
 * @var $this \Core\Template
 * @var $data mixed Данные модуля
 */

?>
<aside data-tray-height="match" class="tray tray-right tray290" style="height: 613px;">
    <!-- menu quick links-->
    <div class="admin-form">
        <h4> Find Customer</h4>
        <hr class="short">
        <div class="section mb10">
            <label for="customer-id" class="field prepend-icon">
                <input id="customer-id" type="text" name="customer-id" placeholder="Customer ID #" class="gui-input">
                <label for="customer-id" class="field-icon"><i class="fa fa-user"></i></label>
            </label>
        </div>
        <div class="section mb10">
            <label for="customer-name" class="field prepend-icon">
                <input id="customer-name" type="text" name="customer-name" placeholder="Customer Name" class="gui-input">
                <label for="customer-name" class="field-icon"><i class="fa fa-user"></i></label>
            </label>
        </div>
        <div class="section mb25">
            <label for="customer-email" class="field prepend-icon">
                <input id="customer-email" type="text" name="customer-email" placeholder="Customer Email" class="gui-input">
                <label for="customer-email" class="field-icon"><i class="fa fa-envelope-o"></i></label>
            </label>
        </div>
        <h5><small>Search Country</small></h5>
        <div class="section mb15">
            <label class="field select">
                <select id="customer-location" name="customer-location" class="empty">
                    <option value="0" selected="selected">Filter by Location</option>
                    <option value="1">United States</option>
                    <option value="2">Europe</option>
                    <option value="3">Asia</option>
                    <option value="4">India</option>
                </select><i class="arrow double"></i>
            </label>
        </div>
        <h5><small>Search Company</small></h5>
        <div class="section mb15">
            <label class="field select">
                <select id="customer-company" name="customer-company" class="empty">
                    <option value="0" selected="selected">Filter by Company</option>
                    <option value="1">Apple</option>
                    <option value="2">Sony</option>
                    <option value="3">Envato</option>
                    <option value="4">Microsoft</option>
                    <option value="5">Google</option>
                </select><i class="arrow double"></i>
            </label>
        </div>
        <h5><small>Registration Date</small></h5>
        <div class="section row">
            <div class="col-md-6">
                <label for="date1" class="field prepend-icon">
                    <input id="date1" type="text" name="date1" placeholder="01/01/14" class="gui-input">
                    <label for="date1" class="field-icon"><i class="fa fa-calendar"></i></label>
                </label>
            </div>
            <div class="col-md-6">
                <label for="date2" class="field prepend-icon">
                    <input id="date2" type="text" name="date2" placeholder="06/01/15" class="gui-input">
                    <label for="date2" class="field-icon"><i class="fa fa-calendar"></i></label>
                </label>
            </div>
        </div>
        <hr class="short">
        <div class="section">
            <button type="button" class="btn btn-default btn-sm ph25">Search</button>
            <label class="field option ml15">
                <input type="checkbox" name="info"><span class="checkbox"></span><span class="text-muted">Save Search</span>
            </label>
        </div>
    </div>
</aside>