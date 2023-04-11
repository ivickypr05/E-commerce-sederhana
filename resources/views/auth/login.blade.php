@extends('layouts.main')
@section('title', 'ReStyle Login | Page')

@section('content')
<div class="container"><br>
<section class="" style="background-color: #9A616D;">
    <div class="container py-10">
      <div class="row d-flex justify-content-center align-items-center h-50">
        <div class="col col-xl-11   ">
          <div class="card" style="border-radius: 4rem;">
            <div class="row g-6">
              <div class="col-md-2 col-lg-5 d-md-block mt-5">
                <img src="https://img.pikbest.com/png-images/20191028/little-girl-pushing-a-shopping-cart-to-buy-things-gif_2515300.png!bw700"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>   
              <div class="col-md-6 col-lg-7 d-flex align-items-center"><br> 
                  <form>
                    <div class="d-flex align-items-center mb-3 pb-1">
                    </div>
                    <br>
                    <div class="d-flex align-items-center mb-3 pb-1">
                        <i style="color: #ff6219;"></i>
                        <span class="h1 fw-bold"> ReStyle Fourteen</span>
                      </div>
                      <br>
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
    
                    <form action="/auth/login" method="POST">
                        @csrf
                        <!-- Email input -->
                        <div class="mb-3">
                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                                placeholder="Email" name="email" value="{{ Session::get('email') }}" />
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
  
                    <div class="mb-3">
                        <input type="password" id="email" class="form-control @error('password') is-invalid @enderror"
                            placeholder="Password" name="password" />
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
  
                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" type="button">Login</button>
                    </div>
                      <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="register"
                          style="color: #393f81;">Register here</a></p><br><br>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><br>
@endsection