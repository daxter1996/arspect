<?php

namespace App\Http\Controllers;
use App\Tag;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    //

    function index(){
        return view('perfil');
    }

    function viewProfile($id){
        $user = User::find($id);

        $ultimaObra = $user->obras;
        if (count($ultimaObra) > 0){
            $ultimaObra = 'uploads/profile/' . $user->id . '/obras/' . last(last($ultimaObra))->url;
        }

        return view('profile', compact('user'), compact('ultimaObra'));
    }

    function personal(){

        $user = Auth::user();

        $ultimaObra = $user->obras;
        if (count($ultimaObra) > 0){
            $ultimaObra = 'uploads/profile/' . $user->id . '/obras/' . last(last($ultimaObra))->url;
        }

        return view('personal', compact('user'), compact('ultimaObra'));
    }

    public function search(Request $request){
        $users = User::where('name','like', '%'.$request->input('nombre').'%')->get();
        return view('index')->with('users', $users);
    }

    public function buscar(Request $request){
        $users = User::where('name','like', '%'.$request->name.'%')->get();
        return view('widgets.search')->with('users', $users);

    }

    public function uploadProfilePhoto(Request $request){
        if($request->hasFile('profileImg')){
            $avatar = $request->file('profileImg');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            $user = Auth::user();
            $pathToSave = 'uploads/profile/'. $user->id . '/' . $filename;

            if (!file_exists('uploads/profile/'. $user->id )) {//Genera la ruta del directori si no existeix amb permisos per linux
                mkdir('uploads/profile/'. $user->id , 0777, true);
            }

            Image::make($avatar->getRealPath())->resize(null, 600, function ($c){
                $c->aspectRatio();
            })->save( $pathToSave );
            $user->avatar = $filename;
            $user->update();
            return redirect('personal');
        }else{
            dd('NoImage');
        }


       /* if($request->hasFile('profileImg')){
            if(count(Storage::files('public/profile/'.Auth::user()->id)) > 0){
                $old = Storage::files('public/profile/'.Auth::user()->id)[0];
                $oldName = explode('/', $old)[3];
                Storage::move( $old,  'public/profile/'.Auth::user()->id.'/old/'.$oldName );
            }
            Storage::putFile('public/profile/'.Auth::user()->id, $request->file('profileImg'));
            return redirect('personal');
        }else{
            return "No image";
        }*/
    }

    public function addTag(Request $request){
       return Auth::user()->addTag($request->tag);
    }

    public function removeTag(Request $request){
        return Auth::user()->removeTag($request->tag);
    }
}
