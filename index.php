<?php
session_start();
require __DIR__ . '/vendor/autoload.php';


ini_set('display_errors',1);
define('ROOT',dirname(__FILE__));
define('FPDF_FONTPATH','/assets/tcpdf/font/');


if(isset($_GET['url'])){
    $url = $_GET['url'];
    $urlSegment = explode('/',$url);
}
#добовляем элементы урла в переменые
if(isset($urlSegment[0])){
    $controllerName = $urlSegment[0];
}
if(isset($urlSegment[1])){
   $actionName = $urlSegment[1];
}

#контроллеры (можно сделать чтоюы бралось из базы)
$mod = ['shop','info','articles','user','obuchenie','teachers','feed','rent','handler','housing'];

#проверяем на наличие контроллера
if(empty($controllerName)){
    $controller = 'MainControllers';
}else if(in_array($controllerName,$mod)){
     $controller = ucfirst($controllerName) . 'Controller';
}else{
    $controller = 'ProfilController';
}

#проверяем на наличии экшина
if(empty($actionName)){
    $action = 'action_index';
}else{
    $action = 'action_'.$actionName;
}

#проверка на наличие файла в тру
try{
    if(!file_exists('core/controllers/' . $controller . '.php')){
        throw new Exception('Not found','404');
    }

    $object = new $controller();

    if(!method_exists($controller,$action)){
       throw new Exception('Not found','404');
    }
    $object->$action();

}catch(Exception $e){
    header("HTTP/1.1 ". $e->getCode()." ".$e->getMessage());
   die('page not found in 5');
}



?>
