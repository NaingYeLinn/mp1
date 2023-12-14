@extends('layouts.home-app')
@section('content')

  <!-- body -->
  <section class="container" style="min-height: 800px;">
    <div class="row mt-3 mb-4">
      <div class="col-md-4 bg-dark">
        <img src="{{asset('storage/images/products/'.$product->photo)}}" alt="none" class="img-fluid">
      </div>
      <div class="col-md-4 bg-light">
        <h5>{{$product->product_name}}</h5>
        <h6>{{$product->size}}</h6>
        <h2 class="text-warning">Price- ${{$product->price}}</h2>
        <p><span class="text-decoration-line-through">{{$product->discount}}</span></p>

        <form action="{{url('/product/cart')}}" method="post">
          @csrf
        <input type="hidden" name="product_id" value="{{$product->id}}">

        @error('Qty') <!-- Checking and showing validate error -->
          <span class="text-danger">{{ $message }}</span>
        @enderror
        <span>Quality</span> <br>
        <input type="number" value="1" name="Qty" min="1" max="{{$product->Qty}}">
        <div class="mt-4">
          <input type="submit" class="btn btn-primary" value="Add to Cart">
        </div>
        </form>
      </div>
      <div class="col-md-4 rounded">
        <!-- <p>Delivery</p>
        <p><i class="fas fa-map-marker-alt"></i> Yangon, Tamwe Township</p>
        <p><i class="fas fa-taxi"></i> Home Delivery <br>  2 ~ 5 Days</p>
        <p><i class="fas fa-money-bill-alt"></i> Cash on Delivery</p> -->

      </div>
    </div>

    <!-- Row-1 -->
    <div class="row mt-4 mb-4">
      <h3 class="text-left mb-4">Top Brand</h3> <!-- TitleOf Item -->
      @foreach($products as $topBrand)
      <div class="col-md-3">  <!-- TopBrand-1 -->
        <a href="{{url('/detail/'.$topBrand->id)}}">
          <div class="card shadow text-center">
            <div class="bg-image hover-overlay ripple" >
              <img src="{{asset('storage/images/products/'.$topBrand->photo)}}" class="img-fluid" style="height:200px"/>
              <a href="{{url('/detail/'.$topBrand->id)}}">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">{{$topBrand->product_name}}</h5>
              <h5 class="card-title">Price- ${{$topBrand->price}}</h5>
            </div>
          </div>
        </a>
      </div> <!-- End Of TopBrand-1 -->
      @endforeach

      
    </div>
  </section> 
@endsection