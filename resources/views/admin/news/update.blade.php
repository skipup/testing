@extends('admin.layout.master')

@section('content')
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">
            <div>
                Update news
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="{{route('admin.news.update',$brand->id)}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Myannar Name</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="my_name" value="{{$brand->my_name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Eng Name</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="en_name" value="{{$brand->en_name}}">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Myanmar Description</label>
                                <div class="col-xl-10">
                                    <textarea name="my_description" class="form-control">{{$brand->my_description}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Eng Description</label>
                                <div class="col-xl-10">
                                    <textarea name="en_description" class="form-control">{{$brand->en_description}}</textarea>
                                </div>
                            </div>
                            <hr>

                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Choose Image</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="file" name="image">
                                    <img src="{{asset('public'.$brand->image)}}" style="width:200px;" alt="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xl-2"></div>
                                <div class="col-xl-10">
                                    <button class="btn btn-sm btn-green" type="submit">Update</button>
                                    <a href="{{url('adminn/news')}}" class="btn btn-sm btn-secondary" type="reset">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection