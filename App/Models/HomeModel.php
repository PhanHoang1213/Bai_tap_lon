<?php
class HomeModel extends BaseModel
{
    const TABLE_COURSES = 'courses';

    public function getCoursesOrder($select = ['*'], $order = ['id', 'ASC'])
    {
        return $this->selectOrder(self::TABLE_COURSES, $select, $order);
    }
}
