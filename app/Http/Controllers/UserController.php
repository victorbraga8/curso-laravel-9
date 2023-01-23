<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::get();        
        // echo gettype($users);
        // return view('users.index', compact($users));
        return view('users.index', ['users'=> $users]);
    }

    public function show($id){
        dd('users.show', $id);
        // return view('users.index');
    }
}
