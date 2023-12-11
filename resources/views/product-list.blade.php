@extends('layouts.admin-app')
@section('content')

  <!-- Container -->
  <section class="container">
  <a type="button" class="mt-3 btn btn-outline-primary btn-rounded" href="{{url('/newprod')}}" data-mdb-ripple-init  data-mdb-ripple-color="dark">New Product</a>


  <table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Name</th>
      <th>Size</th>
      <th>Price</th>
      <th>Discount</th>
      <th>Qty</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
    <tr>
      <td>
        <div class="d-flex align-items-center">
          <img
              src="{{asset('storage/images/products/'.$product->photo)}}"
              alt=""
              style="width: 45px; height: 45px"
              />
          <div class="ms-3">
            <p class="fw-bold mb-1">{{$product->product_name}}</p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1">{{$product->size}}</p>
      </td>
      <td>
        <span>{{$product->price}}</span>
      </td>
      <td>{{$product->discount}}</td>
      <td>{{$product->Qty}}</td>
      <td>
        <a href="{{url('/productedit')}}" type="button" class="btn btn-link btn-sm btn-rounded">Edit</a>
        <a type="button" class="btn btn-link btn-sm text-danger btn-rounded" href="{{url('/product/delete/'.$product->id)}}">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
  </section> 

@endsection