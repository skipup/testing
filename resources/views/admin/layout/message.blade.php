<script>
    @if(Session::has('danger'))
    toastr.error("{{Session::get('danger')}}")
    @endif

    @if(Session::has('error'))
    toastr.error("{{Session::get('error')}}")
    @endif

    @if(Session::has('info'))
    toastr.info("{{Session::get('info')}}")
    @endif

    @if(Session::has('warning'))
    toastr.warning("{{Session::get('warning')}}")
    @endif

    @if(Session::has('success'))
    toastr.success("{{Session::get('success')}}")
    @endif

    @if ($errors->any())

    @foreach ($errors->all() as $error)
    toastr.error('{{$error}}');
    @endforeach

    @endif

</script>