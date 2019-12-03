@extends('admin.layout.master')
@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12 pt-0 pb-1">
                <a href="{{url('adminn/pdf')}}" class="btn d-inline-block btn-success">Go PDf Section</a>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{asset('public'.$news->image)}}" class="w-100" alt="">
                                <a href="{{route('pdf.viewpdf',[$news->id,'my'])}}" target="_blank" class="btn btn-primary">View PDF</a>
                                <a href="{{route('pdf.download',[$news->id,'my'])}}" target="_blank" class="btn btn-info">Download PDF</a>
                                <br><br>
                                <h3>{{$news->my_title}}</h3>
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
                                <img src="{{asset('public'.$news->en_image)}}" class="w-100" alt="">
                                <a href="{{route('pdf.viewpdf',[$news->id,'en'])}}" target="_blank" class="btn btn-primary">View PDF</a>
                                <a href="{{route('pdf.download',[$news->id,'en'])}}" target="_blank" class="btn btn-info">Download PDF</a>
                                <br><br>
                                <h3>{{$news->my_title}}</h3>
                                <p>{{$news->my_description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection