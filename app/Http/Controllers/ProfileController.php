<?php

namespace App\Http\Controllers;
use App\Tag;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;
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

        $user->views = $user->views + 1;
        $user->update();
        $ultimaObra = $user->obras;
        if (count($ultimaObra) > 0){
            $ultimaObra = 'uploads/profile/' . $user->id . '/obras/' . last(last($ultimaObra))->url;
        }

        return view('profile', compact('user'), compact('ultimaObra'));
    }

    function home(){

        $user = Auth::user();


        $ultimaObra = $user->obras;

        if (count($ultimaObra) > 0){
            $ultimaObra = 'uploads/profile/' . $user->id . '/obras/' . last(last($ultimaObra))->url;
        }

        /*Tria la vista TODO Fer aso amb un middleweare en un futur*/

        if(Auth::user()->type == 2){
            return view('profiles.artista', compact('user'), compact('ultimaObra'));
        }else{
            return view('profiles.user', compact('user'));
        }


    }

    public function buscar(Request $request){

        //$users = User::where('type',2)->where('active',1)->where('name','like', '%' . $request->nombre . '%')->get();
        //$users = User::where('type',2)->raw("where name + ' ' + surname like" . '%' . $request->nombre . '%')->get();
        $users = User::where('type',2)->whereRaw("concat(name, ' ', surname) like '%" . $request->name . "%'")->get();
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
            return redirect('home');
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

    public function valid(Request $request){

        $user = User::find($request->user_id);

        $email = $user->email;

        Mail::send('emails.valid', [] ,function ($message) use ($email){
            $message->from('arspect@arspect.com');
            $message->subject('Arspect - Perfil Validado');
            $message->to($email);
        });

        $user->active = 1;
        $user->update();


        return 'Perfil Validado';
    }

    public function editLocation(){
        return view('profiles.editLocation');
    }
}
