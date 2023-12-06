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
          <h3 class="text-center">Apple Brand</h3> <!-- TitleOf Item -->

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
                  <a href="{{url('/cart')}}" class="btn btn-primary">Add to Cart</a>
                </div>
              </div>
            </a>
          </div> <!-- End Of TopBrand-1 -->

          <div class="col-md-3">  <!-- TopBrand-2 -->
            <a href="{{url('/detail')}}">
              <div class="card shadow text-center">
                <div class="bg-image hover-overlay ripple" >
                  <img src="./image/Laptop/Apple_MacBook-Pro_14.jpg" class="img-fluid" style="height:200px"/>
                  <a href="{{url('/detail')}}">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">DELL XPS-15</h5>
                  <h5 class="card-title">$ 745.00</h5>
                  <a href="{{url('/detail')}}" class="btn btn-primary">Add to Cart</a>
                </div>
              </div>
            </a>
          </div> <!-- End Of TopBrand-2 -->

          <div class="col-md-3">  <!-- TopBrand-3 -->
            <a href="{{url('/detail')}}">
              <div class="card shadow text-center">
                <div class="bg-image hover-overlay ripple" >
                  <img src="./image/phone/iPhone-14.webp" class="img-fluid" style="height:200px"/>
                  <a href="{{url('/detail')}}">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">iPhone-14</h5>
                  <h5 class="card-title">$ 225.00</h5>
                  <a href="{{url('/cart')}}" class="btn btn-primary">Add to Cart</a>
                </div>
              </div>
            </a>
          </div> <!-- End Of TopBrand-3 -->

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
                  <a href="{{url('/cart')}}" class="btn btn-primary">Add to Cart</a>
                </div>
              </div>
            </a>
          </div> <!-- End Of TopBrand-4 -->
        </div>

        <!-- Row-2 -->
        <div class="row mt-4">
          <h3 class="text-center">Samsung Brand</h3> <!-- TitleOf Item -->

          <div class="col-md-3">  <!-- Sam-1 -->
            <a href="{{url('/detail')}}">
              <div class="card shadow text-center">
                <div class="bg-image hover-overlay ripple" >
                  <img src="./image/watch/samsung_Glaxy_Watch.jpg" class="img-fluid" style="height:200px"/>
                  <a href="{{url('/detail')}}">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Samsung Glaxy Watch</h5>
                  <h5 class="card-title">$ 200.00</h5>
                  <a href="{{url('/cart')}}" class="btn btn-primary">Add to Cart</a>
                </div>
              </div>
            </a>
          </div> <!-- End Of Sam-1 -->

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
                  <a href="{{url('/cart')}}" class="btn btn-primary">Add to Cart</a>
                </div>
              </div>
            </a>
          </div> <!-- End Of Sam-2 -->

          <div class="col-md-3">  <!-- sam-3 -->
            <a href="{{url('/detail')}}">
              <div class="card shadow text-center">
                <div class="bg-image hover-overlay ripple" >
                  <img src="./image/phone/samsung-galaxy-f.jpg" class="img-fluid" style="height:200px"/>
                  <a href="{{url('/detail')}}">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Samsung Glaxy F</h5>
                  <h5 class="card-title">$ 390.00</h5>
                  <a href="{{url('/cart')}}" class="btn btn-primary">Add to Cart</a>
                </div>
              </div>
            </a>
          </div> <!-- End Of sam-3 -->

          <div class="col-md-3">  <!-- sam-4 -->
            <a href="{{url('/detail')}}">
              <div class="card shadow text-center">
                <div class="bg-image hover-overlay ripple" >
                  <img src="./image/Tablet/Samsung_Glaxy_Tab.jpg" class="img-fluid" style="height:200px"/>
                  <a href="{{url('/detail')}}">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Samsung Glaxy Tab</h5>
                  <h5 class="card-title">$ 325.00</h5>
                  <a href="{{url('/cart')}}" class="btn btn-primary">Add to Cart</a>
                </div>
              </div>
            </a>
          </div> <!-- End Of sam-4 -->


          <!-- Row-3 -->
        <div class="row mt-4">
          <h3 class="text-center">Other Brand</h3> <!-- TitleOf Item -->

          <div class="col-md-3">  <!-- other-1 -->
            <a href="{{url('/detail')}}">
              <div class="card shadow text-center">
                <div class="bg-image hover-overlay ripple" >
                  <img src="./image/watch/Rolax-1.jpg" class="img-fluid" style="height:200px"/>
                  <a href="{{url('/detail')}}">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Rolax Watch</h5>
                  <h5 class="card-title">$ 200.00</h5>
                  <a href="{{url('/cart')}}" class="btn btn-primary">Add to Cart</a>
                </div>
              </div>
            </a>
          </div> <!-- End Of other-1 -->

          <div class="col-md-3">  <!-- other-2 -->
            <a href="{{url('/detail')}}">
              <div class="card shadow text-center">
                <div class="bg-image hover-overlay ripple" >
                  <img src="./image/Laptop/MSI.jpg" class="img-fluid" style="height:200px"/>
                  <a href="{{url('/detail')}}">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">MSI Laptop</h5>
                  <h5 class="card-title">$ 745.00</h5>
                  <a href="{{url('/cart')}}" class="btn btn-primary">Add to Cart</a>
                </div>
              </div>
            </a>
          </div> <!-- End Of other-2 -->

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
                  <a href="{{url('/cart')}}" class="btn btn-primary">Add to Cart</a>
                </div>
              </div>
            </a>
          </div> <!-- End Of Other-3 -->

          <div class="col-md-3">  <!-- other-4 -->
            <a href="{{url('/detail')}}">
              <div class="card shadow text-center">
                <div class="bg-image hover-overlay ripple" >
                  <img src="./image/Tablet/OSE_Tablet.jpg" class="img-fluid" style="height:200px"/>
                  <a href="{{url('/detail')}}">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">OSE</h5>
                  <h5 class="card-title">$ 100.00</h5>
                  <a href="{{url('/cart')}}" class="btn btn-primary">Add to Cart</a>
                </div>
              </div>
            </a>
          </div> <!-- End Of other-4 -->

  </section>
  @endsection