@extends('admin.master')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mla mb-2 text-gray-800">Slider/<span class="h5 mb-2 text-gray-600">All Slider</span></h1>


        <div class="container">

            <div class="align-items-center">
                <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <h2 class="tm-block-title d-inline-block">Edit Slider</h2>
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
                                <form action="{{ route('banner.update', $banner->id) }}" method="POST">
                                    @csrf
                                    @method('patch')
                                    <div class="form-group mb-3">
                                        <label for="">Slider Name
                                        </label>
                                        <input id="name" name="title" placeholder="Title" value="{{ $banner->title }}"
                                            type="text" class="form-control validate">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">slug
                                        </label>
                                        <input id="name" name="slug"
                                            placeholder="https://youtube.com 'Plz enter link if only needed'"
                                            value="{{ $banner->slug }}" type="text" class="form-control validate">
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
                                                        value="{{ $banner->photo }}">
                                                </div>
                                                <div id="holder" style="margin-top:15px;max-height:100px;"> </div>
                                            </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Description</label>
                                        <textarea id="summernote" class="form-control validate" rows="10" name="description"
                                            placeholder="Write some text..."
                                            spellcheck="false">{{ $banner->description }}</textarea>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Condition <span class="text-danger">*</span></label>
                                        <select name="condition" class="custom-select tm-select-accounts" id="category">
                                            <option selected="">{{ $banner->condition }}</option>
                                            <option value="slider" {{ old('condition') == 'slider' ? 'selected' : '' }}>
                                                Slider
                                            </option>
                                            <option value="accreditions"
                                                {{ old('condition') == 'accreditions' ? 'selected' : '' }}>
                                                Accreditions
                                            </option>
                                            <option value="university"
                                                {{ old('condition') == 'university' ? 'selected' : '' }}>
                                                University
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
