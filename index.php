<?php
require './App/Core/Database.php';
require './App/Models/BaseModel.php';
require './App/Controllers/BaseController.php';
if (isset($_REQUEST['controller'])) {
    $controllerName = ucfirst(($_REQUEST['controller'] == '' ? 'Home' : (strtolower($_REQUEST['controller']))) . 'Controller');
    $actionName = strtolower($_REQUEST['action'] ?? 'index');
    require "./App/Controllers/{$controllerName}.php";
    $controllerObject = new $controllerName;
    $controllerObject->$actionName();
} elseif (isset($_REQUEST['admincontroller'])) {
    $controllerName = ucfirst(($_REQUEST['admincontroller'] == '' ? 'Home' : (strtolower($_REQUEST['admincontroller']))) . 'Controller');
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
