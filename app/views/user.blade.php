<div class="main-content">
    <div class="profile-view">
        <div class="row">
            <div class="col-sm-3">
                <div class="profile-img">
                    <div class="profile-img-wrapper">
                        <img width="140" height="140" src=" {{URL::asset('uploads/'.$user->id.'.jpg')}} " alt="username">
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
                    <a href="#" class="action btn btn-success btn-lg"><i class="glyphicon glyphicon-earphone"></i><span class="text">Call</span></a>
                </div>
                <div class="contact-actions pull-right webrtc-user" data-username="{{$user->username}}">
                    <button class="action btn btn-warning btn-xs add-or-del-to-list"><i class="glyphicon glyphicon-trash"></i><span class="text">Remove</span></button>
                    <a href="#" class="action btn btn-danger btn-xs"><i class="glyphicon glyphicon-ban-circle"></i><span class="text">Block</span></a>
                </div>
            </div>
        </div>
    </div>
</div>