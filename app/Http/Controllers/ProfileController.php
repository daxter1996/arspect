<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    //

    function index(){
        return view('perfil');
    }

    function viewProfile(){
        $users = User::all();
        return view('profile', compact('users'));
    }
}
