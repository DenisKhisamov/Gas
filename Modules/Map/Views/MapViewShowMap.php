<?php
/**
 * ---THIS-HEAD-INFO---
 */

if (!defined('CORE_INIT')) exit;
//$role = 0;
//$menu = \DB::queryFetchValue() ("call menu_select(%d);", array($role));

echo '<div id="map" style="width: 100%;height: 700px;"></div>';
echo '
<style>
body, html {
            padding: 0;
            margin: 0;
            width: 100%;
            height: 100%;
        }
        #map {
            width: 100%;
            height: 90%;
        }
        .glyphicon-warning-sign
        {
            margin-left: 1px;
        }
        .glyphicon-plus-sign
        {
            margin-left: 1px;
            font-size: 15px !important;
        }
        .glyphicon-exclamation-sign
        {
             margin-left: 1px;
        }
        
        .arrow-icon {
            position: absolute;
            left: -24px;
            top: -24px;
            width: 60px;
            height: 60px;
            opacity: 1;
            background-image: url("/img/red.png");
            background-position: 0px 0px;
            background-size: 60px 60px; 
            transform-origin: 0% 100%;
        }
        
</style>
';



