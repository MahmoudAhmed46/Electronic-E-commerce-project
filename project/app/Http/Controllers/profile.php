<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class profile extends Controller
{
    public function fun()
    {
       return view('profile');
    }
}
