<div style="background-color: white; height: 300; width: 600; margin: 0 auto; margin-top: 100; overflow: hidden" class = "modal" id = "upload_modal">
    <div class = "modal-header">
        <button type = "button" class="close" data-dismiss="modal">&times;</button>
        <h1>Upload your new profile picture!</h1>
    </div>
    <div class="modal-body">
        {{Form::open(array('route' => 'user.upload.pic', 'files'=> true))}}
        {{Form::file('photo')}}
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Cancel</a>
        <button class="btn btn-primary"> Upload pic</button>
        {{ Form::token() }}
        {{ Form::close() }}
    </div>
</div>
