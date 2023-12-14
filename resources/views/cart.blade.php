@extends('layouts.home-app')
@section('content')
    <!-- Cart Body -->
    <section class="container mt-5 mb-5">
        <div class="row"> <!-- row start -->
            <h3 class="text-start">Your Cart</h3>
            
            <!-- looping start (foreach loop)-->
            @foreach($carts as $cart)
            <!-- Card-1 -->
            <div class="col-md-12 mt-3">
                <div class="card shadow">
                    <div class="row">
                        <!-- image -->
                        <div class="col-md-3 mt-2 mb-1">
                            <img src="{{asset('storage/images/products/'.$cart->photo)}}" style="height:150px; width:250px" alt="sample image url">
                        </div>
                        <!-- product description -->
                        <div class="col-md-4 mt-3">
                            <h5 class="text-primary">{{$cart->product_name}}</h5>
                            <h5>Price- ${{$cart->price}}</h5>
                            <!-- setting for color -->
                            <p>Color</p>
                            <span style="background-color:{{$cart->color}}; padding:2px; color:{{$cart->color}}; ">Color</span>
                        </div>
                        <!-- Amount -->
                        <div class="col-md-3 mt-5">
                            <p>{{$cart->Qty}}</p>
                        </div>
                        <!-- price Showing -->
                        <div class="col-md-2">
                            <p class="mt-5">Price- ${{$cart->price}}<i class="fas fa-trash-alt text-danger"></i> </p>  
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->
            @endforeach
            <!-- looping End (foreach loop)-->
        </div> <!-- row End -->
        
        <!-- Total Amount -->
        <div class="row mt-4">
            <div class="col-md-6 text-start"><h5>Subtotal</h5></div>
            <div class="col-md-6 text-end text-warning"><p>$2000.00</p></div>
        </div>
       
        <!-- Button -->
        <div class="d-grid gap-2 mt-3">
            <button class="btn btn-info" type="button">Checkout</button>
          </div>

    </section>
    @endsection