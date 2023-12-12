@extends('layouts.admin-app')
@section('content')

  <!-- Container -->
  <section class="container">
    <h1 class="text-center mt-5">Product Edit Setting</h1>
    <div class="row">
    <form class="mt-3" method="post" action="{{url('/product/update/'.$product->id)}}" enctype="multipart/form-data">
      @csrf
  <!-- Product Name input -->
  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control" name="product_name" value='{{$product->product_name}}' />
    <label class="form-label" for="form4Example1">Product Name</label>
  </div>

  <!-- Product Size input -->
  <div class="form-outline mb-4">
    <input type="text" id="form4Example2" class="form-control" name="size" value='{{$product->size}}'/>
    <label class="form-label" for="form4Example2">Product Size</label>
  </div>

    <!-- Product Prize input -->
  <div class="form-outline mb-4">
    <input type="text" id="form4Example3" class="form-control" name="price" value='{{$product->price}}'/>
    <label class="form-label" for="form4Example3">Product Price</label>
  </div>

  <!-- Discount Price input -->
  <div class="form-outline mb-4">
    <input type="text" id="form4Example4" class="form-control" name="discount" value='{{$product->discount}}' />
    <label class="form-label" for="form4Example4">Discount</label>
  </div>

  <!-- Quantity -->
  <div class="form-outline mb-4">
    <input type="text" id="form4Example5" class="form-control" name="Qty" value='{{$product->Qty}}' />
    <label class="form-label" for="form4Example5">Quantity</label>
  </div>
  <!-- Color -->
  <div class="form-outline mb-4">
    <input type="color" id="form4Example5" class="form-control" name="color" value='{{$product->color}}' />
    <label class="form-label" for="form4Example5">Color</label>
  </div>


  <!-- Product New Image -->
  <label for="form4Example6">Product Image</label>
  <div class="form-outline mb-4">
    <img src="{{asset('storage/images/products/'.$product->photo)}}" style="width:200px; height:100px;" alt="">
    <input type="file" name="new_image" id="form4Example6" class="form-control" />
  </div>
  <!-- Old Photo File -->
  <div class="form-outline mb-4">
    <input type="text" name="old_image" value='{{$product->photo}}' id="form4Example6" class="form-control" />
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Update</button>
</form>

    </div>
  </section> 

@endsection