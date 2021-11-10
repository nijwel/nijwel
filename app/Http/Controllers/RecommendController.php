<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recommend;
class RecommendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
    	$recommend=Recommend::all();
    	return view('admin.recommend.all_recommend',compact('recommend'));
    }

    public function store(Request $request)
    {
    	$recommend=new Recommend;
    	$recommend ->name = $request->name;
    	$recommend ->designation = $request->designation;
    	$recommend ->details = $request->details;
    	$recommend->save();
    	$notification = array(
            'messege' =>'Successfully Category Saved',
            'alert-type'=>'success'
         );
        return redirect()->back()->with($notification);
    }

    public function edit($id)
    {	
    	$recommend=Recommend::findorfail($id);
    	return view('admin.recommend.edit_recommend',compact('recommend'));
    }

    public function update(Request $request, $id)
    {
    	$recommend=Recommend::findorfail($id);
    	$recommend ->name = $request->name;
    	$recommend ->designation = $request->designation;
    	$recommend ->details = $request->details;
    	$recommend->save();
    	$notification = array(
            'messege' =>'Successfully Category Saved',
            'alert-type'=>'success'
         );
        return redirect()->route('all.recommend')->with($notification);
    }

    public function delete($id)
    {
    	$recommend=Recommend::findorfail($id);
    	$recommend->delete();
    	$notification = array(
            'messege' =>'Successfully Category Saved',
            'alert-type'=>'success'
         );
        return redirect()->back()->with($notification);
    }
}
