<?php
/*------------------------------------------------------------------------------
../noyau/constantes.php
-----------------------------------------------------------------------------------*/

// base url
$url = explode('index.php', $_SERVER['SCRIPT_NAME']);
define ('ROOT', 'http://' . $_SERVER['HTTP_HOST'].$url[0]);
define ('ROOT_ADMIN', 'http://' . $_SERVER['HTTP_HOST'].$url[0]);
