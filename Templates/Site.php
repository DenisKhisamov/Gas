<?php
/**
 * ---THIS-HEAD-INFO---
 */

if (!defined('CORE_INIT')) exit;

/**
 * @var $this \Core\Template
 * @var $data mixed Данные модуля
 * @var $modelResult ModelResult Данные модуля
 */

//echo $this->getBlock('Header');

//echo 'In Templates/Login.php ) ';
//echo ' <br> '.$data;

//echo $this->getBlock('Footer');

echo $this->getBlock('Head');
echo $this->getBlock('Header');
echo $this->getBlock('SidebarLeft');
?>

    <!-- Start: Content-Wrapper-->
    <section id="content_wrapper">
        <!-- Start: Topbar-->
        <header id="topbar" class="alt">
            <div class="topbar-left pull-left">
                <h1 class="mn"><?php echo $modelResult->getH1(); ?></h1><span class="text-shady-lady fs15"><?php echo $this->getBlock('Breadcrumb',$modelResult->getBreadcrumb()); ?></span>
            </div>
            <div class="topbar-right">
            
            </div>
        </header>
        <!-- Begin: Content-->
        <section id="content" class="table-layout">
            <?php echo $data; ?>
        </section>

<?php
echo $this->getBlock('Footer');