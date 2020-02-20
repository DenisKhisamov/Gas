<?php
/**
 * ---THIS-HEAD-INFO---
 */

if (!defined('CORE_INIT')) exit;

/**
 * @var $this \Core\Template
 * @var $data mixed Данные модуля
 */

//echo $this->getBlock('Header');

//echo 'In Templates/Login.php ) ';
//echo ' <br> '.$data;

//echo $this->getBlock('Footer');

?>
<!--
   -----------------------------------------------------------+
   <body> Helper Classes:
   ---------------------------------------------------------------+
   '.sb-l-o' - Sets Left Sidebar to "open"
   '.sb-l-m' - Sets Left Sidebar to "minified"
   '.sb-l-c' - Sets Left Sidebar to "closed"
   '.sb-r-o' - Sets Right Sidebar to "open"
   '.sb-r-c' - Sets Right Sidebar to "closed"
   ---------------------------------------------------------------+
   Example: <body class="example-page sb-l-o sb-r-c">
   Results: Sidebar left Open, Sidebar right Closed
   -------------------------------------------------------------
   -->
<!-- Start: Theme Preview Pane-->
<div id="skin-toolbox" class="bg-white">
    <div class="panel">
        <div class="panel-heading"><span class="panel-icon"><i class="fa fa-gear text-primary"></i></span><span class="panel-title"> Theme Options</span></div>
        <div class="panel-body pn">
            <ul role="tablist" class="nav nav-list nav-list-sm pl15 pt10">
                <li class="active"><a href="#toolbox-header" role="tab" data-toggle="tab">Navbar</a></li>
                <li><a href="#toolbox-sidebar" role="tab" data-toggle="tab">Sidebar</a></li>
                <li><a href="#toolbox-settings" role="tab" data-toggle="tab">Misc</a></li>
            </ul>
            <div class="tab-content p20 ptn pb15">
                <div id="toolbox-header" role="tabpanel" class="tab-pane active">
                    <form id="toolbox-header-skin">
                        <h4 class="mv20">Header Skins</h4>
                        <div class="skin-toolbox-swatches">
                            <div class="checkbox-custom checkbox-disabled fill mb5">
                                <input id="headerSkin8" type="radio" name="headerSkin" checked="" value="">
                                <label for="headerSkin8">Light</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-primary mb5">
                                <input id="headerSkin1" type="radio" name="headerSkin" value="bg-primary">
                                <label for="headerSkin1">Primary</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-info mb5">
                                <input id="headerSkin3" type="radio" name="headerSkin" value="bg-info">
                                <label for="headerSkin3">Info</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-warning mb5">
                                <input id="headerSkin4" type="radio" name="headerSkin" value="bg-warning">
                                <label for="headerSkin4">Warning</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-danger mb5">
                                <input id="headerSkin5" type="radio" name="headerSkin" value="bg-danger">
                                <label for="headerSkin5">Danger</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-alert mb5">
                                <input id="headerSkin6" type="radio" name="headerSkin" value="bg-alert">
                                <label for="headerSkin6">Alert</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-system mb5">
                                <input id="headerSkin7" type="radio" name="headerSkin" value="bg-system">
                                <label for="headerSkin7">System</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-success mb5">
                                <input id="headerSkin2" type="radio" name="headerSkin" value="bg-success">
                                <label for="headerSkin2">Success</label>
                            </div>
                            <div class="checkbox-custom fill mb5">
                                <input id="headerSkin9" type="radio" name="headerSkin" value="bg-dark">
                                <label for="headerSkin9">Dark</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="toolbox-sidebar" role="tabpanel" class="tab-pane">
                    <form id="toolbox-sidebar-skin">
                        <h4 class="mv20">Sidebar Skins</h4>
                        <div class="skin-toolbox-swatches">
                            <div class="checkbox-custom fill mb5">
                                <input id="sidebarSkin3" type="radio" name="sidebarSkin" checked="" value="">
                                <label for="sidebarSkin3">Dark</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-disabled mb5">
                                <input id="sidebarSkin1" type="radio" name="sidebarSkin" value="sidebar-light">
                                <label for="sidebarSkin1">Light</label>
                            </div>
                            <div class="checkbox-custom fill checkbox-light mb5">
                                <input id="sidebarSkin2" type="radio" name="sidebarSkin" value="sidebar-light light">
                                <label for="sidebarSkin2">Lighter</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="toolbox-settings" role="tabpanel" class="tab-pane">
                    <form id="toolbox-settings-misc">
                        <h4 class="mv20 mtn">Layout Options</h4>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb5">
                                <input id="header-option" type="checkbox" checked="">
                                <label for="header-option">Fixed Header</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb5">
                                <input id="sidebar-option" type="checkbox" checked="">
                                <label for="sidebar-option">Fixed Sidebar</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb5">
                                <input id="breadcrumb-option" type="checkbox">
                                <label for="breadcrumb-option">Fixed Breadcrumbs</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox-custom fill mb5">
                                <input id="breadcrumb-hidden" type="checkbox">
                                <label for="breadcrumb-hidden">Hide Breadcrumbs</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="form-group mn br-t p15"><a id="clearLocalStorage" href="#" class="btn btn-primary btn-block pb10 pt10">Clear LocalStorage</a></div>
        </div>
    </div>
</div>
<!-- Start: Main-->
<div id="main" style="font-family: sans-serif;">
    <!-- Page Header-->
    <!--
    ---------------------------------------------------------------+
    ".navbar" Helper Classes:
    -------------------------------------------------------------------+
    * Positioning Classes:
    '.navbar-static-top' - Static top positioned navbar
    '.navbar-static-top' - Fixed top positioned navbar
    * Available Skin Classes:
    .bg-dark    .bg-primary   .bg-success
    .bg-info    .bg-warning   .bg-danger
    .bg-alert   .bg-system
    -------------------------------------------------------------------+
    Example: <header class="navbar navbar-fixed-top bg-primary">
    Results: Fixed top navbar with primary background
    -----------------------------------------------------------------
    -->
    <!-- Start: Header-->
<!--
-----------------------------------------------------------+
<body> Helper Classes:
---------------------------------------------------------------+
'.sb-l-o' - Sets Left Sidebar to "open"
'.sb-l-m' - Sets Left Sidebar to "minified"
'.sb-l-c' - Sets Left Sidebar to "closed"
'.sb-r-o' - Sets Right Sidebar to "open"
'.sb-r-c' - Sets Right Sidebar to "closed"
---------------------------------------------------------------+
Example: <body class="example-page sb-l-o sb-r-c">
Results: Sidebar left Open, Sidebar right Closed
-------------------------------------------------------------
-->
    <header class="navbar undefined">
        <div class="navbar-branding"><a href="<?php echo ROOT_URL; ?>" class="navbar-brand text-uppercase">BluefireAdmin</a><span id="toggle_sidemenu_l" class="fa fa-bars"></span></div>
        <ul class="nav navbar-nav navbar-left"></ul>
        <!--<form role="search" class="navbar-form navbar-left navbar-search alt"><span class="hide visible-md-inline-block visible-lg-inline-block fa fa-search fs18"></span>
            <div class="form-group">
                <input type="text" placeholder="Search..." class="form-control">
            </div>
        </form>-->
        <ul class="nav navbar-nav navbar-right">
            <li><img src="<?php echo ROOT_URL; ?>assets/img/avatars/1.jpg" alt="avatar"></li>
            <li class="dropdown menu-merge"><a href="#" data-toggle="dropdown" class="dropdown-toggle fw600 p15"><span class="fa fa-angle-down"></span> </a>
                <ul role="menu" class="dropdown-menu list-group dropdown-persist w250">
                    <li class="dropdown-footer"><a href="<?php echo ROOT_URL; ?>login/logout"><span class="fa fa-power-off pr5"></span> Logout</a></li>
                </ul>
            </li>
        </ul>
    </header>