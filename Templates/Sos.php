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

?>

<html>
    <head>
        <title>SOS system</title>
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <style>
            html, bidy {
                width: 100%;
                height: 100%;
                padding: 0;
                margin: 0;
                position: absolute;
                top: 0;
                left: 0;
            }

            .big_red_button {
                width: 100%;
                height: 100%;
                background: red;
                color: white;
                border-radius: 50%;
                text-align: center;
                /* padding-top: 25%; */
                /* max-width: 300px; */
                /* max-height: 300px; */
                font-size: 530%;
                background: url(/img/sos_button.png);
                position: absolute;
                /* left: 25%; */
                /* top: 25%; */
                background-repeat: no-repeat;
                background-size: contain;
                background-position: center;
            }

            .big_red_button>span {
                display: inline-block;
                margin-top: calc(50% - 50px);
            }
        </style>
    </head>
    <body>
        <div class="big_red_button" onclick="send_sos_message();"></div>
    

<?php

echo $this->getBlock('ShowJS');

?>

<script>
    function send_sos_message() {
        $.ajax({
            url:'',
            method: 'post',
            data: {
            	module: 'Sos',
                action: 'sos',
                ajax: 'true'
            },
            success: function (r) {
            
			}
        });
	}
</script>
    </body>
</html>