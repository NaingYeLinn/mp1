@extends('layouts.admin-app')
@section('content')

<!-- Auth and Super Admin Checking -->
  @if(Session::has('superadmin-error'))
    <div class="alert-danger">
      {{Session::get('superadmin-error')}}
    </div>
  @endif

  <!-- Container -->
  <section class="container">
  <h1 class="text-center mt-5">New Product Creating</h1>  

    <div class="row">
    <form class="mt-5" method="post" action="{{url('/product/create')}}" enctype="multipart/form-data">
    @csrf

    @error('product_name') <!-- Checking and showing validate error -->
      <span class="text-danger">{{ $message }}</span>
    @enderror
  <!-- Product Name input -->
  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control" name="product_name" />
    <label class="form-label" for="form4Example1">Product Name</label>
  </div>

  @error('size') <!-- Checking and showing validate error -->
    <span class="text-danger">{{ $message }}</span>
  @enderror
  <!-- Product Size input -->
  <div class="form-outline mb-4">
    <input type="text" id="form4Example2" class="form-control" name="size"/>
    <label class="form-label" for="form4Example2">Product Size</label>
  </div>

  @error('price') <!-- Checking and showing validate error -->
    <span class="text-danger">{{ $message }}</span>
  @enderror
    <!-- Product Price input -->
  <div class="form-outline mb-4">
    <input type="text" id="form4Example3" class="form-control" name="price"/>
    <label class="form-label" for="form4Example3">Product Price</label>
  </div>

  @error('discount') <!-- Checking and showing validate error -->
    <span class="text-danger">{{ $message }}</span>
  @enderror
  <!-- Discount Price input -->
  <div class="form-outline mb-4">
    <input type="text" id="form4Example4" class="form-control" name="discount" />
    <label class="form-label" for="form4Example4">Discount</label>
  </div>

  @error('Qty') <!-- Checking and showing validate error -->
    <span class="text-danger">{{ $message }}</span>
  @enderror
  <!-- Quantity -->
  <div class="form-outline mb-4">
    <input type="text" id="form4Example5" class="form-control" name="Qty"/>
    <label class="form-label" for="form4Example5">Quantity</label>
  </div>

    <!-- Quantity -->
    <div class="form-outline mb-4">
    <input type="color" id="form4Example5" class="form-control"  name="color"/>
    <label class="form-label" for="form4Example5">Color</label>
  </div>

  @error('product_image') <!-- Checking and showing validate error -->
    <span class="text-danger">{{ $message }}</span>
  @enderror
  <!-- Product Image -->
  <label for="form4Example6">Product Image</label>
  <div class="form-outline mb-4">
    <input type="file" id="form4Example6" class="form-control" name="product_image" />
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Save</button>
</form>

    </div>
  </section> 

@endsection