<?php
/**
 * Created by PhpStorm.
 * User: User1
 * Date: 15.01.2019
 * Time: 0:29
 */

namespace App\Repositories;

class DBUserRepository implements UserRepository
{
    public function create($attributes) {
//        User::create();
        dd('Creating the user');
    }
}