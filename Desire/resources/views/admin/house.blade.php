@extends('admin.master')


@section('content')
<div class="container-fluid">
    <h1 class="h3 mla mb-2 text-gray-800">Dashboard/<span class="h5 mb-2 text-gray-600">Home pages</span></h1>


    <div class="container">

            <div class="align-items-center">
                <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                    <div class="row">
                        <div class="col-12 col-lg-4">
                            <h2 class="tm-block-title d-inline-block">Home Page</h2>
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
                           <form action="{{ route('house.update') }}" method="POST">
                            @method('put')
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">About Us Title
                                </label>
                                <input id="name" name="name" placeholder="Title" value="{{ $house->name }}"
                                    type="text" class="form-control validate">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">About us Description</label>
                                <textarea  name ="aboutdesc" class="form-control validate" rows="8" name="aboutdesc"
                                    placeholder="Write some text..."
                                    spellcheck="false">{{ $house->aboutdesc }}</textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">About Us Title 1
                                </label>
                                <input id="name" name="a1" placeholder="Title" value="{{ $house->a1 }}"
                                    type="text" class="form-control validate">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">About Us Title 2
                                </label>
                                <input id="name" name="a2" placeholder="Title" value="{{ $house->a2 }}"
                                    type="text" class="form-control validate">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">About Us Title 3
                                </label>
                                <input id="name" name="a3" placeholder="Title" value="{{ $house->a3 }}"
                                    type="text" class="form-control validate">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">About Us Title 4
                                </label>
                                <input id="name" name="a4" placeholder="Title" value="{{ $house->a4 }}"
                                    type="text" class="form-control validate">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">About Us Title 5
                                </label>
                                <input id="name" name="a5" placeholder="Title" value="{{ $house->a5 }}"
                                    type="text" class="form-control validate">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">About Us Title 6
                                </label>
                                <input id="name" name="a6" placeholder="Title" value="{{ $house->a6 }}"
                                    type="text" class="form-control validate">
                            </div>

                            <div class="form-group mb-3">
                                <label for="">About us Phone Number
                                </label>
                                <input id="name" name="aphone" placeholder="+977 987654123" value="{{ $house->aphone }}"
                                    type="text" class="form-control validate">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Apply now 
                                </label>
                                <input id="name" name="applynow" placeholder="Applynow" value="{{ $house->applynow }}"
                                    type="text" class="form-control validate">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Apply now question
                                </label>
                                <input id="name" name="applynowques" placeholder="Why to choose desire?" value="{{ $house->applynowques }}"
                                    type="text" class="form-control validate">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Apply now Answer</label>
                                <textarea name="applynowans" class="form-control validate" rows="8" name="missiondescription"
                                    placeholder="Write some text..." 
                                    spellcheck="false">{{ $house->applynowans }} </textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Abroad Focus
                                </label>
                                <input id="name" name="abroadfocus" placeholder="Abroad focus" value="{{ $house->abroadfocus }}"
                                    type="text" class="form-control validate">
                            </div>
                            <div class="form-group mb-3">
                                <div>
                                    <label for="">Photo :<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                 <span class="input-group-btn">
                                     <a id="lfm" data-input="thumbnail" data-preview="holder"
                                        class="btn btn-primary">
                                         <i class="fa fa-picture-o"></i> Choose
                                     </a>
                                 </span>
                                        <input id="thumbnail" class="form-control" type="text" name="abroadphoto" value="{{ $house->abroadphoto }}">
                                    </div>
                                    <div id="holder" style="margin-top:15px;max-height:100px;"> </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Abroad Description</label>
                                <textarea name="abroaddesc" class="form-control validate" rows="8" name="missiondescription"
                                    placeholder="Write some text..." 
                                    spellcheck="false">{{ $house->abroaddesc }} </textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Career
                                </label>
                                <input id="name" name="career" placeholder="Abroad focus" value="{{ $house->career }}"
                                    type="text" class="form-control validate">
                            </div>
                            <div class="form-group mb-3">
                                <div>
                                    <label for="">Photo :<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                 <span class="input-group-btn">
                                     <a id="lfm1" data-input="thumbnail1" data-preview="holder1"
                                        class="btn btn-primary">
                                         <i class="fa fa-picture-o"></i> Choose
                                     </a>
                                 </span>
                                        <input id="thumbnail1" class="form-control" type="text" name="careerphoto" value="{{ $house->careerphoto }}">
                                    </div>
                                    <div id="holder1" style="margin-top:15px;max-height:100px;"> </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Abroad Description</label>
                                <textarea name="careerdesc" class="form-control validate" rows="8" name="missiondescription"
                                    placeholder="Write some text..." 
                                    spellcheck="false">{{ $house->careerdesc }} </textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Test
                                </label>
                                <input id="name" name="test" placeholder="Abroad focus" value="{{ $house->test }}"
                                    type="text" class="form-control validate">
                            </div>
                            <div class="form-group mb-3">
                                <div>
                                    <label for="">Photo :<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                 <span class="input-group-btn">
                                     <a id="lfm2" data-input="thumbnail2" data-preview="holder2"
                                        class="btn btn-primary">
                                         <i class="fa fa-picture-o"></i> Choose
                                     </a>
                                 </span>
                                        <input id="thumbnail2" class="form-control" type="text" name="testphoto" value="{{ $house->testphoto }}">
                                    </div>
                                    <div id="holder2" style="margin-top:15px;max-height:100px;"> </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Test Description</label>
                                <textarea name="testdesc" class="form-control validate" rows="8" name="missiondescription"
                                    placeholder="Write some text..." 
                                    spellcheck="false">{{ $house->testdesc }} </textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Enviroment
                                </label>
                                <input id="name" name="env" placeholder="Abroad focus" value="{{ $house->env }}"
                                    type="text" class="form-control validate">
                            </div>
                            <div class="form-group mb-3">
                                <div>
                                    <label for="">Photo :<span class="text-danger">*</span></label>
                                    <div class="input-group">
                                 <span class="input-group-btn">
                                     <a id="lfm3" data-input="thumbnail3" data-preview="holder3"
                                        class="btn btn-primary">
                                         <i class="fa fa-picture-o"></i> Choose
                                     </a>
                                 </span>
                                        <input id="thumbnail3" class="form-control" type="text" name="envphoto" value="{{ $house->envphoto }}">
                                    </div>
                                    <div id="holder3" style="margin-top:15px;max-height:100px;"> </div>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Env Description</label>
                                <textarea name="envdesc" class="form-control validate" rows="8" name="missiondescription"
                                    placeholder="Write some text..." 
                                    spellcheck="false">{{ $house->envdesc }} </textarea>
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