<?php
/**
 * Created by PhpStorm.
 * User: User1
 * Date: 12.01.2019
 * Time: 18:50
 */

namespace App\Services;

Use App\Foo;

class Service
{
    protected $key;

    public function __construct($key)
    {
        $this->key = $key;
    }

}