<?php
class RegisterModel extends BaseModel
{
    const TABLE_USERS = 'users';
    const TABLE_USER_INFO = 'userProfiles';
    public function register($userName, $password)
    {
        $sql = "INSERT INTO users VALUE ('{$userName}', '{$password}')";
        $this->_query($sql);
    }

    public function getUsers($select = ['*'])
    {
        return $this->select(self::TABLE_USERS, $select);
    }

    public function getByUserName($userName, $select=['*'])
    {
        return $this->findByUsername(self::TABLE_USERS, $userName, $select);
    }

    // public function getUserInfo($userName, $select = ['*'])
    // {
    //     return $this->find(self::TABLE_USER_INFO, $userName, $select);
    // }
    public function closeConnect()
    {
        $this->close($this->connect);
    }
}
