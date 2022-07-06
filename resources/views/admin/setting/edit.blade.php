@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Setting
                            <a href="{{ route('admin.settings.index') }}" class="ml-2 btn btn-primary">
                                Back</a>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Update Setting</li>
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

                    <form method="POST" action="{{ route('admin.settings.update', $setting->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method ('put')
                        <div class="mb-3 m-2">
                            <label class="form-label mr-4">Current Logo :</label>
                            <img id="blah" src="{{ asset('images/settings/' . $setting->logo) }}"
                                style="height: 100px; width: 150px;">
                            <label for="logo" class="form-label  btn btn-secondary m-3">Upload Another Logo</label>
                            <input name="logo" class="form-control mr-5 mt-2" type="file" id="logo"
                                onchange="readLogoURL(this)" hidden>
                        </div>
                        <div class="mb-3
                                m-2">
                            <label class="form-label">Title : </label>
                            <input name="title" type="text" class="form-control" value="{{ $setting->title }}">
                        </div>

                        <div class="mb-3 m-2">
                            <label class="form-label">Description : </label>
                            <textarea name="description" class="form-control" rows="3">{{ $setting->description }}</textarea>
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Address : </label>
                            <input name="address" type="text" class="form-control" value="{{ $setting->address }}">
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Phone : </label>
                            @foreach ($setting->phones as $key => $value)
                                <input name="phone[]" type="text" class="form-control mb-2"
                                    value="{{ $value->phone }}">
                            @endforeach
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Email : </label>
                            <input name="email" type="text" class="form-control" value="{{ $setting->email }}">
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Commercial Registration No : </label>
                            <input name="commercial_registration_no" type="text" class="form-control"
                                value="{{ $setting->commercial_registration_no }}">
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Tax Number : </label>
                            <input name="tax_number" type="text" class="form-control"
                                value="{{ $setting->tax_number }}">
                        </div>

                        <div class="col mb-3 m-2">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option value="show" @if ($setting->status == 'show') selected @endif>Show</option>
                                    <option value="hide" @if ($setting->status == 'hide') selected @endif>Hide</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 m-2 ">
                            <label for="formFile" class="form-label mr-2">Image : </label>

                            @foreach ($setting->photes as $value)
                                <img src="{{ asset('images/settings/' . $value->photo) }}"
                                    style="height: 100px; width: 150px;">
                            @endforeach
                            <label for="InputImage" class="form-label  btn btn-secondary m-3">Upload Another Images</label>
                            <input name="image[]" class="form-control mr-5 mt-2" type="file" id="InputImage"
                                onchange="readImageURL(this)" multiple hidden>
                            <img id="image" src="#" alt="no new images uploaded" />
                            {{-- <input name="image[]" class="form-control mt-3" type="file" placeholder="image" multiple> --}}
                        </div>
                        <div class="mb-3 m-2">
                            <label for="formFile " class="form-label mr-2">Uploded Video : </label>
                            <video id="video" controls="controls"
                                src="{{ asset('images/settings/' . $setting->video) }}" type="video/mp4" width="150px"
                                height="100px"></video>
                            <label for="InputVideo" class="form-label  btn btn-secondary m-3">Upload Another
                                Video</label>

                            <input name="video" onchange="readVideoURL(this)" accept=" video/*" class="form-control"
                                type="file" id="InputVideo" hidden>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-success m-3">Edit Setting</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
{{-- function to display image after uploded --}}
<script>
    function readLogoURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah').attr('src', e.target.result).width(150).height(100);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    function readImageURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#image').attr('src', e.target.result).width(150).height(100);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }


    function readVideoURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#video').attr('src', e.target.result).width(150).height(100);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
