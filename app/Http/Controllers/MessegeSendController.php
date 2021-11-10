<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messege;

class MessegeSendController extends Controller
{
    public function send(Request $request)
    {
    	$messege=new Messege;
    	$messege->name = $request->name;
    	$messege->phone = $request->phone;
    	$messege->email = $request->email;
    	$messege->subject = $request->subject;
    	$messege->messege = $request->message;
    	$messege->status = 0;
    	$messege->save();
        return redirect()->back();
    }
}
