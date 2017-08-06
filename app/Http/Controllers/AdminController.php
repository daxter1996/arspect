<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function general(){
        $totalArtistas = count(User::where('type', 2)->get());
        return view('admin.general', compact('totalArtistas'));
    }

    public function validacion(){
        $usersNoActive = User::where('active', 0)->where('type', 2)->get();
        return view('admin.validacion', compact('usersNoActive'));
    }
}
