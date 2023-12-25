<?php
class HomeModel extends BaseModel
{
    const TABLE_USERS = 'users';
    const TABLE_COURSES = 'courses';
    const TABLE_LESSONS = 'lessons';

    public function countUser()
    {
        return $this->count(self::TABLE_USERS);
    }
    public function countCourse()
    {
        return $this->count(self::TABLE_COURSES);
    }
    public function countLesson()
    {
        return $this->count(self::TABLE_LESSONS);
    }
}
