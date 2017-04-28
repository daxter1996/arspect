<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

class MainController extends Controller
{
    function index(){
        return view('main');
    }

    function home(){
        return view('index');
    }

    public function search($name){
        $users = User::where('name','like', '%'.$name.'%')->get();

        return view('index')->with('users', $users);
    }

    public function about(){
        return view('about');
    }

}
