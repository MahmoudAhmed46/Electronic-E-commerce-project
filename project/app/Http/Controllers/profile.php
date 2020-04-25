<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class profile extends Controller
{
    public function fun()
    {
<<<<<<< HEAD
       return view('profile');
=======
       $user= Auth::check();
       return view('profile')->with(compact('user'));
>>>>>>> d20e8afdbecf1521e31adff7bcc0441003069177
    }
}
