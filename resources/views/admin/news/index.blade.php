@extends('admin.layout.master')

@section('content')
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">
            <div>
                All News
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">All News</div>
                        </div>
                        <div class="card-body">
                            <a href="">
                                <a href="{{route('admin.news.create')}}" class="btn btn-oval btn-success">Create News </a>
                            </a>
                        </div>

                        <div class="card-body">
                            <div class="row">
                                <table class="table table-striped my-4 w-100 text text-center" id="">
                                    <thead class="text-center">
                                    <tr>
                                        <th data-priority="1">No.</th>
                                        <th>Image</th>
                                        <th>Myanmar Name</th>
                                        <th>English Name</th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tfoot class="text-center">
                                    <tr>
                                        <th>No.</th>
                                        <th>Image</th>
                                        <th>Myanmar Name</th>
                                        <th>English Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @php $i=1; @endphp
                                    @foreach($brands as $c)
                                        <tr>
                                            <td class="text-center">@php echo $i.'.';$i++; @endphp</td>
                                            <td>
                                                <img src="{{asset('public/'.$c->image)}}" style="width:50px" alt="">
                                            </td>
                                            <td>{{$c->my_name}}</td>
                                            <td>{{$c->en_name}}</td>
                                            <td class="text-center">
                                                @if(auth()->user()->role =='full')
                                                <a href="{{route('admin.news.edit',$c->id)}}" class="btn btn-pill-left btn-info d-inline">Edit</a>
                                                <a href="{{route('admin.news.show',$c->id)}}" class="btn btn-success btn-info d-inline">View</a>
                                                <form action="{{route('admin.news.destroy',$c->id)}}" class="d-inline" method="post">
                                                    {{csrf_field()}}
                                                    {{method_field('Delete')}}
                                                    <button class="btn btn-pill-right btn-danger" type="submit">Delete</button>
                                                </form>
                                                    @else
                                                    <a href="{{route('admin.news.edit',$c->id)}}" class="btn btn-pill-left btn-warning-light d-inline">Edit</a>
                                                    <a href="{{route('admin.news.show',$c->id)}}" class="btn btn-success btn-info d-inline">View</a>
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
@endsection