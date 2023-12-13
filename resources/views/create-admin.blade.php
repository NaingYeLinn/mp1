@extends('layouts.admin-app')
@section('content')

  <!-- Container -->
  <section class="container" style="height:600px;">
  <h1 class="text-center mt-5">New Admin Creating</h1>  

  <a type="button" class="mt-3 btn btn-outline-primary btn-rounded" href="{{url('/admin/list')}}" data-mdb-ripple-init  data-mdb-ripple-color="dark">Admin List</a>

    <div class="row">
    <form class="mt-5" method="post" action="{{url('/admin/create')}}">
      @csrf
  <!-- Checking and showing validate error -->
  @error('name')
  <span class="text-danger">{{ $message }}</span>
  @enderror
    <!-- Product Name input -->
  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control" name="name" />
    <label class="form-label" for="form4Example1">Admin Name</label>
  </div>

      <!-- Checking and showing validate error -->
    @error('email')
    <span class="text-danger">{{ $message }}</span>
    @enderror
  <!-- Product Size input -->
  <div class="form-outline mb-4">
    <input type="text" id="form4Example2" class="form-control" name="email" />
    <label class="form-label" for="form4Example2">Admin Email</label>
  </div>

  <!-- Checking and showing validate error -->
  @error('password')
  <span class="text-danger">{{ $message }}</span>
  @enderror
    <!-- Product Prize input -->
  <div class="form-outline mb-4">
    <input type="password" id="form4Example3" class="form-control" name="password" />
    <label class="form-label" for="form4Example3">Admin Password</label>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Save</button>
</form>

    </div>
  </section>
  @endsection