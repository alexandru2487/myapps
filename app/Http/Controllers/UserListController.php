<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserListController extends Controller
{
    public function index(Request $request){
        $users = User::where('user_uuid','!=',Auth::user()->user_uuid)->get();
        return view('pages.user-list',compact('users'));
    }

    public function create(){
        return view('pages.user-create' );
    }

    public function store(Request $request){
        dd($request->all());
    }
}
