@extends('layouts.dashboard')

@section('title', 'ReStyle Category | Page')
@section('content')

    <div class="row">
        <!-- <div class="col-md-4"> -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-tittle">
                    <center>This page is for updating, adding, and deleting Category.</center>
                </h3>
            </div>
            <div class="card-body">
                <nav>
                    <div class='justify-content-end'>
                        <a class="btn btn-success btn-md" href="/category/add"><i class="fa fa-plus"></i> Add
                            New Data</a>
                    </div>
                </nav>

                <table class="table table-bordered table-striped mt-1">
                    <thread>
                        <tr>
                            <th colspan="9">
                                <center>Category</center>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <center>No
                            </th>
                            <th>
                                <center>Category Name
                            </th>
                            <th>
                                <center>Actions
                            </th>
                        </tr>
                    </thread>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($categories as $item)
                            <tr>
                                <th>
                                    <center>{{ $no++ }}.</center>
                                </th>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <center>
                                        <a href="/category/{{ $item->id }}/edit" class="btn btn-xs btn-warning"><i
                                                class="fas fa-edit"></i></a>
                                        <a href="/category/{{ $item->id }}/delete" class="btn btn-xs btn-danger"
                                            onclick="return confirm('Are u Sure?');"><i class="fas fa-trash"></i></a>
                                    </center>
                                </td>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
@endsection
