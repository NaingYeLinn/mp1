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

  <!-- Container -->
  <section class="container">
    
    <div class="row">
    <form class="mt-5">
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