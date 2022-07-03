@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Update User
                            <a href="{{ route('admin.users.index') }}" class="ml-2 btn btn-primary">
                                Back</a>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Update User</li>
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

                    <form method="POST" action="{{ route('admin.users.update', $user->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method ('put')
                        <div class="mb-3 m-2">
                            <label class="form-label">Full Name</label>
                            <input name="name" type="text" class="form-control" value="{{ $user->name }}">
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Email </label>
                            <input name="email" type="text" class="form-control" value="{{ $user->email }}">
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Password </label>
                            <input name="password" type="text" class="form-control" value="{{ $user->password }}">
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Phone </label>
                            <input name="phone" type="text" class="form-control" value="{{ $user->phone }}">
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">City </label>
                            <input name="city" type="text" class="form-control" value="{{ $user->city }}">
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label"> State </label>
                            <input name="state" type="text" class="form-control" value="{{ $user->state }}">
                        </div>

                        <button type="submit" class="btn btn-success m-3">Update User</button>

                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
