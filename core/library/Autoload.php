<?php


    function __autoload($class_name){
//spl_autoload_register(function($className) {

    $array_paths = array(
       '/controllers/',
        '/library/',
        '/moduls/'
    );

    foreach ($array_paths as $path){
        $path = 'core' . $path . $class_name . '.php';
        if (is_file($path)){
            include_once $path;
        }
    }

}
