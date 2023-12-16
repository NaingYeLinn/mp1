@extends('layouts.home-app')
@section('content')
    <!-- Cart Body -->
    <section class="container mt-5 mb-5">
    <form action="{{url('/checkout')}}" method="post">
        @csrf
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
                            <input type="color" value="{{$cart->color}}">
                        </div>
                        <!-- Amount -->
                        <div class="col-md-3 mt-5">
                            <p>{{$cart->Qty}}</p>
                        </div>
                        <!-- price Showing -->
                        <div class="col-md-2 mt-5">
                            <span class="mt-5">Price- ${{$cart->Qty*$cart->price}}</span> <span><i class="fas fa-trash-alt text-danger"></i> </span>  
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->
            <input type="hidden" name="product_id[]" value="{{$cart->id}}">
            <input type="hidden" name="Qty[]" value="{{$cart->Qty}}">
            <input type="hidden" name="price[]" value="{{$cart->Qty*$cart->price}}">
            @endforeach
            <!-- looping End (foreach loop)-->
        </div> <!-- row End -->
        

        <!-- Total Amount Comment-->
        <!-- <div class="row mt-4">
            <div class="col-md-6 text-start"><h5>Subtotal</h5></div>
            <div class="col-md-6 text-end text-warning"><p>$2000.00</p></div>
        </div> -->
       
        <!-- Button -->
        <div class="d-grid gap-2 mt-3">
            <button class="btn btn-info" type="submit">Checkout</button>
        </div>
    </form>

    </section>
    @endsection