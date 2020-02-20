<?php
/**
 * Шаблон стартовой страницы сайта
 * 
 * @package    DIAFAN.CMS
 * @author     diafan.ru
 * @version    6.0
 * @license    http://www.diafan.ru/license.html
 * @copyright  Copyright (c) 2003-2016 OOO «Диафан» (http://www.diafan.ru/)
 */
 
if(! defined("DIAFAN"))
{

	$path = __FILE__; $i = 0;
	while(! file_exists($path.'/includes/404.php'))
	{
		if($i == 10) exit; $i++;
		$path = dirname($path);
	}
	include $path.'/includes/404.php';
}

?>
<insert name="show_header"> 
	<section class="section-full">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1><insert name="show_h1"></h1>
                    <p></p>
                   <!-- <ol class="breadcrumb">
                        <?php
                        /*echo '<li><a href="'.BASE_PATH.'">Главная</a></li>
                            <li><insert name="show_h1"></li>
                            ';
                        $show = $this->diafan->_site->name;
                        //$show = $this->diafan->_route->show;*/
                        ?>
                    </ol>-->
                </div>
            </div>
        </div>
    </section>
    <section class="section-full">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1><insert name="show_h1"></h1>
                    <p></p>
                   <!-- <ol class="breadcrumb">
                        <?php
                        /*echo '<li><a href="'.BASE_PATH.'">Главная</a></li>
                            <li><insert name="show_h1"></li>
                            ';
                        $show = $this->diafan->_site->name;
                        //$show = $this->diafan->_route->show;*/
                        ?>
                    </ol>-->
                </div>
            </div>
        </div>
    </section>
    <style>
		section.section-full
		{
			background-image: url(/images/cooperation.jpg);
		}
        .row
        {
            margin-top: 20px;
            margin-bottom: 30px;
        }
        .user_page
        {
            display:none;
        }
        section.section-full h1
        {
            display:block;
        }
        .row h1
        {
            display:none;
        }
		
    </style>
    <div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-12" style="padding-left: 30px;padding-bottom: 20px;">
			Здесь что то будет

        </div>
        
    </div></div>
      </main>
      <!-- Page Footer-->
<insert name="show_footer">
