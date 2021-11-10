<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messege;

class MessegeController extends Controller
{
    	public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function unread()
    {
        $messege=Messege::where('status',0)->get();
        return view('admin.messege.unread_messege',compact('messege'));
    }

     public function read()
    {
        $messege=Messege::where('status',1)->get();
        return view('admin.messege.read_messege',compact('messege'));
    }

     public function show($id)
    {   $messege=Messege::where('id',$id)->update(['status'=>1]);
        $messege= Messege::findorfail($id);
        return view('admin.messege.show_messege',compact('messege'));
    }

    public function delete($id)
    {
       $messege=Messege::findorfail($id);
       $messege->delete();
       $notification = array(
            'messege' =>'Successfully Messege Deleted',
            'alert-type'=>'error'
         );
        return redirect()->back()->with($notification);
    }
}
