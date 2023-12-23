<?php

class Database
{
    const HOST='localhost';
    const USERNAME  = 'root';
    const PASSWORD = '';
    const DB_NAME = 'wad';

    public function connect()
    {
       $connect = mysqli_connect(self::HOST, self::USERNAME, self::PASSWORD, self::DB_NAME);
        mysqli_set_charset($connect, 'UTF8');
        if(!$connect){
            die ('Kết nối thất bại:'. mysqli_connect_error());
        }
        return $connect;
    }

    public function close($connect){
        mysqli_close($connect);
    }
}