<div class="modal fade" id="modal_confirm" role="dialog">
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
                    <p>Are you sure buy album: <strong id="show_album_name"></strong></p>
                @endif
            </div>
            <div class="modal-footer">
                @if(!Auth::check())
                    <a href="/login" class="btn btn-primary">Login</a>
                @else
                    <button type="button" class="btn btn-warning buy-album">Buy now</button>
                @endif
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

