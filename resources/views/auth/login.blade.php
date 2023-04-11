@extends('layouts.main')
@section('title', 'ReStyle Login | Page')
@section('content')

    <div class="w-50 center px-5 py-3 mx-auto">
        <h1>
            <center> Login Here</center>
        </h1>
        <div class="images-center">
            <img src="https://img.pikbest.com/png-images/20191028/e-commerce-shopping-festival-shopping-gif-animation_2515297.png!bw700"
                class="img-fluid" alt="Illustration Login">
        </div>
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

            <!-- Password input -->
            <div class="mb-3">
                <input type="password" id="email" class="form-control @error('password') is-invalid @enderror"
                    placeholder="Password" name="password" />
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- Button --}}
            <div class="text-center text-lg-start pt-2 btn-sm d-grid">
                <button type="submit" class="btn btn-dark "
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                <p class="fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register"
                        class="link-warning">Register</a>
                </p>
            </div>
        </form>
    </div>
@endsection
