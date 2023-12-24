<?php

class CourseModel extends BaseModel
{
    const TABLE_COURSES = 'courses';
    const TABLE_KNOWLEDGE = 'knowledge_courses';

    public function getCourseById($id, $select = ['*'])
    {
        return $this->findById(self::TABLE_COURSES, $id, $select);
    }

    public function getKnowledgeCourse($column, $value, $select=['*'])
    {
        return $this->selectByValue(self::TABLE_KNOWLEDGE,$column,$value, $select);
    }
}
