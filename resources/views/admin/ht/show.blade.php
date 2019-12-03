@extends('admin.layout.master')
@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12 pt-0 pb-1">
                <a href="{{url('adminn/ht')}}" class="btn d-inline-block btn-success">Show All</a>
            </div>
            <div class="col-md-12 text-center">
                <div class="card">
                    <div class="card-body">
                        <img src="{{asset('public'.$news->image)}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card p-4">
                    <table class="table table-striped">
                        <thread>
                            <tr>
                                <th>လွှတ်တော်အမျိုးအစား</th>
                                <th>တိုင်းဒေသကြီး</th>
                            </tr>
                        </thread>
                        <tr>
                            <td>{{$news->region->my_name}}</td>
                            <td>{{$news->region->my_name}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h3>Myanmar Information</h3>
                                <p>{{$news->my_name}}</p>
                                <p>{{$news->my_expire}}</p>
                                <p>{{$news->my_party}}</p>
                                <p>{{$news->my_ticket_division}}</p>
                                <p>{{$news->my_start_work}}</p>
                                <p>{{$news->my_end_work}}</p>
                                <p>{{$news->my_location}}</p>
                                <p>{{$news->my_party_position}}</p>
                                <p>{{$news->my_phone}}</p>
                                <p>{{$news->my_about}}</p>
                                <p>{{$news->email}}</p>
                                <p>{{$news->facebook}}</p>
                                <p>{{$news->gender}}</p>
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
                                <h3>English  Information</h3>
                                <p>{{$news->en_name}}</p>
                                <p>{{$news->en_expire}}</p>
                                <p>{{$news->en_party}}</p>
                                <p>{{$news->en_ticket_division}}</p>
                                <p>{{$news->en_start_work}}</p>
                                <p>{{$news->en_end_work}}</p>
                                <p>{{$news->en_location}}</p>
                                <p>{{$news->en_party_position}}</p>
                                <p>{{$news->en_phone}}</p>
                                <p>{{$news->en_about}}</p>
                                <p>{{$news->email}}</p>
                                <p>{{$news->facebook}}</p>
                                <p>{{$news->gender}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection