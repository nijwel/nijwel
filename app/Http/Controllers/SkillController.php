<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
class SkillController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {	
    	$skill=Skill::all();
    	return view('admin.skill.all_skill',compact('skill'));
    }

    public function store(Request $request)
    {
    	$skill=new Skill;
    	$skill->name = $request->name;
    	$skill->percent = $request->percent;
    	$skill->save();
    	$notification = array(
                'messege' =>'Successfully Done!!',
                'alert-type'=>'success'
             );

            return redirect()->back()->with($notification);
    }

    public function edit($id)
    {	
    	$skill=Skill::findorfail($id);
    	return view('admin.skill.edit_skill',compact('skill'));
    }

    public function update(Request $request, $id)
    {
    	$skill=Skill::findorfail($id);
    	$skill->name = $request->name;
    	$skill->percent = $request->percent;
    	$skill->save();
    	$notification = array(
                'messege' =>'Successfully Done!!',
                'alert-type'=>'success'
             );

            return redirect()->route('all.skill')->with($notification);
    }

    public function delete($id)
    {
    	$skill=Skill::findorfail($id);
    	$skill->delete();
    	$notification = array(
                'messege' =>'Successfully Done!!',
                'alert-type'=>'success'
             );

            return redirect()->back()->with($notification);
    }
}
