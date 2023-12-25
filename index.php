<?php
require './App/Core/Database.php';
require './App/Models/BaseModel.php';
require './App/Controllers/BaseController.php';
if (isset($_REQUEST['controller'])) {
    $controllerName = ucfirst((strtolower($_REQUEST['controller']) ?? 'Home') . 'Controller');
    $actionName = strtolower($_REQUEST['action'] ?? 'index');
    require "./App/Controllers/{$controllerName}.php";
    $controllerObject = new $controllerName;
    $controllerObject->$actionName();
} elseif (isset($_REQUEST['admincontroller'])) {
    $controllerName = ucfirst((strtolower($_REQUEST['admincontroller']) ?? 'Home') . 'Controller');
    $actionName = strtolower($_REQUEST['action'] ?? 'index');
    require "./App/Controllers/Admin/{$controllerName}.php";
    $controllerObject = new $controllerName;
    $controllerObject->$actionName();
} else {
    $controllerName = 'HomeController';
    $actionName = strtolower($_REQUEST['action'] ?? 'index');
    require "./App/Controllers/{$controllerName}.php";
    $controllerObject = new $controllerName;
    $controllerObject->$actionName();
}
