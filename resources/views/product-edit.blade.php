@extends('layouts.admin-app')
@section('content')

  <!-- Container -->
  <section class="container">
    <h1 class="text-center mt-5">Product Edit Setting</h1>
    <div class="row">
    <form class="mt-3">
  <!-- Product Name input -->
  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control" />
    <label class="form-label" for="form4Example1">Product Name</label>
  </div>

  <!-- Product Size input -->
  <div class="form-outline mb-4">
    <input type="text" id="form4Example2" class="form-control" />
    <label class="form-label" for="form4Example2">Product Size</label>
  </div>

    <!-- Product Prize input -->
  <div class="form-outline mb-4">
    <input type="text" id="form4Example3" class="form-control" />
    <label class="form-label" for="form4Example3">Product Prize</label>
  </div>

  <!-- Discount Price input -->
  <div class="form-outline mb-4">
    <input type="text" id="form4Example4" class="form-control" />
    <label class="form-label" for="form4Example4">Discount</label>
  </div>

  <!-- Quantity -->
  <div class="form-outline mb-4">
    <input type="text" id="form4Example5" class="form-control" />
    <label class="form-label" for="form4Example5">Quantity</label>
  </div>


  <!-- Product Image -->
  <label for="form4Example6">Product Image</label>
  <div class="form-outline mb-4">
    <input type="file" id="form4Example6" class="form-control" />
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
</form>

    </div>
  </section> 

@endsection