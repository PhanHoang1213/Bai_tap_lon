<?php

class CourseModel extends BaseModel
{
    const TABLE_COURSES = 'courses';
    const TABLE_KNOWLEDGE = 'knowledge_courses';
    const TABLE_LESSONS = 'lessons';

    public function getCourseById($id, $select = ['*'])
    {
        return $this->findById(self::TABLE_COURSES, $id, $select);
    }

    public function getKnowledgeCourse($column, $value, $select=['*'])
    {
        return $this->selectByValue(self::TABLE_KNOWLEDGE,$column,$value, $select);
    }

    public function getLessonsInCourse($select = ['*'], $where=['TRUE'], $orderby = ['id', 'ASC'])
    {
        return $this->selectWhere(self::TABLE_LESSONS, $select, $where, $orderby);
    }
}
