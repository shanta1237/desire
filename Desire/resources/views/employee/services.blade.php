@extends('employee.master')


@section('content')
<div class="container-fluid">
    <h1 class="h3 mla mb-2 text-gray-800">Dashboard/<span class="h5 mb-2 text-gray-600">Service pages</span></h1>


    <div class="container">

            <div class="align-items-center">
                <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <h2 class="tm-block-title d-inline-block">Service Page</h2>
                        </div>
                    </div>
                    <div class="row tm-edit-product-row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div>
                                <div class="col-md-12">
                                    @if($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    <li>{{$error}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                           <form action="{{ route('employeeservices.update') }}" method="POST">
                            @method('put')
                            @csrf
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
                                      <input id="thumbnail" class="form-control" type="text" name="photo" value="{{ $services->photo }}">
                                    </div>
                                    <div id="holder" img src="{{ $services->photo }}"
                                     style="margin-top:15px;max-height:100px;"> </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Description</label>
                                <textarea id="summernote" name ="offer_desc" class="form-control validate" rows="8" 
                                    placeholder="Write some text..."
                                    spellcheck="false">{{ $services->offer_desc }}</textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary text-uppercase">Update</button>
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