@extends('admin.layout.master')

@section('content')

    <!-- Page content-->
    <div class="content-wrapper">
        <div class="content-heading">
            <div>
                Update PDF
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-body">
                        <form  method="POST" onsubmit="return false" id="frm" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="pdf_id" value="{{$brand->id}}">
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Myannar Title</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="my_title" value="{{$brand->my_title}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Eng Title</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="text" name="en_title" value="{{$brand->en_title}}">
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
                                <label class="col-xl-2 col-form-label">Choose Image (Myanmar)</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="file" name="image" accept="image/*">
                                    <img src="{{asset('public'.$brand->image)}}" style="width:100px" alt="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Choose Image (English)</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="file" name="en_image" accept="image/*">
                                    <img src="{{asset('public'.$brand->en_image)}}" style="width:100px" alt="">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Choose PDf (Myanmar)</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="file" name="pdf" accept="application/pdf">
                                    <b>Choosed PDf: </b> {{explode('/',$brand->pdf)[2]}}
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-2 col-form-label">Choose PDf (English)</label>
                                <div class="col-xl-10">
                                    <input class="form-control" type="file" name="en_pdf" accept="application/pdf">
                                    <b>Choosed PDf: </b> {{explode('/',$brand->en_pdf)[2]}}
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="col-xl-2"></div>
                                <div class="col-xl-10">
                                    <button class="btn btn-sm btn-green" id="btnSubmit" type="submit">
                                        <i class="fa fa-spinner fa-spin" id="spinner"></i>
                                        Update</button>
                                    <a href="{{url('adminn/pdf')}}" class="btn btn-sm btn-secondary">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var frm = $('#frm');
            var submitUrl = "{{route('pdf.update',$brand->id)}}";
            var spinner = $('#spinner');
            var btnSubmit = $('#btnSubmit');
            spinner.hide();
            frm.submit(function(){
                spinner.show();
                btnSubmit.attr('disabled','true')
                this.preventDefault;
                $.ajax({
                    url:submitUrl,
                    method:"POST",
                    data:new FormData(this),
                    dataType:'JSON',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success:function(data)
                    {
                        console.log(data);
                        // var data = JSON.parse(data,true);
                        console.log(data.message);
                        if(data.message == 'error'){
                            toastr.error('Please Fill All Fields')
                            window.location.href = "{{route('admin.pdf.update',$brand->id)}}"
                        }
                        if(data.message == 'success'){
                            toastr.success('Updated Success');
                            window.location.href = "{{route('admin.pdf.index')}}"
                        }
                    }
                })
            });
        })
    </script>
@endsection