@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create region
                            <a href="{{ route('admin.regions.index') }}" class="ml-2 btn btn-primary">
                                Back</a>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Create region</li>
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

                    <form method="POST" action="{{ route('admin.regions.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 m-2">
                            <label class="form-label">Name</label>
                            <input name="name" type="text" class="form-control">
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">City</label>
                            <select name="city_id" class="form-control">
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-success m-3">Create region</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
