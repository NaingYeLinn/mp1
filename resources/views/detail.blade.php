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
        <i class="fas fa-bars"></i>
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
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Register</a>
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
            <a class="nav-link text-white" href="#">Login</a>
          </li>
        </ul>
      </div>
      <!-- Right elements -->

    </div>
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->

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

    <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>
</body>
</html>