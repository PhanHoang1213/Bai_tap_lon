<?php
class BaseController
{
    const VIEW_FOLDER_NAME = 'Views';
    const MODEL_FOLDER_NAME = 'Models';
    const MODEL_ADMIN_FOLDER_NAME = 'Models/Admin';
    const VIEW_ADMIN_FOLDER_NAME = 'views/Admin';
    
    protected function loadModel($modelPath)
    {
        require('./App/'. self::MODEL_FOLDER_NAME. '/' .$modelPath . '.php');
    }

    protected function view($viewPath, $data=[])
    {
        foreach($data as $key => $value)
        {
            $$key = $value;
        }
        require ('./App/'.self::VIEW_FOLDER_NAME. '/'. str_replace('.', '/', $viewPath). '.php');
    }

    protected function loadModelAdmin($modelPath)
    {
        require('./App/'. self::MODEL_ADMIN_FOLDER_NAME. '/' .$modelPath . '.php');
    }

    protected function viewAdmin($viewPath, $data=[])
    {
        foreach($data as $key => $value)
        {
            $$key = $value;
        }
        require ('./App/'.self::VIEW_ADMIN_FOLDER_NAME. '/'. str_replace('.', '/', $viewPath). '.php');
    }
    protected function goPage($path, $data=[])
    {
        foreach($data as $key => $value)
        {
            $$key = $value;
        }
        header("location: {$path}");
    }
}