@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Show Favorite
                            <a href="{{ route('admin.users.show', $user->id) }}" class="ml-2 btn btn-primary">
                                Back</a>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Show Favorite</li>
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
                        <h3 class="card-title">Favorite Products of User : {{ $user->name }} </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @foreach ($favorites as $favorite)
                            <div class="mb-2">
                                <strong class="mr-2">{{ $favorite->product->id }} : </strong>
                                <a href="{{ route('admin.products.show', $favorite->product->id) }}"
                                    class="card-text mr-2 ">{{ $favorite->product->title }}</a>
                            </div>
                        @endforeach
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
        </section>
    </div>
@endsection
