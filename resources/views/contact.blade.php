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


    <!-- Cart Body -->
    <section class="container mt-5 mb-3">
        <h3 class="text-center text-uppercase" >Contact Us</h3>
        <p class="text-center">Welcome To Our Website</p>
        <div class="row"> <!-- row-1 -->
            <div class="col-md-3">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <i class="fas fa-phone fa-3x mb-3"></i>
                        <h3>Call Us</h3>
                        <p>+95-926xxxxxxx,987xxxxxxx</p>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <i class="fas fa-map-marker-alt fa-3x mb-3"></i>
                        <h3>Office Location</h3>
                        <p>No.56, Middle St, Yangon</p>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <i class="fas fa-envelope-open-text fa-3x mb-3"></i>
                        <h3>Email</h3>
                        <p>mp1.info@gmail.com</p>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0">
                    <div class="card-body text-center">
                        <i class="fas fa-clock fa-3x mb-3"></i>
                        <h3>Office Time</h3>
                        <p>9:00 AM ~ 5:00 PM</p>

                    </div>
                </div>
            </div>
        </div><!-- End row-1 -->

        <div class="row mt-4"> <!-- row-2 -->
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3517.6265806645124!2d96.16912009033683!3d16.81084118056601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ecb6e32dddc5%3A0x4ada44a13abf5acf!2sOcean%20Super%20Center!5e0!3m2!1sen!2smm!4v1682671570737!5m2!1sen!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-6">
                <form class="mt-5">
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                      <input type="text" id="form4Example1" class="form-control" style="border:1px solid grey" />
                      <label class="form-label" for="form4Example1">Name</label>
                    </div>
                  
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                      <input type="email" id="form4Example2" class="form-control" style="border:1px solid grey" />
                      <label class="form-label" for="form4Example2">Email address</label>
                    </div>
                  
                    <!-- Message input -->
                    <div class="form-outline mb-4">
                      <textarea class="form-control" id="form4Example3" rows="4" style="border:1px solid grey"></textarea>
                      <label class="form-label" for="form4Example3">Message</label>
                    </div>
                  
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
                  </form>
            </div>
        </div><!-- End row-2 -->

    </section> <!--End Of ContainerSection -->


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
    © 2023 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">mp1.com</a>
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