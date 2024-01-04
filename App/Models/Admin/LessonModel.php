<?php

class LessonModel extends BaseModel
{
    const TABLE_LESSONS = 'lessons';
    const TABLE_COURSES = 'courses';


    public function getCourses($select=['*'])
    {
        return $this->select(self::TABLE_COURSES, $select);
    }

    public function getLessons($select=['*'])
    {
        return $this->select(self::TABLE_LESSONS, $select);
    }

    public function insertLesson($column='',$value='')
    {
        return $this->insertInto(self::TABLE_LESSONS,$column, $value);
    }

    public function getLessonVideoId($videoId)
    {
        $table= self::TABLE_LESSONS;
        $sql = "SELECT * FROM {$table} WHERE lessonVideoId ='{$videoId}' LIMIT 1";
        $query = $this->_query($sql);
        return mysqli_fetch_assoc($query);
    }

}