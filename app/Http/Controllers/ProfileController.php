<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Image;
class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function edit()
    {	
    	$profile=Profile::first();
    	return view('admin.profile_setting',compact('profile'));
    }

    public function update(Request $request, $id)
    {
    	$image = $request->file('image');
        if ($image) {

            $imageName= uniqid().'.'.$image->getClientOriginalExtension();   
            Image::make($image)->resize(718,982)->save('public/backend/images/profile/'.$imageName);   
            $upload_image='public/backend/images/profile/'.$imageName;


            $profile=Profile::findorfail($id);
            	$old_image=$profile->image;
            	unlink($old_image);
            $profile->name = $request->name;
            $profile->address = $request->address;
            $profile->company_name = $request->company_name;
            $profile->designation = $request->designation;
            $profile->image = $upload_image;
            $profile->details = $request->details;
            $profile->dob = $request->dob;
            $profile->phone = $request->phone;
            $profile->marital = $request->marital;
            $profile->nationality = $request->nationality;
            $profile->email = $request->email;
            $profile->skype = $request->skype;
            $profile->facebook = $request->facebook;
            $profile->instagram = $request->instagram;
            $profile->linkdin = $request->linkdin;
            $profile->save();
            $notification = array(
                'messege' =>'Successfully Updated',
                'alert-type'=>'success'
             );

            return redirect()->back()->with($notification);
        }else{
        	$profile=Profile::findorfail($id);
            $profile->name = $request->name;
            $profile->address = $request->address;
            $profile->company_name = $request->company_name;
            $profile->designation = $request->designation;
            $profile->details = $request->details;
            $profile->dob = $request->dob;
            $profile->phone = $request->phone;
            $profile->marital = $request->marital;
            $profile->nationality = $request->nationality;
            $profile->email = $request->email;
            $profile->skype = $request->skype;
            $profile->facebook = $request->facebook;
            $profile->instagram = $request->instagram;
            $profile->linkdin = $request->linkdin;
            $profile->save();
            $notification = array(
                'messege' =>'Successfully Post Updated',
                'alert-type'=>'success'
             );

            return redirect()->back()->with($notification);
        } 
    }
}
