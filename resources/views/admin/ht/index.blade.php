@extends('admin.layout.master')

@section('content')
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">
            <div>
                All
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">View All</div>
                        </div>
                        <div class="card-body">
                            <a href="">
                                <a href="{{route('admin.ht.create')}}" class="btn btn-oval btn-success">Create</a>
                            </a>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <table class="table table-striped my-4 w-100 text text-center" id="">
                                    <thead class="text-center">
                                    <tr>
                                        <th data-priority="1">No.</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tfoot class="text-center">
                                    <tr>
                                        <th>No.</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @php $i=1; @endphp
                                    @foreach($brands as $c)
                                        <tr>

                                            <td class="text-center">@php echo $i.'.';$i++; @endphp</td>
                                            <td><img src="{{asset('public'.$c->image)}}" style="width: 40px;border-radius:50%" alt=""></td>
                                            <td>{{$c->my_name}}</td>
                                            <td class="text-center">
                                                @if(auth()->user()->role == 'full')
                                                <a href="{{route('admin.ht.edit',$c->id)}}" class="btn btn-pill-left btn-info d-inline">Edit</a>
                                                <a href="{{route('admin.ht.show',$c->id)}}" class="btn btn-success  d-inline">View</a>
                                                <form action="{{route('admin.ht.destroy',$c->id)}}" class="d-inline" method="post">
                                                    {{csrf_field()}}
                                                    {{method_field('Delete')}}
                                                    <button class="btn btn-pill-right btn-danger" type="submit">Delete</button>
                                                </form>
                                                    @else
                                                    <a href="{{route('admin.ht.edit',$c->id)}}" class="btn btn-pill-left btn-info d-inline">Edit</a>
                                                    <a href="{{route('admin.ht.show',$c->id)}}" class="btn btn-success  d-inline">View</a>
                                                    @endif
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{$brands->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <!-- Datatables-->
    <script src="{{asset('admin/vendor/datatables.net/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('admin/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('admin/vendor/datatables.net-buttons/js/dataTables.buttons.js')}}"></script>
    <script src="{{asset('admin/vendor/datatables.net-buttons-bs/js/buttons.bootstrap.js')}}"></script>
    <script src="{{asset('admin/vendor/datatables.net-buttons/js/buttons.colVis.js')}}"></script>
    <script src="{{asset('admin/vendor/datatables.net-buttons/js/buttons.flash.js')}}"></script>
    <script src="{{asset('admin/vendor/datatables.net-buttons/js/buttons.html5.js')}}"></script>
    <script src="{{asset('admin/vendor/datatables.net-buttons/js/buttons.print.js')}}"></script>
    <script src="{{asset('admin/vendor/datatables.net-keytable/js/dataTables.keyTable.js')}}"></script>
    <script src="{{asset('admin/vendor/datatables.net-responsive/js/dataTables.responsive.js')}}"></script>
    <script src="{{asset('admin/vendor/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('admin/vendor/jszip/dist/jszip.js')}}"></script>
    <script src="{{asset('admin/vendor/pdfmake/build/pdfmake.js')}}"></script>
    <script src="{{asset('admin/vendor/pdfmake/build/vfs_fonts.js')}}"></script>
@endsection