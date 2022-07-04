@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Update discount code
                            <a href="{{ route('admin.codes.index') }}" class="ml-2 btn btn-primary">
                                Back</a>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Update Discount Code </li>
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

                    <form method="POST" action="{{ route('admin.codes.update', $code->id) }}">
                        @csrf
                        @method ('put')
                        <div class="mb-3 m-2">
                            <label class="form-label">Title</label>
                            <input name="title" type="text" class="form-control" value="{{ $code->title }}">
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Discount Code </label>
                            <input name="discount_code" type="text" class="form-control"
                                value="{{ $code->discount_code }}">
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">price </label>
                            <input name="price" type="text" class="form-control" value="{{ $code->price }}">
                        </div>
                        <div class="col mb-3 ">
                            <div class="form-group">
                                <label>Discount Type</label>
                                <select class="form-control" name="discount_type">
                                    <option value="Rial" @if ($code->discount_type == 'Rial') selected @endif>Rial</option>
                                    <option value="%" @if ($code->discount_type == '%') selected @endif>%</option>
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success m-3">Update discount codes</button>

                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
