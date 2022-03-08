@extends('admin.master')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mla mb-2 text-gray-800">Testimonials/<span class="h5 mb-2 text-gray-600">Edit testimonials</span></h1>


        <div class="container">

            <div class="align-items-center">
                <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <h2 class="tm-block-title d-inline-block">Edit Testimonials</h2>
                        </div>
                    </div>
                    <div class="row tm-edit-product-row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div>
                                <div class="col-md-12">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                                <form action="{{ route('testimonials.update', $testimonials->id) }}" method="POST">
                                    @csrf
                                    @method('patch')
                                    <div class="form-group mb-3">
                                        <label for="">Slider Name
                                        </label>
                                        <input id="name" name="name" placeholder="Name of the Student" value="{{ $testimonials->name }}"
                                            type="text" class="form-control validate">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">image
                                            <div>
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <a id="lfm" data-input="thumbnail" data-preview="holder"
                                                            class="btn btn-primary">
                                                            <i class="fa fa-picture-o"></i> Choose
                                                        </a>
                                                    </span>
                                                    <input id="thumbnail" class="form-control" type="text" name="photo"
                                                        value="{{ $testimonials->photo }}">
                                                </div>
                                                <div id="holder" style="margin-top:15px;max-height:100px;"> </div>
                                            </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Description</label>
                                        <textarea id="summernote" class="form-control validate" rows="10" name="desc"
                                            placeholder="Write some text..."
                                            spellcheck="false">{{ $testimonials->desc }}</textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Status <span class="text-danger">*</span></label>
                                        <select name="status" class="custom-select tm-select-accounts" id="category">
                                            <option selected="">---Status---</option>
                                            <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>
                                                Active
                                            </option>
                                            <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>
                                                Inactive
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary text-uppercase">Update</button>
                                        <button type="submit"
                                            class="btn btn-outline-secondary text-uppercase">Cancel</button>
                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $('#lfm').filemanager('file');
    </script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@endsection
