@if(Session::has('success'))
    <div >
        <strong>成功!</strong> {{ Session::get('success') }}
    </div>
@endif

@if(Session::has('error'))
    <div>
        <strong>失败!</strong> {{ Session::get('error') }}
    </div>
@endif
