@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Update Statistic
                            <a href="{{ route('admin.statistics.index') }}" class="ml-2 btn btn-primary">
                                Back</a>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Update Statistic</li>
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

                    <form method="POST" action="{{ route('admin.statistics.update', $statistic->id) }}">
                        @csrf
                        @method ('put')
                        <div class="mb-3 m-2">
                            <label class="form-label">Title</label>
                            <input name="title" type="text" class="form-control" value="{{ $statistic->title }}">
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Counter </label>
                            <input name="counter" type="text" class="form-control" value="{{ $statistic->counter }}">
                        </div>
                        <div class="col mb-3 ">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option value="show" @if ($statistic->status == 'show') selected @endif>show</option>
                                    <option value="hide" @if ($statistic->status == 'hide') selected @endif>hide</option>
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success m-3">Update Statistic</button>

                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
