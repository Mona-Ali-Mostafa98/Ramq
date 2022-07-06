@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Update admin
                            <a href="{{ route('admin.admins.index') }}" class="ml-2 btn btn-primary">
                                Back</a>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Update admin</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-default">
                    @include('admin.layouts.errors')

                    <form method="POST" action="{{ route('admin.admins.update', $admin->id) }}">
                        @csrf
                        @method ('put')
                        <div class="mb-3 m-2">
                            <label class="form-label">Full Name</label>
                            <input name="name" type="text" class="form-control" value="{{ $admin->name }}">
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Email </label>
                            <input name="email" type="text" class="form-control" value="{{ $admin->email }}">
                        </div>
                        {{-- <div class="mb-3 m-2">
                            <label class="form-label">Password </label>
                            <input name="password" type="text" class="form-control" value="{{ $admin->password }}">
                        </div> --}}
                        <button type="submit" class="btn btn-success m-3">Update admin</button>

                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
