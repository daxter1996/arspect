<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function mailContact(Request $request){

        if (Auth::guest()){
            $this->validate($request, [
                'email' => 'required|email',
                'emailTo' => 'required|email',
                'motivo' => 'required',
            ]);
            $motivo = $request->motivo;
            $email = $request->email;
        }else{
            $this->validate($request, [
                'motivo' => 'required',
                'emailTo' => 'required'
            ]);
            $motivo = $request->motivo;
            $email = Auth::user()->email;
        }

        Mail::send('emails.contact', ['request' => $request, 'email' => $email, 'motivo' => $motivo], function ($message) use ($email, $request){
            $message->from('arspect@arspect.com');
            $message->subject('Consulta desde Arspect de ' . $email);
            $message->to($request->emailTo);
        });

        return 'Gracias por la consulta';

    }
}
