<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{

    public function addPage()
    {
        return view('addEvent');
    }

    public function add(Request $request)
    {

        $this->validate($request, [
            'geoloc' => 'required',
            'direccion' => 'required',
        ]);

        $geoloc = explode('/', $request->geoloc);
        $lat = $geoloc[0];
        $lng = $geoloc[1];

        $newEvent = new Event;//Crea el evento
        $newEvent->nombre = $request->eventName;
        $newEvent->descripccion = $request->eventDescription;
        $newEvent->localizacion = $request->geoloc;
        $newEvent->lat = $lat;
        $newEvent->lng = $lng;
        $newEvent->direccion = $request->direccion;
        $newEvent->user_id = Auth::user()->id;
        $newEvent->save();

        return redirect('/home');
    }

    public function delete(Request $request){
        $user = Auth::user();
        $event = $user->events->pluck('id')->toArray();

        if (in_array($request->eventId, $event)) {
            Event::find($request->eventId)->delete();
            return "ok";
        }else{
            return 'Nope Tiu';
        }
    }
}
