@extends('layouts.main')
@section('title', 'ReStyle Register | Page')

@section('content')
<div class="container"><br>
    <section class="" style="background-color: #476281;">
        <div class="container py-10">
            <div class="row d-flex justify-content-center align-items-center h-50">
                <div class="col col-xl-11   ">
                    <div class="card" style="border-radius: 4rem;">
                        <div class="row g-6">
                            <div class="col-md-2 col-lg-5 d-md-block mt-5">
                                <img src="https://img.pikbest.com/png-images/20191028/little-boy-pushing-a-shopping-cart-to-buy-things-gif_2515305.png!bw700"
                                    alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center"><br>

        <form action="/auth/register" method="POST">
            @csrf
            <div class="d-flex align-items-center mb-3 pb-1">
            </div>
            <br>
            <div class="d-flex align-items-center mb-3 pb-1">
                <i style="color: #ff6219;"></i>
                <span class="h1 fw-bold"> ReStyle Fourteen</span>
            </div>
            <br>
            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Create your account
            </h5>
            {{-- Regist Name --}}
            <div class="mb-3">
                <input type="name" id="name" class="form-control @error('name') is-invalid @enderror"
                    placeholder="Name" name="name" value="{{ Session::get('name') }}" />
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Regist Email -->
            <div class="mb-3">
                <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                    placeholder="Email" name="email" value="{{ Session::get('email') }}" />
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Regist Password -->
            <div class="mb-3">
                <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
                    placeholder="Password" name="password" />
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- Button --}}

            <div class="pt-1 mb-4">
                <button class="btn btn-dark" type="submit">Register</button>
            </div>
            <p class="mb-5 pb-lg-2" style="color: #393f81;">Already have an account? <a
                    href="login" style="color: #393f81;">LogIn here</a></p><br><br>
            </div>
        </form>
    </div>
@endsection
