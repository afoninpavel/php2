<?php
/**
 * Created by PhpStorm.
 * User: паша
 * Date: 02.02.2017
 * Time: 3:32
 */

namespace App;

class Model
{
    const TABLE = '';
    public static function findAll()
    {
        $db =new Db();

        return $db->query(
            'SELECT * FROM ' . static::TABLE,
            static::class
        );
    }

}