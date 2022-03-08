@extends('admin.master')


@section('content')
<div id="content">
    <!-- Begin Page Content -->
    <!-- Begin Page Content -->

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Slider/<span class="h5 mb-2 text-gray-600">All Slider</span></h1>
        <p class="mb-4">List of the all the Slider currently being made or in use</a>.</p>
        <div class="col-lg-12">
            @include('backend.layouts.notification')
        </div>
        <div class="col-lg-12">
            
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Slider Database</h6>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Photo</th>
                                <th>Condition</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>S.N</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Photo</th>
                                <th>Condition</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($banners as $item )
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->description}}</td>
                                    <td><img src="{{$item->photo}}" alt="banner images" style="max-height: 90px;max-width: 120px"></td>
                                    <td>
                                        @if($item->condition=='university')
                                            <span class="badge badge-success">{{$item->condition}}</span>
                                        @elseif($item->condition=='slider')
                                            <span class="badge badge-danger">{{$item->condition}}</span>
                                        @elseif($item->condition=='popup')
                                            <span class="badge badge-danger">{{$item->condition}}</span>
                                        @else
                                        <span class="badge badge-primary">{{$item->condition}}</span>
                                        @endif
                                    </td>
                                    <td><input type="checkbox" name="toogle" value="{{$item->id}}" data-toggle="switchbutton" {{$item->status=='active'?'checked':''}} data-onlabel="active" data-offlabel="inactive" data-size="sm" data-onstyle="success" data-offstyle="danger">
                                    </td>
                                    <td>
                                        <a href="{{route('banner.edit',$item->id)}}" data-toggle="tooltip" class=" float-left btn btn-sm btn-outline-warning" title="edit" data-placement="bottom"><i class="fa fa-edit"></i></a>
                                        <form class="float-left ml-1" action="{{route('banner.destroy',$item->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="" data-toggle="tooltip"  class="dltBtn btn btn-sm btn-outline-danger" data-id={{$item->id}} title="delete" data-placement="bottom"><i class="fa fa-trash"></i></a>

                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
    <!-- /.container-fluid -->

</div>
@endsection