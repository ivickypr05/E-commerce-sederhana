@extends('layouts.main')
@section('title', 'ReStyle Home | Page')
@section('content')
    {{-- row --}}
    <div class="row mt-3">
        @foreach ($products as $items)
            {{-- col --}}
            <div class="mt-2 mb-5 col-md-3 col-6">
                {{-- card --}}
                <div class="card card-deck">
                    <img src="{{ asset('storage/' . $items->photo) }}" class="card-img-top" alt="...">
                    <div class="card-body">

                        <h5 class="card-title">{{ $items->name }}</h5>

                        @if ($items->category == null)
                            <h6 class="card-subtitle text-muted"><i>-Uncategory</i></h6>
                        @else
                            <h6 class="card-subtitle text-muted"><i>-{{ $items->category->name }}</i></h6>
                        @endif

                        <p class="card-text">{{ $items->description }}</p>

                        <h5 class="d-flex text-danger"><span class="ms-auto">Rp {{ number_format($items->price) }}</span>
                        </h5>
                        <form action="" method="post">
                            @csrf
                            <div class="row mt-3 justify-content-center">
                                <input type="hidden" name="products_id" value="{{ $items->id }}">

                                <div class="col-6">
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
