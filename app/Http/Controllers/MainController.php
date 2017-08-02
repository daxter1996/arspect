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

    public function about(){
        return view('about');
    }

    public function landing(){
        return view('landing');
    }

    public function search(Request $request){
        $users = User::where('type',2)->where('active',1)->where('name','like', '%' . $request->nombre . '%')->orWhere('surname','like', '%' . $request->nombre . '%')->get();
        return view('index', compact('users'));
    }

    public function terminos(){
     return view('legal.terminos');
    }

    public function politica(){
        return view('legal.politica');
    }
}
