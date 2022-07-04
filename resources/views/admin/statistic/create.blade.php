@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Statistic
                            <a href="{{ route('admin.statistics.index') }}" class="ml-2 btn btn-primary">
                                Back</a>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Create Statistic</li>
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

                    <form method="POST" action="{{ route('admin.statistics.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 m-2">
                            <label class="form-label">Title</label>
                            <input name="title" type="text" class="form-control">
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Counter</label>
                            <input name="counter" type="text" class="form-control">
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="show" selected>Show</option>
                                <option value="hide">Hide</option>
                            </select>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-success m-3">Create Statistic</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
