@extends('admin.layout')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Product
                            <a href="{{ route('admin.products.index') }}" class="ml-2 btn btn-primary">
                                Back</a>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Create Product</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @include('admin.layouts.errors')
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 m-2">
                            <label class="form-label">Title</label>
                            <input name="title" type="text" class="form-control">
                        </div>

                        <div class="mb-3 m-2">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="3"></textarea>
                        </div>

                        <div class="mb-3 m-2">
                            <label class="form-label">Number Of Floors</label>
                            <input name="number_of_floors" type="text" class="form-control">
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Number Of Rooms</label>
                            <input name="number_of_rooms" type="text" class="form-control">
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Land Area</label>
                            <input name="Land_area" type="text" class="form-control"></input>
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Price</label>
                            <input name="price" type="text" class="form-control"></input>
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Designed By</label>
                            <input name="designed_by" type="text" class="form-control"></input>
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Design Details</label>
                            <textarea name="design_details" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Most Requested</label>
                            <select name="most_requested" class="form-control">
                                <option value="True" selected>True</option>
                                <option value="False">False</option>
                            </select>
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="show" selected>Show</option>
                                <option value="hide">Hide</option>
                            </select>
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Design Book</label>
                            {{-- <input name="design_book" type="text" class="form-control" rows="3"></input> --}}
                            <input name="design_book" class="form-control" type="file"
                                accept="application/pdf, application/vnd.ms-excel" />

                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Notes</label>
                            <textarea name="notes" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Design Information</label>
                            <textarea name="information" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="mb-3 m-2 ">
                            <label for="formFile" class="form-label mr-2">Image : </label>
                            <label for="InputImage" class="form-label  btn btn-secondary m-3">Upload Images</label>
                            <input name="image[]" class="form-control mr-5 mt-2" type="file" id="InputImage"
                                onchange="readImageURL(this)" multiple hidden>
                            <img id="image" src="#" alt="no new images uploaded"
                                style="height: 100px; width: 150px;" />
                            {{-- @foreach ($product->photes as $value)
                            @endforeach --}}
                        </div>
                        <div class="text-center">
                            <button class="btn btn-success m-3">Create Product</button>
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
