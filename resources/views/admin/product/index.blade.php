@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="text-center">
            <a href="{{ route('admin.products.create') }}" class="mt-4 btn btn-success">Create Product</a>
        </div>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1> Product Table</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"> Product Table</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"> Products</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right"
                                            placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Title</th>
                                            {{-- <th scope="col" style="width:20%">Description</th> --}}
                                            <th scope="col">Images</th>
                                            {{-- <th scope="col">No Of Floors</th> --}}
                                            {{-- <th scope="col">No Of Rooms</th> --}}
                                            {{-- <th scope="col">Land Area</th> --}}
                                            <th scope="col">Price</th>
                                            <th scope="col">Designed By</th>
                                            <th scope="col" style="width:35%">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <th scope="row">{{ $product->id }}</th>
                                                <td>{{ $product->title }}</td>
                                                {{-- <td>{{ $product->description }}</td> --}}
                                                <td>
                                                    @foreach ($product->photes as $key => $value)
                                                        <img src="{{ asset('images/products/' . $value->photo) }}"
                                                            style="height: 100px; width: 150px;" alt="">
                                                    @endforeach
                                                </td>
                                                {{-- <td>{{ $product->number_of_floors }}</td>
                                                <td>{{ $product->number_of_rooms }}</td>
                                                <td>{{ $product->Land_area }}</td>
                                                <td>{{ $product->price }}</td> --}}
                                                <td>{{ $product->designed_by }}</td>
                                                <td class="row">
                                                    <a href="{{ route('admin.products.show', $product->id) }}"
                                                        class="col-2 mr-2 btn btn-success">View</a>

                                                    <a href="{{ route('admin.products.edit', $product->id) }}"
                                                        class="col-2 me-5 btn btn-primary">Edit</a>

                                                    <form class="col-2" method="post"
                                                        action="{{ route('admin.products.destroy', $product->id) }}">
                                                        @csrf
                                                        @method ('delete')
                                                        <button type="submit" class="btn btn-danger "
                                                            onclick="return confirm('Are you sure you to delete this record from Database?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>

            </div>
        @endsection
