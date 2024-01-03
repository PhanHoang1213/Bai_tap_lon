<?php
class UserModel extends BaseModel
{
    const TABLE_USERS = 'users';
    const TABLE_LESSONS = 'lessons';
    const TABLE_COURSES = 'courses';

   

    public function getUsers($select=['*'])
    {
        return $this->select(self::TABLE_USERS, $select);
    }

    public function insertUser($value="'abcde', 'abcde'")
    {  
        return $this->insertInto(self::TABLE_USERS, $value);
    }

    public function update($userName, $value=['userName', 'password'])
    {
        return $this->updateUser(self::TABLE_USERS, $userName, $value);
    }

    public function delete($userName)
    {
        return $this->deleteByUserName(self::TABLE_USERS, $userName);
    }

    public function getCourses($select=['*'])
    {
        return $this->select(self::TABLE_COURSES, $select);
    }

    public function getLessons($select=['*'])
    {
        return $this->select(self::TABLE_LESSONS, $select);
    }

    public function getByUserName($userName, $select=['*'])
    {
        return $this->findByUsername(self::TABLE_USERS, $userName, $select);
    }

    

    public function insertLesson($value="'abcde', 'abcde','abcde'")
    {
        return $this->insertInto(self::TABLE_LESSONS, $value);
    }
}