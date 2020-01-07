<div class="modal fade" id="buy-now" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Confirm buy</h4>
            </div>
            <div class="modal-body">
                @if(!Auth::check())
                    <p>Please login </p>
                @else
                    <p>Are you sure buy it.</p>
                @endif
            </div>
            <div class="modal-footer">
                @if(!Auth::check())
                    <a href="/login" class="btn btn-primary">Login</a>
                @else
                    <a type="/check" class="btn btn-warning buy-end">Buy now</a>
                @endif
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
