<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Image;
use DB;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {	
    	$category=Category::all();
    	$product=DB::table('products')
    				->join('categories','products.category_id','categories.id')
    				->select('products.*','categories.category_name')
    				->get();
    	return view('admin.product.all_product',compact('product','category'));
    }

     public function store(Request $request)
    {   
        $validatedData = $request->validate([
               'code' => 'required|unique:products|max:255',
            ]);
        $image = $request->file('image');

        if ($image) {

            $imageName= uniqid().'.'.$image->getClientOriginalExtension();      
            Image::make($image)->resize(1000,1000)->save('public/backend/images/product/'.$imageName);     
            $upload_image='public/backend/images/product/'.$imageName;


        $product=new Product;
        $product->category_id = $request->category_id;
        $product->image = $upload_image;
        $product->code = $request->code;
        $product->link = $request->link;
        $product->save();
        $notification = array(
            'messege' =>'Successfully Done!!',
            'alert-type'=>'success'
         );
        return redirect()->back()->with($notification);
        }

    }

    public function edit($id)
    {   
        $category=Category::all();
        $product=Product::findorfail($id);
        return view('admin.product.edit_product',compact('product','category'));
    }

    public function update(Request $request, $id)
    {   
        $image = $request->file('image');
        if ($image) {

            $imageName= uniqid().'.'.$image->getClientOriginalExtension();      
            Image::make($image)->resize(1000,1000)->save('public/backend/images/product/'.$imageName);     
            $upload_image='public/backend/images/product/'.$imageName;


        $product=Product::findorfail($id);
            $old_img=$product->image;
            unlink($old_img);
        $product->category_id = $request->category_id;
        $product->image = $upload_image;
        $product->code = $request->code;
        $product->link = $request->link;
        $product->save();
        $notification = array(
            'messege' =>'Successfully Done!!',
            'alert-type'=>'success'
         );
        return redirect()->route('all.product')->with($notification);
        }else{
            $product=Product::findorfail($id);
            $product->category_id = $request->category_id;
            $product->code = $request->code;
            $product->link = $request->link;
            $product->save();
            $notification = array(
                'messege' =>'Successfully Done!!',
                'alert-type'=>'success'
             );
            return redirect()->route('all.product')->with($notification);
            }
}

    public function delete($id)
    {
        $product=Product::findorfail($id);
            $old_img=$product->image;
            unlink($old_img);
        $product->delete();
        $notification = array(
            'messege' =>'Successfully Done!!',
            'alert-type'=>'success'
         );
        return redirect()->back()->with($notification);
    }
}
