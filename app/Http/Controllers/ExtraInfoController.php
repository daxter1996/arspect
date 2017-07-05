<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\ExtraInfo;

class ExtraInfoController extends Controller
{
    public function save(Request $request){
        $user = Auth::user();

        $extraInfo = $user->extraInfo;

        if ($extraInfo != null){
            $extraInfo->biografia = $request->biografia;
            $extraInfo->dni = $request->dni;
            $user->name = $request->name;
            $user->surname = $request->surname;
            $user->update();
            $extraInfo->update();
        }else{
            $extraInfo = new ExtraInfo();
            $extraInfo->user_id = $user->id;
            $extraInfo->biografia = $request->biografia;
            $extraInfo->dni = $request->dni;
            $user->name = $request->name;
            $user->surname = $request->surname;
            $user->update();
            $extraInfo->save();
        }
        return redirect('/personal');
    }
}
