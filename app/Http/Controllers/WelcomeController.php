<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $first_user = User::all()->count()>0;
        if(!$first_user)
            return view('welcome');
        else
            return view('welcome-user');
    }
}
