<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experience;
class ExperienceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
    	$experience=Experience::all();
    	return view('admin.experience.all_experience',compact('experience'));
    }

    public function store(Request $request)
    {
    	$experience=new Experience;
    	$experience->company_name = $request->company_name;
    	$experience->company_ads = $request->company_ads;
    	$experience->designation = $request->designation;
    	$experience->start_date = $request->start_date;
    	$experience->end_date = $request->end_date;
    	$experience->details = $request->details;
    	$experience->save();
    	$notification = array(
                'messege' =>'Successfully Done!!',
                'alert-type'=>'success'
             );

            return redirect()->back()->with($notification);

    }

    public function edit($id)
    {
    	$experience=Experience::findorfail($id);
    	return view('admin.experience.edit_experience',compact('experience'));
    }

    public function update(Request $request, $id)
    {
    	$experience=Experience::findorfail($id);
    	$experience->company_name = $request->company_name;
    	$experience->company_ads = $request->company_ads;
    	$experience->designation = $request->designation;
    	$experience->start_date = $request->start_date;
    	$experience->end_date = $request->end_date;
    	$experience->details = $request->details;
    	$experience->save();
    	$notification = array(
                'messege' =>'Successfully Done!!',
                'alert-type'=>'success'
             );

            return redirect()->route('all.experience')->with($notification);

    }

    public function delete($id)
    {
    	$experience=Experience::findorfail($id);
    	$experience->delete();
    	$notification = array(
                'messege' =>'Successfully Done!!',
                'alert-type'=>'success'
             );

            return redirect()->route('all.experience')->with($notification);

    }
}
