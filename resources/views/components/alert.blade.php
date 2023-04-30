@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible text-white" role="alert">
        <span class="text-sm">{{session('success')}}<a href="javascript:;" class="alert-link text-white"></a></span>
        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if(session()->has('info'))
    <div class="alert alert-warning">
        {{session('info')}}
    </div>
@endif
@if(session()->has('wring'))
    <div class="alert alert-danger">
        {{session('wring')}}
    </div>
@endif
