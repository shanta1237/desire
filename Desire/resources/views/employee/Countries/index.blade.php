@extends('employee.master')


@section('content')
<div id="content">
    <!-- Begin Page Content -->
    <!-- Begin Page Content -->

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Country/<span class="h5 mb-2 text-gray-600">All Country</span></h1>
        <p class="mb-4">List of the all the Country currently being made or in use</a>.</p>
        <div class="col-lg-12">
            @include('backend.layouts.notification')
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Country Database | Total Country: {{\App\Models\Country::count()}}</h6>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Title</th>
                                <th>description</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>S.N</th>
                                <th>Title</th>
                                <th>description</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($country as $item )
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{ $item->description }}</td>
                                    <td><input type="checkbox" name="toogle" value="{{$item->id}}" data-toggle="switchbutton" {{$item->status=='active'?'checked':''}} data-onlabel="active" data-offlabel="inactive" data-size="sm" data-onstyle="success" data-offstyle="danger">
                                    </td>
                                    <td>
                                        <form class="float-left ml-1" action="{{route('employeecountry.destroy',$item->id)}}" method="post">
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
@section('scripts')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.dltBtn').click(function(e){
            var form=$(this).closest('form');
            var dataID=$(this).data('id');
            e.preventDefault();
            swal({
                title: "Are you sure?",
                text: "Want to delete the Category form the database file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                        swal("Poof! Your imaginary file has been deleted!", {
                            icon: "success",
                        });
                    } else {
                        swal("thanks you for not deleting the file");
                    }
                });

        })
    </script>
    <script>
        $('input[name=toogle]').change(function(){
            var mode=$(this).prop('checked');
            var id=$(this).val();
            // alert(id);
            $.ajax({
                url:"{{route('blogcategory.status')}}",
                type:"POST",
                data:{
                    _token:'{{csrf_token()}}',
                    mode:mode,
                    id:id,
                },
                success:function(response){
                   if(response.status){
                       alert(response.msg);
                   }
                   else{
                       alert('plz try again');
                   }
                }
            })
        });
    </script>
@endsection
