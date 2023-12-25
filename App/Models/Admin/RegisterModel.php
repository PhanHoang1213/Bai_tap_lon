<?php

class RegisterModel extends BaseModel
{
    const TABLE_ADMINS = 'admins';
    
    public function getByAdminName($adminName, $select=['*'])
    {
        return $this->findByAdminname(self::TABLE_ADMINS, $adminName, $select);
    }
}