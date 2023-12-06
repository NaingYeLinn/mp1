@extends('layouts.home-app')
@section('content')
    <!-- Cart Body -->
    <section class="container mt-5 mb-5">
        <div class="row">
            <h3 class="text-start">Your Cart</h3>
            
            <!-- Card-1 -->
            <div class="col-md-12 mt-3">
                <div class="card shadow">
                    <div class="row">
                        <!-- image -->
                        <div class="col-md-3 mt-2 mb-1">
                            <img src="./image/watch/Rolax-1.jpg" style="height:150px; width:250px" alt="sample image url">
                        </div>
                        <!-- product description -->
                        <div class="col-md-4 mt-3">
                            <h5 class="text-primary">Rolex</h5>
                            <h5>Price- $1000</h5>
                            <p>Gray</p>
                        </div>
                        <!-- Amount -->
                        <div class="col-md-3">
                            <div>
                                <select class="form-select mt-5" aria-label="Default select example">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                        <!-- price Showing -->
                        <div class="col-md-2">
                            <p class="mt-5">Price- $1000.00  <i class="fas fa-trash-alt text-danger"></i> </p>  
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card-2 -->
            <div class="col-md-12 mt-3">
                <div class="card shadow">
                    <div class="row">
                        <!-- image -->
                        <div class="col-md-3 mt-2 mb-1">
                            <img src="./image/Laptop/Apple_MacBook-Pro_14.jpg" style="height:150px; width:250px" alt="sample image url">
                        </div>
                        <!-- product description -->
                        <div class="col-md-4 mt-3">
                            <h5 class="text-primary">Apple_MacBook-Pro_14</h5>
                            <h5>Price- $1000</h5>
                            <p>Gray</p>
                        </div>
                        <!-- Amount -->
                        <div class="col-md-3">
                            <div>
                                <select class="form-select mt-5" aria-label="Default select example">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                        <!-- price Showing -->
                        <div class="col-md-2">
                            <p class="mt-5">Price- $1000.00  <i class="fas fa-trash-alt text-danger"></i> </p>  
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card-3 -->
            <div class="col-md-12 mt-3">
              <div class="card shadow">
                  <div class="row">
                      <!-- image -->
                      <div class="col-md-3 mt-2 mb-1">
                          <img src="./image/phone/samsung-galaxy-f.jpg" style="height:150px; width:250px" alt="sample image url">
                      </div>
                      <!-- product description -->
                      <div class="col-md-4 mt-3">
                          <h5 class="text-primary">Samsung samsung-galaxy-f</h5>
                          <h5>Price- $1000</h5>
                          <p>Gray</p>
                      </div>
                      <!-- Amount -->
                      <div class="col-md-3">
                          <div>
                              <select class="form-select mt-5" aria-label="Default select example">
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                              </select>
                          </div>
                      </div>
                      <!-- price Showing -->
                      <div class="col-md-2">
                          <p class="mt-5">Price- $1000.00  <i class="fas fa-trash-alt text-danger"></i> </p>  
                      </div>
                  </div>
              </div>
          </div>
          <!-- End Card-3 -->

        </div>
        
        <!-- Total Amount -->
        <div class="row mt-4">
            <div class="col-md-6 text-start"><h5>Subtotal</h5></div>
            <div class="col-md-6 text-end text-warning"><p>$2000.00</p></div>
        </div>
       
        <!-- Button -->
        <div class="d-grid gap-2 mt-3">
            <button class="btn btn-info" type="button">Checkout</button>
          </div>

    </section>
    @endsection