<?php
/**
 * Created by PhpStorm.
 * User: User1
 * Date: 12.01.2019
 * Time: 18:50
 */

namespace App\Services;

class Language
{
    protected $la;

    public function __construct($la)
    {
        $this->la = $la;
    }

}