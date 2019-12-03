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
                        <form class="form-horizontal" method="post" action="{{route('admin.user.update',$brand->id)}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Name</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="name"  value="{{$brand->name}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Email</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="email" name="email" value="{{$brand->email}}"  required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Password</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="password" value="{{$brand->real_password}}"  required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Choose Role</label>
                                <div class="col-xl-10">
                                    <select name="role" class="form-control">
                                        <option value="author" <?php echo $role = ($brand->role=='author') ? 'selected' : ' ' ?> > Author (Only Create , View , Edit )</option>
                                        <option value="full"  <?php echo $role = ($brand->role=='full') ? 'selected' : ' ' ?> >Admin (Full Permission)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xl-2"></div>
                                <div class="col-xl-10">
                                    <button class="btn btn-sm btn-green" type="submit">Update</button>
                                    <a href="{{url('adminn/user')}}" class="btn btn-sm btn-secondary" type="reset">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection