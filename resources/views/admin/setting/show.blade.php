@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Show Setting
                            <a href="{{ route('admin.settings.index') }}" class="ml-2 btn btn-primary">
                                Back</a>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Show Setting</li>
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
                        <h3 class="card-title">Details of {{ $setting->title }} </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong class="card-title mr-2">Logo :</strong>
                        <span class="card-text"> <img src="{{ asset('images/settings/' . $setting->logo) }}"
                                style="height: 100px; width: 150px;"></span>
                    </div>
                    <div class="card-body">
                        <strong class="card-title">Title :</strong>
                        <span class="card-text mr-2"> {{ $setting->title }}</span>
                    </div>
                    <div class="card-body">
                        <strong class="card-title mr-2">Description :</strong>
                        <span class="card-text"> {{ $setting->description }}</span>
                    </div>
                    <div class="card-body">
                        <strong class="card-title mr-2">Address :</strong>
                        <span class="card-text"> {{ $setting->address }}</span>
                    </div>
                    <div class="card-body">
                        <strong class="card-title mr-2">Email :</strong>
                        <span class="card-text"> {{ $setting->email }}</span>
                    </div>
                    <div class="card-body">
                        <strong class="card-title mr-2">Phone :</strong>
                        <span class="card-text"> {{ $setting->phone }}</span>
                    </div>
                    <div class="card-body">
                        <strong class="card-title mr-2">Commercial Registration No :</strong>
                        <span class="card-text"> {{ $setting->commercial_registration_no }}</span>
                    </div>
                    <div class="card-body">
                        <strong class="card-title mr-2">Tax Number :</strong>
                        <span class="card-text"> {{ $setting->tax_number }}</span>
                    </div>
                    <div class="card-body">
                        <strong class="card-title mr-2">Status :</strong>
                        <span class="card-text"> {{ $setting->status }}</span>
                    </div>
                    <div class="card-body">
                        <strong class="card-title mt-4 mr-2">Image :</strong>
                        @foreach ($setting->photes as $value)
                            <img src="{{ asset('images/settings/' . $value->photo) }}"
                                style="height: 100px; width: 150px;">
                        @endforeach
                    </div>
                    <div class="card-body">
                        <strong class="card-title mt-5 mr-2">Video :</strong>
                        <video id="video" controls="controls" src="{{ asset('images/settings/' . $setting->video) }}"
                            type="video/mp4" width="150px" height="100px"></video>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
        </section>
    </div>
@endsection
