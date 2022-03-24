<?php

namespace Core;

use App\Models\DataBase as DB;

abstract class Models extends DB
{
    protected $table;
    protected $fields;

    protected function C_create()
    {

    }

    public function R_selectAll($limit = array())
    {
        $limit = (is_array($limit) && !empty($limit)) ? " LIMIT {$limit[0]},{$limit[1]}" : "";

        $sql = "SELECT * FROM {$this->table} {$limit}";
        return $sql;

    }


}