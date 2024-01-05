<?php
class CourseModel extends BaseModel
{
    const TABLE_COURSES = 'courses';

    public function getCoursesOrder($select=['*'], $orderBy= ['orderNumber', 'ASC'])
    {
        return $this->selectOrder(self::TABLE_COURSES, $select, $orderBy);
    }

    public function findCourseId($id,$select=['id'])
    {
        return $this->findById(self::TABLE_COURSES,$id,$select);
    }
    public function findCourseName($courseName,$select=['courseName'])
    {
        return $this->findById(self::TABLE_COURSES,$courseName,$select);
    }

    public function insertCourse($column = '', $value = '')
    {
        return $this->insertInto(self::TABLE_COURSES, $column, $value);
    }
}