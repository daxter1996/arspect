<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class testController extends Controller
{
    //

    public function index()
    {
        $fotos = File::glob(public_path().'/img/TEST/*.*');
        return view('test2')->with('obras', $fotos);
    }

    public function gallery()
    {
        return view('testgalery');
    }
}
