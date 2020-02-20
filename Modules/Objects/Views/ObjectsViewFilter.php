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

<aside data-tray-height="match" class="tray tray-right tray290" style="height: 325px;">
    <!-- menu quick links-->
    <div class="admin-form">
        <h4> Filter Products</h4>
        <hr class="short">
        <div class="section mb15">
            <label for="order-id" class="field prepend-icon">
                <input id="order-id" type="text" name="order-id" placeholder="Product SKU #" class="gui-input">
                <label for="order-id" class="field-icon"><i class="fa fa-tag"></i></label>
            </label>
        </div>
        <h5><small>Price Range($)</small></h5>
        <div class="section row mb15">
            <div class="col-md-6">
                <label for="price1" class="field prepend-icon">
                    <input id="price1" type="text" name="price1" placeholder="0" class="gui-input">
                    <label for="price1" class="field-icon"><i class="fa fa-usd"></i></label>
                </label>
            </div>
            <div class="col-md-6">
                <label for="price2" class="field prepend-icon">
                    <input id="price2" type="text" name="price2" placeholder="1000" class="gui-input">
                    <label for="price2" class="field-icon"><i class="fa fa-usd"></i></label>
                </label>
            </div>
        </div>
        <h5><small>Sales Date</small></h5>
        <div class="section row">
            <div class="col-md-6">
                <label for="date1" class="field prepend-icon">
                    <input id="date1" type="text" name="date1" placeholder="01/01/15" class="gui-input">
                    <label for="date1" class="field-icon"><i class="fa fa-calendar"></i></label>
                </label>
            </div>
            <div class="col-md-6">
                <label for="date2" class="field prepend-icon">
                    <input id="date2" type="text" name="date2" placeholder="01/31/15" class="gui-input">
                    <label for="date2" class="field-icon"><i class="fa fa-calendar"></i></label>
                </label>
            </div>
        </div>
        <h5><small>Search Categories</small></h5>
        <div class="section mb15">
            <label class="field select">
                <select id="filter-categories" name="filter-categories" class="empty">
                    <option value="0" selected="selected">Filter by Categories</option>
                    <option value="1">Electronics</option>
                    <option value="2">Software</option>
                </select><i class="arrow double"></i>
            </label>
        </div>
        <h5><small>Search Customers</small></h5>
        <div class="section">
            <label class="field select">
                <select id="filter-customers" name="filter-customers" class="empty">
                    <option value="0" selected="selected">Filter by Vendor</option>
                    <option value="1">Michael</option>
                    <option value="2">David</option>
                    <option value="3">Sara</option>
                    <option value="4">Tasha</option>
                </select><i class="arrow double"></i>
            </label>
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