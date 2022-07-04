@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Social Link
                            <a href="{{ route('admin.links.index') }}" class="ml-2 btn btn-primary">
                                Back</a>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Update Social Link</li>
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
                    <form method="POST" action="{{ route('admin.links.update', $link->id) }}">
                        @csrf
                        @method ('put')
                        <div class="mb-3 m-2">
                            <label class="form-label">Website Name</label>
                            <input name="website_name" type="text" class="form-control"
                                value="{{ $link->website_name }}">
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Website URL</label>
                            <input name="website_url" type="text" class="form-control"
                                value="{{ $link->website_url }}">
                        </div>
                        <div class="col mb-3 ">
                            <!-- select -->
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="1" selected>Show</option>
                                    <option value="2">Hide</option>
                                </select>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-success m-3">update Social link</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
