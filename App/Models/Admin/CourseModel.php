<?php
class CourseModel extends BaseModel
{
    const TABLE_COURSES = 'courses';

    public function getCoursesOrder($select=['*'], $orderBy= ['orderNumber', 'ASC'])
    {
        return $this->selectOrder(self::TABLE_COURSES, $select, $orderBy);
    }

    public function findCourseId($id,$select=['*'])
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

    public function updateCourse($courseId, $value = ["id", "courseName", "courseImageURL", "courseIntro", "0", "0"])
    {
        $table = self::TABLE_COURSES;
        $sql = "UPDATE {$table} SET id = '{$value[0]}', courseName = '{$value[1]}', courseImageURL = '{$value[2]}',courseIntro = '{$value[3]}',frontend = '{$value[4]}',backend = '{$value[5]}'  WHERE id= '{$courseId}'";
        return $this->_query($sql);
    }

    public function delete($courseId)
    {
        return $this->deleteById(self::TABLE_COURSES, $courseId);
    }
}