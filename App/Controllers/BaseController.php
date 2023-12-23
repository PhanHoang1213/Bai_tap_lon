<?php
class BaseControlller
{
    const VIEW_FOLDER_NAME = 'Views';
    const MODEL_FOLDER_NAME = 'Models';
    
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
    protected function goPage($path, $data=[])
    {
        foreach($data as $key => $value)
        {
            $$key = $value;
        }
        header("location: {$path}");
    }
}