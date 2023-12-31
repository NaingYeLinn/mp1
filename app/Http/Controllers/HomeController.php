<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Contact;
use Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products=Product::all();   
        return view('home',compact('products'));
    }
    //product detail
    public function productDetail($id){
        $product=Product::find($id);
        $products=Product::all();
        return view('detail', compact('product','products'));

    }

    // Cart adding session
    public function addToCart(Request $request){
        // Checking Validate
        $validated = $request->validate([
            'Qty' => 'required',
        ]);

        $product_id= $request->product_id;
        $Qty= $request->Qty;
        
        $cart= new Cart;
        $cart->user_id=auth()->user()->id;
        $cart->product_id=$product_id;
        $cart->Qty=$Qty;
        $cart->save();
        return back();
    }

    //cart for show
    public function cart(){
    //    $carts= Cart::where('user_id','=',auth()->user()->id);
    $carts = DB::table('carts')
                ->join('products', 'products.id', '=', 'carts.product_id')
                ->select('products.*', 'carts.Qty')
                ->where('carts.user_id','=',auth()->user()->id)
                ->get();
                
                return view('cart',compact('carts'));
    }
    //checkOut session
    public function checkout(Request $request){
        for($i=0;$i<count($request->product_id);$i++){
            $order = new Order;
            $order->user_id=auth()->user()->id;
            $order->product_id=$request->product_id[$i];
            $order->Qty=$request->Qty[$i];
            $order->price=$request->price[$i];
            $order->orderId=time();
            $order->save();
            
            Cart::where('product_id','=',$request->product_id[$i])->where('user_id', '=',auth()->user()->id)->delete();
            
        }
        return redirect()->route('home');
    }

    //contact Us session
    public function contactUs(Request $request){
        //Checking Validate
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $contact=new Contact;
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->message=$request->message;
        $contact->save();
        return redirect()->route('home');
    }
}
