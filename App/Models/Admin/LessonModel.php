<?php

class LessonModel extends BaseModel
{
    const TABLE_LESSONS = 'lessons';
    const TABLE_COURSES = 'courses';

    public function getCourses($select = ['*'])
    {
        return $this->select(self::TABLE_COURSES, $select);
    }

    public function getLessons($select = ['*'])
    {
        return $this->select(self::TABLE_LESSONS, $select);
    }

    public function insertLesson($column = '', $value = '')
    {
        return $this->insertInto(self::TABLE_LESSONS, $column, $value);
    }

    public function updateLesson($lessonId, $value = ["lessonName", "lessonVideoId", "courseId"])
    {
        $table = self::TABLE_LESSONS;
        $sql = "UPDATE {$table} SET lessonName = '{$value[0]}', lessonVideoId = '{$value[1]}', id = '{$value[2]}' WHERE lessonId= '{$lessonId}'";
        return $this->_query($sql);
    }

    public function delete($lessonId)
    {
        $table = self::TABLE_LESSONS;
        $sql = "DELETE FROM {$table} WHERE lessonId= '{$lessonId}'";
        return $this->_query($sql);
    }

    public function getLessonVideoId($videoId)
    {
        $table = self::TABLE_LESSONS;
        $sql = "SELECT * FROM {$table} WHERE lessonVideoId ='{$videoId}' LIMIT 1";
        $query = $this->_query($sql);
        return mysqli_fetch_assoc($query);
    }

    public function getLessonById($lessonId)
    {
        $table = self::TABLE_LESSONS;
        $sql = "SELECT * FROM {$table} WHERE lessonId ='{$lessonId}' LIMIT 1";
        $query = $this->_query($sql);
        return mysqli_fetch_assoc($query);
    }

}
