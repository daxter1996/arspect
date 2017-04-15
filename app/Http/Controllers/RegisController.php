<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisController extends Controller
{
    function index()
    {
        return view('register');
    }

    function artist()
    {
        return view('registers.artist');
    }

    function visitant()
    {
        return view('registers.visitant');
    }
}
