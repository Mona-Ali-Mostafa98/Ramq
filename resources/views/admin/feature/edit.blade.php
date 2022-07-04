@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Update Feature
                            <a href="{{ route('admin.features.index') }}" class="ml-2 btn btn-primary">
                                Back</a>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Update Feature</li>
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

                    <form method="POST" action="{{ route('admin.features.update', $feature->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method ('put')
                        <div class="mb-3 m-2">
                            <label class="form-label">Title</label>
                            <input name="title" type="text" class="form-control" value="{{ $feature->title }}">
                        </div>

                        <div class="mb-3 m-2">
                            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $feature->description }}</textarea>
                        </div>

                        <div class="col mb-3">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option value="show" @if ($feature->status == 'show') selected @endif>Show</option>
                                    <option value="hide" @if ($feature->status == 'hide') selected @endif>Hide</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 m-2 ">
                            <label for="formFile" class="form-label mr-4">Upload Image</label>
                            <img src="{{ asset('images/features/' . $feature->image) }}"
                                style="height: 100px; width: 150px;">
                            <input name="image" class="form-control mt-3" type="file" placeholder="image">
                        </div>


                        <button type="submit" class="btn btn-success m-3">Update Feature</button>

                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
