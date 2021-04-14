<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function contact(Request $request){
        
        $data = ["clientName" => $request->name, "clientEmail" => $request->email, "clientCompany" => $request->company, 'clientAddress' => $request->address, 'clientMessage' => $request->text];
        $to_name = "Admin";
        $to_email = env('MAIL_FROM_ADDRESS');

        //return response()->json($request->all());

        \Mail::send("emails.contact", $data, function($message) use ($to_name, $to_email) {

            $message->to($to_email, $to_name)->subject("¡Someone has contacted you!");
            $message->from( env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));

        });

        return response()->json(["success" => true, "msg" => "Message successfully sended, wait for a reply in your email inbox"]);
    }
}
