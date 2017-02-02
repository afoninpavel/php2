<?php
/**
 * Created by PhpStorm.
 * User: паша
 * Date: 02.02.2017
 * Time: 0:51
 */

namespace App\Models;

use App\Model;

class User extends Model
{
    const TABLE = 'users';
    public $name;
    public $email;


}