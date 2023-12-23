<?php

class BaseModel extends Database
{
    protected $connect;

    public function __construct()
    {
        $this->connect = $this->connect();
    }


    public function _query($sql)
    {
        return mysqli_query($this->connect, $sql);
    }

    public function select($table, $select=['*'])
    {
        $columns = implode(',', $select);
        $sql = "SELECT {$columns} FROM {$table}";
        $query = $this->_query($sql);
        $data = [];
        while($row = mysqli_fetch_assoc($query)){
            array_push($data, $row);
        }
        return $data;
    }

    public function find($table,$userName,$select=['*'])
    {
        $columns = implode(',', $select);
        $sql = "SELECT {$columns} FROM {$table} WHERE userName = '{$userName}' LIMIT 1";
        $query = $this->_query($sql);
        return mysqli_fetch_assoc($query);
    }
    
}