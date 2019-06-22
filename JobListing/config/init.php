<?php 
require_once 'config.php';
// require_once('lib/Template.php');
spl_autoload_register(function ($class){
    include 'lib/' . $class . '.php';
});

echo "test";
?>