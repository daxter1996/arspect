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

    function viewProfile($id){
        $user = User::find($id);
        return view('profile')->with(['user' => $user]);
    }

    function personal(){
        return view('personal');
    }
}
