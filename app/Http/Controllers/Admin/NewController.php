<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Newcontroller extends Controller
{
    //
    public function add(){
        return view ('adimin.news.create');
    }
}
