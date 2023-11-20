<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOS-Shop</title>
    <link rel="icon" href="./image/WebIcon.png">

    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
  rel="stylesheet"
/>

</head>
<body>

    <!-- Nav Bar -->
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars text-white"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="{{url('/')}}">
     <span class="text-white">Future Online Shop  <i class="fas fa-shopping-cart"></i></span>
        </a>
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-white" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{url('/contact')}}">Contact</a>
          </li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->


        <!-- Search form -->
        <form class="input-group w-auto my-auto d-none d-sm-flex">
          <input
            autocomplete="off"
            type="search"
            class="form-control rounded"
            placeholder="Search"
            style="min-width: 125px;"
          />
          <span class="input-group-text border-0 d-none d-lg-flex"
            ><i class="text-white fas fa-search"></i
          ></span>
        </form>

  
      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <!-- Icon -->
        <a class="link-secondary me-3 text-white" href="{{url('/cart')}}">
          <i class="fas fa-shopping-cart"></i>
        </a>



             <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-white" data-mdb-toggle="modal" data-mdb-target="#loginModal">Login</a>
          </li>
        </ul>
      </div>
      <!-- Right elements -->

    </div>
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
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


<!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #3b5998;"
        href="#!"
        role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #55acee;"
        href="#!"
        role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #dd4b39;"
        href="#!"
        role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #ac2bac;"
        href="#!"
        role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #0082ca;"
        href="#!"
        role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>
      <!-- Github -->
      <a
        class="btn text-white btn-floating m-1"
        style="background-color: #333333;"
        href="#!"
        role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">FutureOnlineShop.com</a>
  </div>
  <!-- Copyright -->
</footer>



<!-- Start Modal -->

<!-- <button
  type="button"
  class="btn btn-primary"
  data-mdb-toggle="modal"
  data-mdb-target="#exampleModal"
  data-mdb-whatever="@fat"
>
  Open modal for @fat
</button>
<button
  type="button"
  class="btn btn-primary"
  data-mdb-toggle="modal"
  data-mdb-target="#exampleModal"
  data-mdb-whatever="@getbootstrap"
>
  Open modal for @getbootstrap
</button> -->

<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">LOGIN</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="email" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="email" />
          </div>
          <div class="mb-3">
            <label for="password" class="col-form-label">Password:</label>
            <input type="password" class="form-control" id="password" />
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-mdb-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->
    <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>
</body>
</html>