@extends('admin.master')
@section('content')
    <div class="container-fluid">
        <h1 class="h3 mla mb-2 text-gray-800">User/<span class="h5 mb-2 text-gray-600">Edit User Account</span></h1>


        <div class="container">

            <div class="align-items-center">
                <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <h2 class="tm-block-title d-inline-block">Edit User Account</h2>
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
                                <form action="{{ route('adminupdate.account', $user->id) }}" method="post">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="">User Name
                                        </label>
                                        <input id="name" name="name" placeholder="User Name" value="{{ $user->name }}"
                                            type="text" class="form-control validate">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Full Name
                                        </label>
                                        <input id="name" name="full_name" placeholder="Full Name" value="{{ $user->full_name }}"
                                            type="text" class="form-control validate">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Email
                                        </label>
                                        <input id="email" name="email" placeholder="user@gmail.com" value="{{ $user->email }}"
                                            type="email" class="form-control validate" disabled>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Old Password
                                        </label>
                                        <input id="password" name="oldpassword" placeholder="*********" 
                                            type="password" class="form-control validate">
                                            @error('password')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">New Password
                                        </label>
                                        <input id="password" name="newpassword" placeholder="*********" 
                                            type="password" class="form-control validate">
                                            @error('newpassword')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Phone Number
                                        </label>
                                        <input id="name" name="phone" placeholder="987654123" value="{{ $user->phone }}"
                                            type="text" class="form-control validate">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Address
                                        </label>
                                        <input id="name" name="address" placeholder="Enter the Employee Address" value="{{ $user->address }}"
                                            type="text" class="form-control validate">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Facebook Link 
                                        </label>
                                        <input id="name" name="facebook" placeholder="Enter the employee user facebook link" value="{{ $user->facebook }}"
                                            type="text" class="form-control validate">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">Instagram Link 
                                        </label>
                                        <input id="name" name="instagram" placeholder="Enter the employee user Instagram link" value="{{ $user->instagram }}"
                                            type="text" class="form-control validate">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="">twitter Link 
                                        </label>
                                        <input id="name" name="twitter" placeholder="Enter the employee user twitter link" value="{{ $user->twitter }}"
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
                                              <input id="thumbnail" class="form-control" type="text" name="photo" value="{{ $user->photo }}">
                                            </div>
                                            <div id="holder" style="margin-top:15px;max-height:100px;"> </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary text-uppercase">Submit</button>
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
