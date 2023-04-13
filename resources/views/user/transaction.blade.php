@extends('layouts.main')
@section('title', 'ReStyle Transaction | Page')
@section('content')
    <div class="container mt-5 px-2">
        <div class="table-responsive mt-5">
            <table class="table table-responsive table-bordered">

                <thead>
                    <tr class="bg-light">
                        {{-- <th scope="col" colspan="2"></th> --}}
                        <th>No</th>
                        <th scope="col">Product</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col">Transactions Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($carts as $item)
                        <tr>
                            <td> {{ $no++ }} </td>
                            {{-- <th colspan="2"><input class="form-check-input" type="checkbox"></th> --}}
                            <td><strong>{{ $item->product->name }}</strong></td>
                            <td>{{ $item->qty }}</td>
                            <td>Rp. {{ number_format($item->product->price) }},-</td>
                            <td>Rp. {{ number_format($item->product->price * $item->qty) }},-</td>
                            <td>{{ $item->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="bg-light border rounded px-3 py-3 d-flex justify-content-center">
                <tr>
                    <td><b>Total Spending : Rp. {{ number_format($total) }},-</b></td>
                </tr>
            </div>

        </div>

    </div>
@endsection
