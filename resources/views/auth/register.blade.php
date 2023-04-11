@extends('layouts.main')
@section('title', 'ReStyle Register | Page')
@section('content')

    <div class="w-50 border rounded center px-5 py-3 mx-auto">
        <h1>
            <center> Register Here</center>
        </h1>
        <div class="images-center">
            <img src="https://img.pikbest.com/png-images/20191028/little-girl-pushing-a-shopping-cart-to-buy-things-gif_2515300.png!bw700"
                class="img-fluid" alt="Illustration Register">
        </div>
        <br>
        <form action="/auth/register" method="POST">
            @csrf

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
            <div class="text-center text-lg-start pt-2 btn-sm d-grid">
                <button type="submit" class="btn btn-dark "
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
                <p class="fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="login" class="link-warning">Login</a>
                </p>
            </div>
        </form>
    </div>
@endsection
