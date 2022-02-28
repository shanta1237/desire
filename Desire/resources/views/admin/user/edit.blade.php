@extends('admin.master')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mla mb-2 text-gray-800">User/<span class="h5 mb-2 text-gray-600">Add User</span></h1>


    <div class="container">

        <div class="align-items-center">
            <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <h2 class="tm-block-title d-inline-block">Add User</h2>
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
                            <form action="{{ route('user.update',$user->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group mb-3">
                                    <label for="">User Name
                                    </label>
                                    <input id="name" name="name" placeholder="User Name" value="{{ $user->name }}" type="text" class="form-control validate">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Full Name
                                    </label>
                                    <input id="name" name="full_name" placeholder="Full Name" value="{{ $user->full_name }}" type="text" class="form-control validate">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Email
                                    </label>
                                    <input id="email" name="email" placeholder="user@gmail.com" value="{{ $user->email }}" type="email" class="form-control validate">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Phone Number
                                    </label>
                                    <input id="name" name="phone" placeholder="987654123" value="{{ $user->phone }}" type="text" class="form-control validate">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Address
                                    </label>
                                    <input id="name" name="address" placeholder="Enter the Employee Address" value="{{ $user->address }}" type="text" class="form-control validate">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Facebook Link
                                    </label>
                                    <input id="name" name="facebook" placeholder="Enter the employee user facebook link" value="{{ $user->facebook }}" type="text" class="form-control validate">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Instagram Link
                                    </label>
                                    <input id="name" name="instagram" placeholder="Enter the employee user Instagram link" value="{{ $user->instagram }}" type="text" class="form-control validate">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">twitter Link
                                    </label>
                                    <input id="name" name="twitter" placeholder="Enter the employee user twitter link" value="{{ $user->twitter }}" type="text" class="form-control validate">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Employe Position
                                    </label>
                                    <input id="name" name="employe_status" placeholder="Enter the employee Position" value="{{ $user->employe_status }}" type="text" class="form-control validate">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">image
                                        <div>
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                        <i class="fa fa-picture-o"></i> Choose
                                                    </a>
                                                </span>
                                                <input id="thumbnail" class="form-control" type="text" name="photo">
                                            </div>
                                            <div id="holder" style="margin-top:15px;max-height:100px;"> </div>
                                        </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Description</label>
                                    <textarea id="summernote" class="form-control validate" rows="10" name="description" placeholder="Write some text..." spellcheck="false">{{ $user->description }}</textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="">Condition <span class="text-danger">*</span></label>
                                    <select name="condition" class="custom-select tm-select-accounts" id="category">
                                        <option selected="">---Show in home page---</option>
                                        <option value="yes" {{ old('condition') == 'yes' ? 'selected' : '' }}>
                                            Show in Teams Page
                                        </option>
                                        <option value="no" {{ old('condition') == 'accreditions' ? 'selected' : '' }}>
                                            Don't Show in Teams Page
                                        </option>
                                    </select>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-primary text-uppercase">Update</button>
                                    <button type="submit" class="btn btn-outline-secondary text-uppercase">Cancel</button>
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