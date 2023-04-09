@extends('layouts.dashboard')
@section('title', 'ReStyle Create Category | Page')
@section('content')
    <div class="container">

        <a class="btn btn-dark mt-2" href="{{ Route('category') }}">
            <i class="fa fa-chevron-circle-left"></i> Back</a>
                <br>
                <p>
                <h4>Welcome to the Edit Category Page</h4>
                </p>
                <p>Please Edit in the data below!</p>
                <div class="col-lg-8">
                    <form method="post" action="/category/{{ $category->id }}" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Item Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ $category->name }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
            @endsection