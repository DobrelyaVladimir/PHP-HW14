<?php

include_once "../core/function.php";
// $class = core\Application
spl_autoload_register(function ($class){
   $fileName = "..\\" . $class . ".php";
   if(file_exists($fileName)){
       include_once $fileName;
   }
});

$app = new \core\Application();
$app->run();