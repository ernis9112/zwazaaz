<?php $ib = 0; ?>
<?php $meb  =   0; ?>
@for($i = 0; $i < sizeof($iBlocked); $i++)
    @if(($iBlocked[$i]->blocked_id == $user->id) and ($iBlocked[$i]->user_id == Auth::user()->id))
        <?php $ib = 1; ?>
    @endif
    @if(($iBlocked[$i]->user_id == $user->id) and ($iBlocked[$i]->blocked_id == Auth::user()->id))
        <?php $meb = 1; ?>
    @endif
@endfor


<div class="main-content">
    <div class="profile-view">
        <div class="row">
            <div class="col-sm-3">
                <div class="profile-img">
                    <div class="profile-img-wrapper">
                        @if(file_exists('uploads/'.$user->id.'.jpg'))
                        <img src=" {{URL::asset('uploads/'.$user->id.'.jpg')}} " alt="username">
                        @else
                        <img src=" {{URL::asset('uploads/user-blank.jpg')}} " alt="username">
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="profile-info-row row">
                    <div class="info-label col-md-5">
                        Name
                    </div>
                    <div class="info-value col-md-7">
                        {{$user->name}} {{$user->last_name}}
                    </div>
                </div>
                <div class="profile-info-row row">
                    <div class="info-label col-md-5">
                        Zwazaaz name
                    </div>
                    <div class="info-value col-md-7">
                        {{$user->username}}
                    </div>
                </div>
                <div class="profile-info-row row">
                    <div class="info-label col-md-5">
                        E-mail
                    </div>
                    <div class="info-value col-md-7">
                        {{$user->email}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="contact-actions">
                    @if(( $ib == 0) and ($meb == 0))
                        <a href="#" class="action btn btn-success btn-lg" onClick="dashboard.call('{{$user->username}}'); answerCall('{{$user->username}}');" <?php if(Auth::basic($user->username)) echo ""; else echo "disabled"; ?>><i class="glyphicon glyphicon-earphone"></i><span class="text">Call</span></a>

                    @endif
                    @if(($ib == 1) and ($meb == 1))
                        Both of you blocked each other
                    @endif
                    @if(($meb == 1) and ($ib == 0))
                        This user blocked you
                    @endif
                    @if(($ib == 1) and ($meb == 0))
                        You blocked this user
                    @endif
                </div>
                <div class="contact-actions pull-right webrtc-user" data-username="{{$user->username}}">

                    @if($isInFrienList == 1)
                    <button class="action btn btn-warning btn-xs add-or-del-to-list"><i class="glyphicon glyphicon-trash"></i><span class="text">Remove</span></button>
                    @else
                    <button class="action btn btn-success btn-xs add-or-del-to-list"><i class="glyphicon glyphicon-plus"></i><span class="text">Add</span></button>
                    @endif

                    @if($ib == 0)
                        <button class="action btn btn-danger btn-xs block-user"><i class="glyphicon glyphicon-ban-circle"></i><span class="text">Block</span></button>
                    @endif
                    @if($ib == 1)
                        <button class="action btn btn-danger btn-xs block-user"><i class="glyphicon glyphicon-ban-circle"></i><span class="text">Unblock</span></button>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="web-cam-wrapper">
        <div class="video-container friend-camera va-middle" id="remoteVideos">
        </div>
        <div class="video-container my-camera" id="localVideo">
        </div>
        <div class="call-controls">
            <span class="action btn btn-danger webrtc-decline"><i class="glyphicon glyphicon-earphone"></i></span>
            <button id="video-full-screen-toggle" class="action btn btn-primary"><i class="glyphicon glyphicon-fullscreen"></i></button>
        </div>
    </div>
</div>