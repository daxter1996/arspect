<?php

namespace App\Http\Controllers;
use App\Tag;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //

    function index(){
        return view('perfil');
    }

    function viewProfile($id){
        $user = User::find($id);
        return view('profile')->with(['user' => $user]);
    }

    function personal(){
        return view('personal');
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
            if(count(Storage::files('public/profile/'.Auth::user()->id)) > 0){
                $old = Storage::files('public/profile/'.Auth::user()->id)[0];
                $oldName = explode('/', $old)[3];
                Storage::move( $old,  'public/profile/'.Auth::user()->id.'/old/'.$oldName );
            }
            Storage::putFile('public/profile/'.Auth::user()->id, $request->file('profileImg'));
            return redirect('personal');
        }else{
            return "No image";
        }
    }

    public function addTag(Request $request){
       return Auth::user()->addTag($request->tag);
    }

    public function removeTag(Request $request){
        return Auth::user()->removeTag($request->tag);
    }
}
