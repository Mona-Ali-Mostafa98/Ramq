@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Update Partner
                            <a href="{{ route('admin.partners.index') }}" class="ml-2 btn btn-primary">
                                Back</a>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Update Partner</li>
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

                    <form method="POST" action="{{ route('admin.partners.update', $partner->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method ('put')
                        <div class="mb-3 m-2">
                            <label class="form-label">Partner Name</label>
                            <input name="partner_name" type="text" class="form-control"
                                value="{{ $partner->partner_name }}">
                        </div>

                        <div class="col mb-3">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option value="show" @if ($partner->status == 'show') selected @endif>Show</option>
                                    <option value="hide" @if ($partner->status == 'hide') selected @endif>Hide</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 m-2 ">
                            <label for="formFile" class="form-label mr-4">Image</label>
                            <img id="image" src="{{ asset('images/partners/' . $partner->image) }}"
                                style="height: 100px; width: 150px;">
                            <label for="InputImage" class="form-label  btn btn-secondary m-3">Upload Another Image</label>
                            <input name="image" class="form-control mr-5 mt-2" type="file"
                                accept="image/png, image/gif, image/jpeg" id="InputImage" onchange="readImageURL(this)"
                                hidden>
                        </div>


                        <button type="submit" class="btn btn-success m-3">Update Partner</button>

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
