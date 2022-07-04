@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Show Product
                            <a href="{{ route('admin.products.index') }}" class="ml-2 btn btn-primary">
                                Back</a>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Show Product</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Details of {{ $product->name }} </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong class="card-title">Title : </strong>
                        <span class="card-text mr-2"> {{ $product->title }}</span>
                    </div>
                    <div class="card-body">
                        <strong class="card-title mt-4 mr-2">Image :</strong>
                        @foreach ($product->photes as $value)
                            <img src="{{ asset('images/products/' . $value->photo) }}"
                                style="height: 100px; width: 150px;">
                        @endforeach
                    </div>
                    <div class="card-body">
                        <strong class="card-title mr-2">Description :</strong>
                        <span class="card-text"> {{ $product->description }}</span>
                    </div>
                    <div class="card-body">
                        <strong class="card-title mr-2">Number Of Floors :</strong>
                        <span class="card-text"> {{ $product->number_of_floors }}</span>
                    </div>
                    <div class="card-body">
                        <strong class="card-title mr-2">Number Of Rooms :</strong>
                        <span class="card-text"> {{ $product->number_of_rooms }}</span>
                    </div>

                    <div class="card-body">
                        <strong class="card-title mr-2">Land Area :</strong>
                        <span class="card-text"> {{ $product->Land_area }}</span>
                    </div>

                    <div class="card-body">
                        <strong class="card-title mr-2">Price :</strong>
                        <span class="card-text"> {{ $product->price }}</span>
                    </div>

                    <div class="card-body">
                        <strong class="card-title mr-2">Designed By :</strong>
                        <span class="card-text"> {{ $product->designed_by }}</span>
                    </div>

                    <div class="card-body">
                        <strong class="card-title mr-2">Design Details :</strong>
                        <span class="card-text"> {{ $product->design_details }}</span>
                    </div>

                    <div class="card-body">
                        <strong class="card-title mr-2">Most Requested :</strong>
                        <span class="card-text"> {{ $product->most_requested }}</span>
                    </div>

                    <div class="card-body">
                        <strong class="card-title mr-2">Design Book :</strong>
                        <span class="card-text"> {{ $product->design_book }}</span>
                    </div>

                    <div class="card-body">
                        <strong class="card-title mr-2">Notes :</strong>
                        <span class="card-text"> {{ $product->notes }}</span>
                    </div>

                    <div class="card-body">
                        <strong class="card-title mr-2">Information :</strong>
                        @foreach ($product->informations as $value)
                            <span class="card-text"> {{ $value->information }}</span> <br>
                        @endforeach
                    </div>
                    <div class="card-body">
                        <strong class="card-title mr-2">Status :</strong>
                        <span class="card-text"> {{ $product->status }}</span>
                    </div>

                    <!-- /.card-body -->
                </div>

            </div>
        </section>
    </div>
@endsection
