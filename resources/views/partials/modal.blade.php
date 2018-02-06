<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel">Feliratkozás az akcióra</h3>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('pages.sale-subscribe') }}" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">{{ trans('tender.phone') }}</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword3" placeholder="{{ trans('tender.phone') }}" required>
                        </div>
                    </div>    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Mégse</button>
                        <button type="submit" class="btn btn-primary subscribe-btn">Feliratkozás</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
