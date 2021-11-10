<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Education;
use DB;
class EducationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {	
    	$education=Education::all();
    	// $education=DB::table('educations')->get();
    	return view('admin.education.all_education',compact('education'));
    }

    public function store(Request $request)
    {
    	$education=new Education;
    	$education->name = $request->name;
    	$education->degree = $request->degree;
    	$education->start_date = $request->start_date;
    	$education->end_date = $request->end_date;
    	$education->save();
    	$notification = array(
                'messege' =>'Successfully Done!!',
                'alert-type'=>'success'
             );

            return redirect()->back()->with($notification);
    }

    public function edit($id)
    {
    	$education=Education::findorfail($id);
    	return view('admin.education.edit_education',compact('education'));
    }

    public function update(Request $request, $id)
    {
    	$education=Education::findorfail($id);
    	$education->name = $request->name;
    	$education->degree = $request->degree;
    	$education->start_date = $request->start_date;
    	$education->end_date = $request->end_date;
    	$education->save();
    	$notification = array(
                'messege' =>'Successfully Done!!',
                'alert-type'=>'success'
             );

            return redirect()->route('all.education')->with($notification);
    }

    public function delete( $id)
    {
    	$education=Education::findorfail($id);
    	$education->delete();
    	$notification = array(
                'messege' =>'Successfully Done!!',
                'alert-type'=>'success'
             );

            return redirect()->back()->with($notification);
    }
}
