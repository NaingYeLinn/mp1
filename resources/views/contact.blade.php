@extends('layouts.home-app')
@section('content')


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
                <form class="mt-5" method="post" action="{{url('/contact-us')}}">
                    @csrf
                    <!-- Name input -->
                    @error('name') <!-- Checking and showing validate error -->
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-outline mb-4">
                      <input type="text" name="name" id="form4Example1" class="form-control" style="border:1px solid grey" />
                      <label class="form-label" for="form4Example1">Name</label>
                    </div>
                  
                    <!-- Email input -->
                    @error('email') <!-- Checking and showing validate error -->
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <div class="form-outline mb-4">
                      <input type="email" name="email" id="form4Example2" class="form-control" style="border:1px solid grey" />
                      <label class="form-label" for="form4Example2">Email address</label>
                    </div>
                    
                    @error('message') <!-- Checking and showing validate error -->
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    <!-- Message input -->
                    <div class="form-outline mb-4">
                      <textarea class="form-control" name="message" id="form4Example3" rows="4" style="border:1px solid grey"></textarea>
                      <label class="form-label" for="form4Example3">Message</label>
                    </div>
                  
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
                  </form>
            </div>
        </div><!-- End row-2 -->

    </section> <!--End Of ContainerSection -->

@endsection