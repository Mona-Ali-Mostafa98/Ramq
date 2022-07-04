@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Show statistic
                            <a href="{{ route('admin.statistics.index') }}" class="ml-2 btn btn-primary">
                                Back</a>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Show statistic</li>
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
                        <h3 class="card-title">Details of {{ $statistic->title }} </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong class="card-title">Title :</strong>
                        <span class="card-text mr-2"> {{ $statistic->title }}</span>
                    </div>
                    <div class="card-body">
                        <strong class="card-title mr-2">Counter :</strong>
                        <span class="card-text"> {{ $statistic->counter }}</span>
                    </div>
                    <div class="card-body">
                        <strong class="card-title mr-2">Status :</strong>
                        <span class="card-text"> {{ $statistic->status }}</span>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
        </section>
    </div>
@endsection
