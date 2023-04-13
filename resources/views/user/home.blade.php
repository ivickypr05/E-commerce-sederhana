@extends('layouts.main')
@section('title', 'ReStyle Home | Page')
@section('content')
    {{-- row --}}
    <div class="container row mt-3">
        @foreach ($products as $items)
            {{-- col --}}
            <div class="mt-1 mb-5 col-md-3 col-20">
                {{-- card --}}
                <div class="card card-deck">
                    <img src="{{ asset('storage/' . $items->photo) }}" class="card-img-top" alt="...">
                    <div class="card-body">

                        <h5 class="card-title text-danger">{{ $items->name }}</h5>

                        @if ($items->category == null)
                            <h6 class="card-subtitle text-muted"><i>-Uncategory</i></h6>
                        @else
                            <h6 class="card-subtitle text-muted"><i>-{{ $items->category->name }}</i></h6>
                        @endif
                        <hr>
                        <h6 class="card-text md-5 small">{{ $items->description }}</h6>
                        <h5 class="d-flex text-success"><span class="ms-auto">Rp {{ number_format($items->price) }}</span>
                        </h5><p><br>
                        <form action="/tocart" method="post">
                            @csrf
                            <div class="row mt-3 justify-content-center">
                                <input type="hidden" name="product_id" value="{{ $items->id }}">
                                <div class="col-7">
                                    <label for="qty" class="form-label">Input Quantity</label>
                                    <input type="number" class="form-control" required name="qty">
                                </div>

                                <div class="row mt-2">
                                    <button type="submit" class="btn btn-primary ms-auto" role="button"><i
                                            class="fa-solid fa-cart-plus"></i> Add to Cart</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                {{-- end card --}}
            </div>
            {{-- end col --}}
        @endforeach
    </div>
    {{-- end row --}}
@endsection
