@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="text-center">
            <a href="{{ route('admin.partners.create') }}" class="mt-4 btn btn-success">Create Partner</a>
        </div>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Partner Table</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Partner Table</li>
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
                                <h3 class="card-title">Partners</h3>

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
                                            <th scope="col">partner_name</th>
                                            <th scope="col">partner_photo</th>
                                            <th scope="col">status</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($partners as $partner)
                                            <tr>
                                                <th scope="row">{{ $partner->id }}</th>
                                                <td>{{ $partner->partner_name }}</td>
                                                <td> <img src="{{ asset('images/partners/' . $partner->image) }}"
                                                        style="height: 100px; width: 150px;" alt=""></td>
                                                <td>{{ $partner->status }}</td>

                                                <td class="row">
                                                    <a href="{{ route('admin.partners.show', $partner->id) }}"
                                                        class="col-2 mr-2 btn btn-success">View</a>

                                                    <a href="{{ route('admin.partners.edit', $partner->id) }}"
                                                        class="col-2 me-5 btn btn-primary">Edit</a>

                                                    <form class="col-2" method="post"
                                                        action="{{ route('admin.partners.destroy', $partner->id) }}">
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
