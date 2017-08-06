<?php

namespace App\Http\Controllers;

use App\User;
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
            $extraInfo->facebook = $request->facebook;
            $extraInfo->twitter = $request->twitter;
            $extraInfo->instagram = $request->instagram;
            $extraInfo->web = $request->web;

            $user->name = $request->name;
            $user->surname = $request->surname;

            $user->update();
            $extraInfo->update();
        }else{
            $extraInfo = new ExtraInfo();
            $extraInfo->user_id = $user->id;
            $extraInfo->biografia = $request->biografia;
            $extraInfo->dni = $request->dni;
            $extraInfo->facebook = $request->facebook;
            $extraInfo->twitter = $request->twitter;
            $extraInfo->instagram = $request->instagram;
            $extraInfo->web = $request->web;

            $user->name = $request->name;
            $user->surname = $request->surname;

            $user->update();
            $extraInfo->save();
        }
        return redirect('/home');
    }

    public function location(Request $request){

        $this->validate($request, [
            'geoloc' => 'required',
            'direccion' => 'required',
        ]);

        $extraInfo = Auth::user()->extraInfo;

        $geoloc = explode('/', $request->geoloc);
        $lat = $geoloc[0];
        $lng = $geoloc[1];

        if ($extraInfo != null){
            $extraInfo->user_id = Auth::user()->id;
            $extraInfo->location_name = $request->direccion;
            $extraInfo->lat = $lat;
            $extraInfo->lng = $lng;
            $extraInfo->update();
        }else{
            $extraInfo = new ExtraInfo();
            $extraInfo->user_id = Auth::user()->id;
            $extraInfo->location_name = $request->direccion;
            $extraInfo->lat = $lat;
            $extraInfo->lng = $lng;
            $extraInfo->save();
        }
        return redirect('/home');
    }
}
