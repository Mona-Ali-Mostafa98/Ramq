@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Discount Code
                            <a href="{{ route('admin.codes.index') }}" class="ml-2 btn btn-primary">
                                Back</a>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Create Discount Code</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    @include('admin.layouts.errors')

                    <form method="POST" action="{{ route('admin.codes.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 m-2">
                            <label class="form-label">Title</label>
                            <input name="title" type="text" class="form-control" placeholder="Enter Your Name">
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Discount Code</label>
                            <input name="discount_code" type="text" class="form-control" placeholder="Enter Your Name">
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Price</label>
                            <input name="price" type="text" class="form-control" placeholder="Enter Your Name">
                        </div>

                        <div class="form-group mb-3 m-2">
                            <label class="form-label">Discount Type</label>
                            <select name="discount_type" class="form-control">
                                <option value="Rial" selected>Rial</option>
                                <option value="%">%</option>
                            </select>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-success m-3">Create Discount Code</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
