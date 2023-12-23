<?php

require './App/Core/Database.php';
require './App/Models/BaseModel.php';
require './App/Controllers/BaseController.php';
if(isset($_REQUEST['controller'])){
    $controllerName = ucfirst((strtolower($_REQUEST['controller']) ?? 'Home') . 'Controller');

}
else{
    $controllerName = 'HomeController';
}

$actionName = strtolower($_REQUEST['action'] ?? 'index');
require "./App/Controllers/{$controllerName}.php";


$controllerObject = new $controllerName;
$controllerObject->$actionName();
