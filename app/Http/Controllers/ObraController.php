<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Obra;

class ObraController extends Controller
{

    public function add(Request $request){

        if ($request->hasFile('obraFoto')){
           $newObra = new Obra();
           $url = last(explode('/', Storage::putFile('public/profile/'.Auth::user()->id . '/obras', $request->file('obraFoto'))));
           $obraName = $request->name;
           $descrObra = $request->descripcion;

           $newObra->nombre = $obraName;
           $newObra->descripccion = $descrObra;
           $newObra->url = $url;

           Auth::user()->obras()->save($newObra);

           return redirect('personal');


        } else {
            return "No image";
        }

    }

    public function delete(Request $request){
        $user = Auth::user();
        $obra = $user->obras->pluck('id')->toArray();

        if (in_array($request->obraId, $obra)) {
            $obrabd = Obra::find($request->obraId);
            Storage::delete('/public/profile/' . $user->id . '/obras/' . $obrabd->url);
            $obrabd->delete();
            return "Obra Eliminada";
        }else{
            return 'Error!';
        }
    }

}
