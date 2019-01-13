<?php
/**
 * Created by PhpStorm.
 * User: User1
 * Date: 12.01.2019
 * Time: 19:45
 */

namespace App;


class Foo
{
    protected $key;

    public function __construct($key)
    {
        $this->key = $key;
    }
}