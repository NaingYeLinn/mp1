@extends('layouts.home-app')
@section('content')
  <!-- slide Start -->
  <div>
  <section class="container-fluid">
    <div id="carouselExampleInterval" class="carousel slide" data-mdb-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-mdb-interval="2000">
      <img src="./image/Slide-1.webp" class="d-block w-100" style="height:300px" alt="Wild Landscape"/>
    </div>
    <div class="carousel-item" data-mdb-interval="2000">
      <img src="./image/slide-2.png" class="d-block w-100" style="height:300px" alt="Camera"/>
    </div>
    <div class="carousel-item" data-mdb-interval="2000">
      <img src="./image/slide-3.png" class="d-block w-100" style="height:300px" alt="Exotic Fruits"/>
    </div>
  </div>
  <button class="carousel-control-prev" data-mdb-target="#carouselExampleInterval" type="button" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" data-mdb-target="#carouselExampleInterval" type="button" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </section>
  </div>
  <!-- slide end -->

  


  <!-- body -->
  <section class="container">

        <!-- Row-1 -->
        <div class="row mt-4">
          <h3 class="text-center">BRANDED</h3> <!-- TitleOf Item -->
          @foreach($products as $product)
          <div class="col-md-3">  <!-- TopBrand-1 -->
            <a href="{{url('/detail/'.$product->id)}}">
              <div class="card shadow text-center">
                <div class="bg-image hover-overlay ripple" >
                  <img src="{{asset('storage/images/products/'.$product->photo)}}" class="img-fluid" style="height:200px"/>
                  <a href="{{url('/detail/'.$product->id)}}">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">{{$product->product_name}}</h5>
                  <h5 class="card-title">Price -${{$product->price}}</h5>
                  <a href="{{url('/cart')}}" class="btn btn-primary">Add to Cart</a>
                </div>
              </div>
            </a>
          </div> <!-- End Of TopBrand-1 -->
          @endforeach

        </div>


  </section>
  @endsection