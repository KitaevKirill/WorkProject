<?php
/**
 * Created by PhpStorm.
 * User: User1
 * Date: 15.01.2019
 * Time: 0:24
 */

namespace App\Repositories;

interface UserRepository
{
    public function create($attributes);
}