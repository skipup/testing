@extends('admin.layout.master')
@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12 pt-0 pb-1">
                <a href="{{url('adminn/news')}}" class="btn d-inline-block btn-success">Go News Section</a>
            </div>
            <div class="col-md-12 text-center">
                <div class="card">
                    <div class="card-body">
                        <img src="{{asset('public'.$news->image)}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h3>{{$news->my_name}}</h3>
                                <p>{{$news->my_description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h3>{{$news->en_name}}</h3>
                                <p>{{$news->en_description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection