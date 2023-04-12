@extends('layouts.main')
@section('title', 'ReStyle Cart | Page')
@section('content')
    <div class="container mt-5 px-2">
        <div class="table-responsive mt-5">
            <table class="table table-responsive table-borderless">

                <thead>
                    <tr class="bg-light">
                        {{-- <th scope="col" colspan="2"></th> --}}
                        <th>No</th>
                        <th scope="col">Product</th>
                        <th scope="col">Category</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                        <th scope="col">Subtotal</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($carts as $item)
                        <form action="{{ url("/cart/$item->id/edit") }}" method="POST">
                            @csrf
                            @method('PUT')
                            <tr>
                                <td> {{ $no++ }} </td>
                                {{-- <th colspan="2"><input class="form-check-input" type="checkbox"></th> --}}
                                <td><strong>{{ $item->product->name }}</strong></td>
                                <td>{{ $item->product->category->name }}</td>
                                <td>
                                    <input type="number" style="width:100px !important" value="{{ $item->qty }}"
                                        class="form-control w-10" size="20" name="qty">
                                </td>
                                <td>Rp. {{ number_format($item->product->price) }},-</td>
                                <td>Rp. {{ number_format($item->product->price * $item->qty) }},-</td>
                                <td>
                                    <button type="submit"  class="btn btn-warning"><i
                                        class=" fas fa-edit"></i>Edit</button>
                                    <a href="cart/{{ $item->id }}/delete" class="btn btn-xs btn-danger"
                                        onclick="return confirm('Are u Sure?');"><i
                                        class="fas fa-trash"></i>Delete</a>
                                </td>
                        </form>
                        </tr>
                    @endforeach
                    <tr>
                        <td>
                            <a href="{{ url('konfirmasi-check-out') }}" class="btn btn-success"
                                onclick="return confirm('Anda yakin akan Check Out ?');">
                                <i class="fa fa-shopping-cart"></i> Check Out
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>
@endsection
