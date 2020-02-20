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

echo $this->getBlock('Head');
?>
<body class="external-page sb-l-c sb-r-c">
<!-- Start: Main-->
<div id="main" class="animated fadeIn">
    <!-- Start: Content-Wrapper-->
    <section id="content_wrapper">
        <!-- begin canvas animation bg-->
        <div id="canvas-wrapper">
            <canvas id="demo-canvas"></canvas>
        </div>
        <!-- Begin: Content-->
        <section id="content">
            <div id="login1" class="admin-form theme-info">
                <div class="row mb15 table-layout">
                    <div class="col-xs-6 va-m pln"><a href="<?php echo ROOT_URL; ?>" title="Return to Dashboard"><img src="<?php echo ROOT_URL; ?>assets/img/logos/logo_white.png" title="TemplateMonster Logo" class="img-responsive w250"></a></div>
                    <div class="col-xs-6 text-right va-b pr5">
                    </div>
                </div>
<?php
echo $data;
?>
            </div>
        </section>
    </section>
</div>
<!-- core scripts-->
<script src="<?php echo ROOT_URL; ?>plugins/core.min.js"></script>
<!-- Theme Javascript-->
<script src="<?php echo ROOT_URL; ?>assets/js/utility/utility.js"></script>
<script src="<?php echo ROOT_URL; ?>assets/js/demo/demo.js"></script>
<script src="<?php echo ROOT_URL; ?>assets/js/main.js"></script>
<!-- Page Javascript-->
<script type="text/javascript">
    jQuery(document).ready(function () {
        "use strict";
        // Init Theme Core
        Core.init();
        // Init Demo JS
        Demo.init();
        // Init CanvasBG and pass target starting location
        CanvasBG.init({
            Loc: {
                x: window.innerWidth / 2,
                y: window.innerHeight / 3.3
            },
        });
    });
</script>
<?php echo $this->getBlock('ShowJS'); ?>
</body>
</html>

