@extends('admin.layout.master')

@section('content')
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">
            <div>
               Edit
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="{{route('admin.ht.category.update',$brand->id)}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Myanmar Name</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="my_name" value="{{$brand->my_name}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">English Name</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="en_name" value="{{$brand->en_name}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xl-2"></div>
                                <div class="col-xl-10">
                                    <button class="btn btn-sm btn-green" type="submit">Update</button>
                                    <a href="{{url('adminn/ht/category')}}" class="btn btn-sm btn-secondary" type="reset">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection