@extends('admin.layout.master')

@section('content')
    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">
            <div>
                Edit PM
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-body">
                        <form class="form-horizontal" method="post" action="{{route('admin.ht.update',$pm->id)}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">လွှတ်တော်ရွေးချယ်ပါ</label>
                                <div class="col-xl-10">
                                    <select name="ht_category_id" id="" class="form-control">
                                        @foreach($htCategory as $h)
                                            <option value="{{$h->id}}"
                                                @if($h->id == $pm->ht_category_id)
                                                    selected
                                                    @endif
                                            >{{$h->my_name}} -  {{$h->en_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">တိုင်းဒေသရွေးချယ်ပါ</label>
                                <div class="col-xl-10">
                                    <select name="region_id" id="" class="form-control">
                                        @foreach($region as $h)
                                            <option value="{{$h->id}}"
                                                    @if($h->id == $pm->region_id)
                                                    selected
                                                    @endif
                                            >{{$h->my_name}} -  {{$h->en_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">အီးမေး</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="email" value="{{$pm->email}}" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">ဖေ့စ်ဘုတ်</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="facebook" value="{{$pm->facebook}}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Choose Photo</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="file" name="image">
                                    <img src="{{asset('public'.$pm->image)}}" alt="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Choose Gender</label>
                                <div class="col-xl-10">
                                    <label for="">Male</label><input  type="radio" name="gender"
                                                                      {{$pm->en_gender=='male' ? 'checked' : ''}}
                                                                      value="male"> &nbsp;
                                    <label for="">Female</label><input  type="radio" name="gender"
                                                                        {{$pm->en_gender=='female' ? 'checked' : ''}}
                                                                        value="female">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Myanmar Name</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="my_name" value="{{$pm->my_name}}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">English Name</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="en_name" value="{{$pm->en_name}}" >
                                </div>
                            </div>

                            <hr>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">ကိုယ်ရေးရာစဝင် (Myanmar)</label>
                                <div class="col-xl-10">
                                    <textarea name="my_about" class="form-control" id="" cols="30" rows="10">{{$pm->my_about}}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">ကိုယ်ရေးရာစဝင် (English)</label>
                                <div class="col-xl-10">
                                    <textarea name="en_about" class="form-control" id="" cols="30" rows="10">{{$pm->en_about}}</textarea>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">လွှတ်တော်သက်တမ်း (Myanmar)</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="my_expire" value="{{$pm->my_expire}}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">လွှတ်တော်သက်တမ်း (English)</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="en_expire" value="{{$pm->en_expire}}" >
                                </div>
                            </div>
                            <hr>


                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">ပါတီ (Myanmar)</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="my_party" value="{{$pm->my_party}}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">ပါတီ (English)</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="en_party" value="{{$pm->en_party}}" >
                                </div>
                            </div>
                            <hr>

                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">မဲဆန္ဒနယ်  (Myanmar)</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="my_ticket_division" value="{{$pm->my_ticket_division}}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">မဲဆန္ဒနယ် (English)</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="en_ticket_division" value="{{$pm->en_ticket_division}}" >
                                </div>
                            </div>
                            <hr>

                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">တာဝန်စတင်ထမ်းဆောင်သည့်နေ့စွဲ (Myanmar)</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="my_start_work" value="{{$pm->my_start_work}}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">တာဝန်စတင်ထမ်းဆောင်သည့်နေ့စွဲ(English)</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="en_start_work" value="{{$pm->en_start_work}}" >
                                </div>
                            </div>
                            <hr>

                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">တာဝန်ပီးဆုံးသည့်နေ့စွဲ (Myanmar)</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="my_end_work" value="{{$pm->my_end_work}}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">တာဝန်ပီးဆုံးသည့်နေ့စွဲ(English)</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="en_end_work" value="{{$pm->en_end_work}}" >
                                </div>
                            </div>
                            <hr>

                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">နေရပ်လိပ်စာ (Myanmar)</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="my_location" value="{{$pm->my_location}}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">နေရပ်လိပ်စာ  (English)</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="en_location" value="{{$pm->en_location}}" >
                                </div>
                            </div>
                            <hr>

                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">အခြားဆက်သွယ်ရန် (Myanmar)</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="my_other_location" value="{{$pm->my_other_location}}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">အခြားဆက်သွယ်ရန်  (English)</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="en_other_location" value="{{$pm->en_other_location}}" >
                                </div>
                            </div>
                            <hr>


                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">ကော်မတီနှင့်ရာထူး (Myanmar)</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="my_party_position" value="{{$pm->my_party_position}}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">ကော်မတီနှင့်ရာထူး (English)</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="en_party_position" value="{{$pm->en_party_position}}" >
                                </div>
                            </div>
                            <hr>

                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">ဖုန်း (Myanmar)</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="my_phone" value="{{$pm->my_phone}}" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">ဖုန်း (English)</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="en_phone" value="{{$pm->en_phone}}" >
                                </div>
                            </div>
                            <hr>

                            <div class="form-group row">
                                <div class="col-xl-2"></div>
                                <div class="col-xl-10">
                                    <button class="btn btn-sm btn-green" type="submit">Updat</button>
                                    <a href="{{url('adminn/ht')}}" class="btn btn-sm btn-secondary" type="reset">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection