@extends('layouts.home-app')
@section('content')

  <!-- body -->
  <section class="container">
    <div class="row mt-3 mb-4">
      <div class="col-md-4 bg-dark">
        <img src="./image/Laptop/MSI.jpg" alt="none" class="img-fluid">
      </div>
      <div class="col-md-4 bg-light">
        <h5>Dell XPS-13</h5>
        <h6>13 inches</h6>
        <h2 class="text-warning">Price:$ 745.00</h2>
        <p><span class="text-decoration-line-through">250000 MMKs</span> 5%</p>

        <select class="form-select" aria-label=".form-select-lg example">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        </select>

        <div class="mt-4">
          <a href="{{url('/cart')}}" class="btn btn-primary">Add to Cart</a>
        </div>
      </div>
      <div class="col-md-4 rounded">
        <p>Delivery</p>
        <p><i class="fas fa-map-marker-alt"></i> Yangon, Tamwe Township</p>
        <p><i class="fas fa-taxi"></i> Home Delivery <br>  2 ~ 5 Days</p>
        <p><i class="fas fa-money-bill-alt"></i> Cash on Delivery</p>

      </div>
    </div>

    <!-- Row-1 -->
    <div class="row mt-4 mb-4">
      <h3 class="text-left">Related Item</h3> <!-- TitleOf Item -->

      <div class="col-md-3">  <!-- TopBrand-1 -->
        <a href="{{url('/detail')}}">
          <div class="card shadow text-center">
            <div class="bg-image hover-overlay ripple" >
              <img src="./image/watch/applewatch.webp" class="img-fluid" style="height:200px"/>
              <a href="{{url('/detail')}}">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">I Watch</h5>
              <h5 class="card-title">$ 200.00</h5>
            </div>
          </div>
        </a>
      </div> <!-- End Of TopBrand-1 -->

      <div class="col-md-3">  <!-- Sam-2 -->
        <a href="{{url('/detail')}}">
          <div class="card shadow text-center">
            <div class="bg-image hover-overlay ripple" >
              <img src="./image/Laptop/Samsung_Laptop.jpg" class="img-fluid" style="height:200px"/>
              <a href="{{url('/detail')}}">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Samsung Laptop</h5>
              <h5 class="card-title">$ 745.00</h5>
            </div>
          </div>
        </a>
      </div> <!-- End Of Sam-2 -->

      <div class="col-md-3">  <!-- other-3 -->
        <a href="{{url('/detail')}}">
          <div class="card shadow text-center">
            <div class="bg-image hover-overlay ripple" >
              <img src="./image/phone/nokia.jpg" class="img-fluid" style="height:200px"/>
              <a href="{{url('/detail')}}">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Nokia</h5>
              <h5 class="card-title">$ 390.00</h5>
            </div>
          </div>
        </a>
      </div> <!-- End Of Other-3 -->

      <div class="col-md-3">  <!-- TopBrand-4 -->
        <a href="{{url('/detail')}}">
          <div class="card shadow text-center">
            <div class="bg-image hover-overlay ripple" >
              <img src="./image/Tablet/apple-ipad-5.jpg" class="img-fluid" style="height:200px"/>
              <a href="{{url('/detail')}}">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Ipad Air-5 Pro</h5>
              <h5 class="card-title">$ 325.00</h5>
            </div>
          </div>
        </a>
      </div> <!-- End Of TopBrand-4 -->
    </div>
  </section> 
@endsection