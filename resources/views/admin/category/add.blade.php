@extends('layouts.dashboard')

@section('content')
        <a class="btn btn-dark mt-2" href="{{ Route('category') }}">
            <i class="fa fa-chevron-circle-left"></i> Back</a>
                <br><br>
                <h4>Welcome to the Add Category Page</h4>
                <p>Please fill in the data below!</p>
                <div class="col-lg-8">
                    <form action="{{url('/category')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Item Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name">
                            @error('name')
                                <div class=invalid-feedback>
                                    {{ $message }}
                                </div>
                            </div>
                        </div>
                        @enderror
                        <br>
                        <div class="container">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
@endsection
