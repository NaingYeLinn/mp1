<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function create(Request $request){
      // Checking Validate
      $validated = $request->validate([ 
         'product_name' => 'required',
         'size' => 'required',
         'price' => 'required',
         'discount' => 'required',
         'Qty' => 'required',
         'product_image' => 'required',
         ]);
        //photo file saving
        $image=$request->file('product_image'); //setting file
        $filename=uniqid().$image->getClientOriginalName();
        Storage::disk('local')->putFileAs('/public/images/products/',$image,$filename);
        //product string file
        $product= new Product;
        $product->user_id= auth()->user()->id;
        $product->product_name= $request->product_name;
        $product->size= $request->size;
        $product->price= $request->price;
        $product->discount= $request->discount;
        $product->Qty= $request->Qty;
        $product->color= $request->color;
        $product->photo= $filename;
        $product->save();

        return redirect()->route('prodls');
     }
     //Showing product
     public function index(){
        //listing Products
        $products= Product::all();
        return view('product-list', compact('products'));
     }
     //deleting product
     public function delete($id){
        $product=Product::findorfail($id); //how to delete id
            unlink(storage_path('app/public/images/products/'.$product->photo));
            $product->delete();
        return redirect()->route('prodls');
     }
     //Product Editing
     public function edit($id){
      $product = Product::findorfail($id);
      return view('product-edit',compact('product'));
     }

     //product updating
     public function update(Request $request,$id){
       // Checking Validate
       $validated = $request->validate([ 
         'product_name' => 'required',
         'size' => 'required',
         'price' => 'required',
         'discount' => 'required',
         'Qty' => 'required',
         'color' => 'required',
         ]);

      //for image updating Checking Statement
      if(!empty($request->file('new_image'))){
      $image=$request->file('new_image'); //setting file
        $filename=uniqid().$image->getClientOriginalName(); //name setting

        Storage::disk('local')->putFileAs('/public/images/products/',$image,$filename); //store new file
        //to delete photo
        unlink(storage_path('app/public/images/products/'.$request->old_image));
      }else{
         $filename= $request->old_image;
      }
      $product = Product::findorfail($id);
      //for othe data updating
        $product->user_id= auth()->user()->id;
        $product->product_name= $request->product_name;
        $product->size= $request->size;
        $product->price= $request->price;
        $product->discount= $request->discount;
        $product->Qty= $request->Qty;
        $product->color= $request->color;
        $product->photo= $filename;
        $product->save();
        return redirect()->route('prodls');
     }
}