@extends('admin.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Setting Table</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Setting Table</li>
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
                                <h3 class="card-title">Settings</h3>

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
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">logo</th>
                                            <th scope="col">Title</th>
                                            {{-- <th scope="col">Description</th> --}}
                                            <th scope="col">Image</th>
                                            {{-- <th scope="col">Video</th> --}}
                                            <th scope="col">Phone</th>
                                            <th scope="col">Email</th>
                                            {{-- <th scope="col">Commercial Registration No</th> --}}
                                            {{-- <th scope="col">Tax Number</th> --}}
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($settings as $setting)
                                            <tr>
                                                <th scope="row">{{ $setting->id }}</th>
                                                <td><img src="{{ asset('images/settings/' . $setting->logo) }}"
                                                        style="height: 100px; width: 150px;" alt=""></td>
                                                <td>{{ $setting->title }}</td>
                                                {{-- <td>{{ $setting->description }}</td> --}}
                                                <td>
                                                    @foreach ($setting->photes as $key => $value)
                                                        <img src="{{ asset('images/settings/' . $value->photo) }}"
                                                            style="height: 100px; width: 150px;" alt="">
                                                    @endforeach
                                                </td>

                                                {{-- <td><video src="{{ asset('images/settings/' . $setting->video) }}"
                                                        style="height: 100px; width: 150px;"></video> </td> --}}
                                                <td>
                                                    @foreach ($setting->phones as $key => $value)
                                                        {{ $value->phone }} |
                                                    @endforeach
                                                </td>
                                                <td>{{ $setting->email }}</td>
                                                {{-- <td>{{ $setting->commercial_registration_no }}</td> --}}
                                                {{-- <td>{{ $setting->tax_number }}</td> --}}
                                                <td class="row">
                                                    <a href="{{ route('admin.settings.show', $setting->id) }}"
                                                        class="col-2 mr-2 btn btn-success">View</a>

                                                    <a href="{{ route('admin.settings.edit', $setting->id) }}"
                                                        class="col-2 me-5 btn btn-primary">Edit</a>

                                                    <form class="col-2" method="post"
                                                        action="{{ route('admin.settings.destroy', $setting->id) }}">
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
