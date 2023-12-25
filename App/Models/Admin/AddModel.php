<?php
class AddModel extends BaseModel
{
    const TABLE_USERS = 'users';
    public function getUsers($select=['*'])
    {
        return $this->select(self::TABLE_USERS, $select);
    }

    public function getByUserName($userName, $select=['*'])
    {
        return $this->findByUsername(self::TABLE_USERS, $userName, $select);
    }

    public function insertUser($value="'abcde', 'abcde'")
    {  
        return $this->insertIntoUser(self::TABLE_USERS, $value);
    }
}