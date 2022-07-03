@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Update Product
                            <a href="{{ route('admin.products.index') }}" class="ml-2 btn btn-primary">
                                Back</a>
                        </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Update Product</li>
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

                    <form method="POST" action="{{ route('admin.products.update', $product->id) }}" ,
                        enctype="multipart/form-data">
                        @csrf
                        @method ('put')
                        <div class="mb-3 m-2">
                            <label class="form-label">Title</label>
                            <input name="title" type="text" class="form-control" value="{{ $product->title }}">
                        </div>

                        <div class="mb-3 m-2 ">
                            <label for="formFile" class="form-label mr-2">Image : </label>
                            @foreach ($product->photes as $value)
                                <img src="{{ asset('images/products/' . $value->photo) }}"
                                    style="height: 100px; width: 150px;">
                            @endforeach
                            <label for="InputImage" class="form-label  btn btn-secondary m-3">Upload Another Images</label>
                            <input name="image[]" class="form-control mr-5 mt-2" type="file" id="InputImage"
                                onchange="readImageURL(this)" multiple hidden>
                            <img id="image" src="#" alt="no new images uploaded" />
                        </div>

                        <div class="mb-3 m-2">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="3">{{ $product->description }}</textarea>
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Number Of Floors</label>
                            <input name="number_of_floors" type="text" class="form-control"
                                value="{{ $product->number_of_floors }}">
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Number Of Rooms</label>
                            <input name="number_of_rooms" type="text" class="form-control"
                                value="{{ $product->number_of_rooms }}">
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Land Area</label>
                            <input name="Land_area" type="text" class="form-control" value="{{ $product->Land_area }}">
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Price</label>
                            <input name="price" type="text" class="form-control" value="{{ $product->price }}">
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Designed By</label>
                            <input name="designed_by" type="text" class="form-control"
                                value="{{ $product->designed_by }}">
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Design Details</label>
                            <textarea name="design_details" class="form-control" rows="3"> {{ $product->design_details }}</textarea>
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Designed information : </label>
                            @foreach ($product->informations as $key => $value)
                                <input name="information[]" type="text" class="form-control mb-2"
                                    value="{{ $value->information }}">
                            @endforeach
                        </div>
                        <div class="col mb-3 ">
                            <div class="form-group">
                                <label>Most Requested</label>
                                <select class="form-control" name="most_requested">
                                    <option value="True" @if ($product->most_requested == 'True') selected @endif>True</option>
                                    <option value="False" @if ($product->most_requested == 'False') selected @endif>False</option>
                                </select>
                            </div>
                        </div>
                        <div class="col mb-3 ">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option value="show" @if ($product->status == 'show') selected @endif>Show</option>
                                    <option value="hide" @if ($product->status == 'hide') selected @endif>Hide</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Design Book</label>
                            {{-- <input name="design_book" type="text" class="form-control" rows="3"
                                value="{{ $product->design_book }}"></input> --}}
                            <span>{{ $product->design_book }}</span>
                            <input name="design_book" class="form-control" type="file"
                                accept="application/pdf, application/vnd.ms-excel" />
                        </div>
                        <div class="mb-3 m-2">
                            <label class="form-label">Notes</label>
                            <textarea name="notes" class="form-control" rows="3">{{ $product->notes }}</textarea>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-success m-3">Update Product</button>
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
