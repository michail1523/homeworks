<?php
//разделитель и корневая дирректория
define('DS',DIRECTORY_SEPARATOR);
define('ROOT',dirname(dirname(__FILE__)));
define('VIEW_PATH',ROOT.DS.'views');

require_once (ROOT.DS.'lib'.DS.'init.php');

//$router = new Router($_SERVER['REQUEST_URI']);
 //данные из адрессной строки
//$url = $_SERVER['REQUEST_URI'];

//echo $url;
//echo '<pre>';
//print_r('route: '.$router->getRoute().PHP_EOL);
//print_r('lamguage: '.$router->getLanguage().PHP_EOL);
//print_r('Controller '.$router->getController().PHP_EOL);
//print_r('Action to be called '.$router->getMethodPrefix().$router->getAction().PHP_EOL);
//echo 'Params: ';
//print_r($router->getParams());

App::run($_SERVER['REQUEST_URI']);