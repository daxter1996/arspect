<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Obra;
use Intervention\Image\Facades\Image;

class ObraController extends Controller
{

    public function add(Request $request)
    {

        if ($request->hasFile('obraFoto')) {

            $avatar = $request->file('obraFoto');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();

            $user = Auth::user();

            $newObra = new Obra();
            $newObra->nombre = $request->name;
            $newObra->descripccion = $request->descripcion;
            $newObra->user_id = $user->id;
            $newObra->url = $filename;

            $pathToSave = 'uploads/profile/' . $user->id . '/obras/' . $filename;
            $path = 'uploads/profile/' . $user->id . '/obras';

            if (!file_exists($path)) {//Genera la ruta del directori si no existeix amb permisos per linux
                mkdir($path, 0777, true);
            }

            Image::make($avatar->getRealPath())->resize(null, 600, function ($c) {
                $c->aspectRatio();
            })->save($pathToSave);

            $newObra->save();

            return redirect('personal');
        } else {
            return 'NoImage';
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
