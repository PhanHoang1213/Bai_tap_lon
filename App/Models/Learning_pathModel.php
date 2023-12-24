<?php
class Learning_pathModel extends BaseModel
{
    const TABLE_COURSES = 'courses';

    public function getByRoutine($select=['*'], $where=['TRUE'],$order = ['id', 'ASC'] )
    {
        return $this->selectWhere(self::TABLE_COURSES, $select,  $where, $order);
    }
}