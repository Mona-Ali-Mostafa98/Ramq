@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Show Cart
                            <a href="{{ route('admin.users.show', $user->id) }}" class="ml-2 btn btn-primary">
                                Back</a>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Show Cart</li>
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
                        <h3 class="card-title">Cart of User : {{ $user->name }} </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        @foreach ($carts as $cart)
                            <div class="mb-3">
                                <strong class="mr-2">Sold Product :</strong>
                                <a href="{{ route('admin.products.show', $cart->product->id) }}"
                                    class="card-text mr-2 mb-3">{{ $cart->product->title }} </a>
                            </div>
                            <div class="mb-1">
                                <strong> Buyer information :</strong>
                                <div class="card-body">
                                    <strong class="card-title">Full Name :</strong>
                                    <span class="card-text mr-2"> {{ $cart->full_name }}</span>
                                </div>
                                <div class="card-body">
                                    <strong class="card-title mr-2">Email :</strong>
                                    <span class="card-text"> {{ $cart->email }}</span>
                                </div>
                                <div class="card-body">
                                    <strong class="card-title mr-2">Phone :</strong>
                                    <span class="card-text"> {{ $cart->phone }}</span>
                                </div>
                                <div class="card-body">
                                    <strong class="card-title mr-2">Id Number :</strong>
                                    <span class="card-text"> {{ $cart->id_number }}</span>
                                </div>
                                <div class="card-body">
                                    <strong class="card-title mr-2">Career :</strong>
                                    <span class="card-text"> {{ $cart->career }}</span>
                                </div>
                                <div class="card-body">
                                    <strong class="card-title mr-2">City :</strong>
                                    <span class="card-text"> {{ $cart->city->name }}</span>
                                </div>

                                <div class="card-body">
                                    <strong class="card-title mr-2">State :</strong>
                                    <span class="card-text"> {{ $cart->region->name }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
        </section>
    </div>
@endsection
