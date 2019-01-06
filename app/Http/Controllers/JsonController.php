<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\post;

class JsonController extends Controller
{
    public function base()
    {
        $post = post::all();

        return $post;
    }
}
