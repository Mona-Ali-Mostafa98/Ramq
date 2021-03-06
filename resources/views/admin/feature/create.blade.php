@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Feature
                            <a href="{{ route('admin.features.index') }}" class="ml-2 btn btn-primary">
                                Back</a>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Create Feature</li>
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

                    <form method="POST" action="{{ route('admin.features.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 m-2">
                            <label class="form-label">Title :</label>
                            <input name="title" type="text" class="form-control">
                        </div>

                        <div class="mb-3 m-2">
                            <label class="form-label">Description :</label>
                            <textarea name="description" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="col mb-3">
                            <!-- select -->
                            <div class="form-group">
                                <label>Status : </label>
                                <select name="status" class="form-control">
                                    <option value="show" selected>Show</option>
                                    <option value="hide">Hide</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 m-2">
                            <label for="formFile" class="form-label">Feature Image : </label>
                            <label for="InputImage" class="form-label  btn btn-secondary m-3">Upload Image</label>
                            <input name="image" class="form-control mr-5 mt-2" type="file"
                                accept="image/png, image/gif, image/jpeg" id="InputImage" onchange="readImageURL(this)"
                                hidden>
                            <img id="image" src="#" alt="no new images uploaded"
                                style="height: 100px; width: 150px;" />
                        </div>

                        <div class="text-center">
                            <button class="btn btn-success m-3">Create Slider</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
<script>
    function readImageURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#image').attr('src', e.target.result).width(150).height(100);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
