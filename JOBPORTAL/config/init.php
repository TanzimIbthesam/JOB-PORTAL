<?php 
require_once 'config.php';
spl_autoload_register(function ($class){
    include 'lib/' . $class . '.php';
});


echo "Hello world";
?>