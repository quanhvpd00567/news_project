@if(Session::has('success'))
    <div class="col-md-12 notification">
        <div class="bg-green disabled alert-dismissible alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Thông báo!</h4>
            {{Session::get('success')}}
        </div>
    </div>
@endif

@if(Session::has('error'))
    <div class="col-md-12 notification">
        <div class="bg-red disabled alert-dismissible alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Thông báo!</h4>
            {{Session::get('error')}}
        </div>
    </div>
@endif
