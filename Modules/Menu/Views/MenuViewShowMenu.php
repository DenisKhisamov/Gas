<?php
/**
 * ---THIS-HEAD-INFO---
 */

if (!defined('CORE_INIT')) exit;
//$role = 0;
//$menu = \DB::queryFetchValue() ("call menu_select(%d);", array($role));
?>

<!--
---------------------------------------------------------------+
"#sidebar_left" Helper Classes:
-------------------------------------------------------------------+
* Positioning Classes:
'.affix' - Sets Sidebar Left to the fixed position
* Available Skin Classes:
.sidebar-dark (default no class needed)
.sidebar-light
.sidebar-light.light
-------------------------------------------------------------------+
Example: <aside id="sidebar_left" class="affix sidebar-light">
Results: Fixed Left Sidebar with light/white background
-----------------------------------------------------------------
-->
<!-- Start: Sidebar-->
<aside id="sidebar_left" class="nano nano-light affix">
    <!-- Start: Sidebar Left Content-->
    <div class="sidebar-left-content nano-content">
        <!-- Start: Sidebar Header-->
        <header class="sidebar-header">
            <!-- Sidebar Widget - Search (hidden)-->
            <div class="sidebar-widget search-widget hidden">
                <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input id="sidebar-search" type="text" placeholder="Search..." class="form-control"/>
                </div>
            </div>
        </header>
        <ul class="nav sidebar-menu">
            <li class="sidebar-label pt35"></li>
            <?php
                foreach ($data as $result)
                {
                   echo '<li>
                            <a href="'.ROOT_URL.''.$result['url'].'">
                                <span class="fa '.$result['icons'].'"></span>
                                <span class="sidebar-title">'.$result['name'].'</span></a>
                        </li>';
                }
            ?>
        </ul>
        <!-- Start: Sidebar Collapse Button-->
        <div class="sidebar-toggle-mini"><a href="#"><span class="fa fa-sign-out"></span></a></div>
    </div>
</aside>

