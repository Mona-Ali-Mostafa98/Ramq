@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create admin
                            <a href="{{ route('admin.admins.index') }}" class="ml-2 btn btn-primary">
                                Back</a>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Create admin</li>
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

                    <form method="POST" action="{{ route('admin.admins.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 m-2">
                            <label class="form-label">Full Name</label>
                            <input name="name" type="text" class="form-control" placeholder="Enter Your Name">
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Email</label>
                            <input name="email" type="text" class="form-control" placeholder="Enter Your Email">
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter Your Password">
                        </div>

                        <div class="text-center">
                            <button class="btn btn-success m-3">Create admin</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
