<!-- Modal -->
<div class="modal fade" id="upload_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class = "modal-header">
                <button type = "button" class="close" data-dismiss="modal">&times;</button>
                <h1>Upload your new profile picture!</h1>
            </div>
            <div class="modal-body">
                {{Form::open(array('route' => 'user.upload.pic', 'files'=> true))}}

                <div class="form-group">
                    <label for="exampleInputFile">Choose picture</label>
                    {{Form::file('photo')}}
                    <p class="help-block"></p>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn" data-dismiss="modal">Cancel</a>
                <button class="btn btn-primary"> Upload pic</button>
                {{ Form::token() }}
                {{ Form::close() }}
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
