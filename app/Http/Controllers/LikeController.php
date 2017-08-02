<?php

namespace App\Http\Controllers;

use App\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Obra;

class LikeController extends Controller
{
    //
    public function add(Request $request){
        $likeExists = DB::table('likes')->where('user_id', Auth::user()->id)->where('obra_id', $request->obraId)->get();

        if ($likeExists->count() == 1){
            return 0;
        }else{
            $like = new Like();
            $like->user_id = Auth::user()->id;
            $like->obra_id = $request->obraId;
            $like->save();
            return 1;
        }
    }

}
