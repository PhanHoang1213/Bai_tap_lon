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

    public function select($table, $select = ['*'])
    {
        $columns = implode(',', $select);
        $sql = "SELECT {$columns} FROM {$table}";
        $query = $this->_query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }
        return $data;
    }

    public function selectOrder($table, $select = ['*'], $orderBy = ['id', 'ASC'])
    {
        $columns = implode(',', $select);
        $order = implode(' ', $orderBy);
        $sql = "SELECT {$columns} FROM {$table} ORDER BY {$order}";
        $query = $this->_query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }
        return $data;
    }

    public function selectWhere($table, $select=['*'], $where=['TRUE'], $orderBy = ['id', 'ASC'])
    {
        $columns = implode(',', $select);
        $order = implode(' ', $orderBy);
        $condition = implode('=',$where);
        $sql = "SELECT {$columns} FROM {$table} WHERE {$condition} ORDER BY {$order}";
        $query = $this->_query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }
        return $data;
    }

    public function selectByValue($table, $column,$value, $select=['*'])
    {
        $columns = implode(',', $select);
        $sql = "SELECT {$columns} FROM {$table} WHERE {$column} = '{$value}'";
        $query = $this->_query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }
        return $data;
    }

    public function findByUsername($table, $userName, $select = ['*'])
    {
        $columns = implode(',', $select);
        $sql = "SELECT {$columns} FROM {$table} WHERE userName = '{$userName}' LIMIT 1";
        $query = $this->_query($sql);
        return mysqli_fetch_assoc($query);
    }

    public function findByAdminname($table, $adminName, $select = ['*'])
    {
        $columns = implode(',', $select);
        $sql = "SELECT {$columns} FROM {$table} WHERE adminName = '{$adminName}' LIMIT 1";
        $query = $this->_query($sql);
        return mysqli_fetch_assoc($query);
    }

    public function findById($table, $id, $select = ['*'])
    {
        $columns = implode(',', $select);
        $sql = "SELECT {$columns} FROM {$table} WHERE id ='{$id}' LIMIT 1";
        $query = $this->_query($sql);
        return mysqli_fetch_assoc($query);
    }

    public function count($table)
    {
        $sql = "SELECT COUNT(*) FROM {$table}";
        $query = $this->_query($sql);
        return mysqli_fetch_row($query)[0];
    }

    public function insertInto($table, $value="'abcde', 'abcde'")
    {
        
        $sql = "INSERT INTO {$table} VALUES ({$value})";
        return $this->_query($sql);
    }

    public function deleteById($table, $id)
    {
        $sql = "DELETE FROM {$table} WHERE id= '{$id}'";
        return $this->_query($sql);
    }
    
    public function updateUser($table, $userName, $value=["userName", "password"])
    {
        $sql = "UPDATE {$table} SET userName = '{$value[0]}', password = '{$value[1]}' WHERE userName = '{$userName}'";
        return $this->_query($sql);
    }

    public function deleteByUserName($table, $userName)
    {
        $sql = "DELETE FROM {$table} WHERE userName = '{$userName}'";
        return $this->_query($sql);
    }

}
