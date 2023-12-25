<?php
class LessonModel extends BaseModel
{
    const TABLE_LESSONS = 'lessons';
    
    public function getLessonsInCourse($select = ['*'], $where=['TRUE'], $orderby = ['id', 'ASC'])
    {
        return $this->selectWhere(self::TABLE_LESSONS, $select, $where, $orderby);
    }
}