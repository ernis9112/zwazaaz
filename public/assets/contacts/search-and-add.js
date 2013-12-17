jQuery(document).ready(function(){
    var done = true;
    function searchContacts(){
        if(done == true){
            done = false;
            setTimeout(function(){
                jQuery.ajax({
                    type: "POST",
                    url: 'search-contacts',
                    data: {
                        nick: jQuery('input[name="friend-search"]').val()
                    }
                }).done(function( msg ) {
                    jQuery('#livesearch').html(msg);

                    done = true;
                    jQuery('.loading').removeClass('loading');
                    $.event.trigger('list-updated');
                });
            }, 700);
        }
    }
    jQuery('#friend-search').keyup(function(){
        searchContacts();
        jQuery('#friend-search').addClass('loading');
    });

    jQuery('body').delegate(".add-or-del-to-list", "click",function () {
        var username = $(this).parents('.webrtc-user').data('username');
        var thiss = $(this).parents('.webrtc-user');
        //alert(username);

        jQuery.ajax({
            type: "POST",
            url: 'add-friend',
            data: {
                nickname: username
            }
        }).done(function( msg ) {
                //alert(msg);
                if(msg == 1){
                    thiss.html(
                    '<span class="user-img">'+
                        '<li class="alert alert-info" style="margin-bottom: 0px; border: 0px solid transparent; border-radius: 0px;">Contact deleted Successfully</li>'+
                    '</span>'
                    );
                }
                else{
                    thiss.html(
                    '<span class="user-img">'+
                       '<li class="alert alert-info" style="margin-bottom: 0px; border: 0px solid transparent; border-radius: 0px;">Contact added Successfully</li>'+
                    '</span>');
                }

                if (msg != 1) {
                    $('#contacts').children().append('<li class="webrtc-user" id="webrtc-user-' + msg + '" data-username="' + msg + '">' +
                        '<a href="http://www.zwazaaz.eu/user/' +msg + '">' +
                            '<span class="user-img">' +
                                '<img src="http://www.zwazaaz.eu/uploads/user-blank.jpg" alt="username">' +
                            '</span>' +
                            '<span class="display-name">' + msg + '</span>' +
                            '<span class="status webrtc-status"></span>' +
                        '</a>' +
                        '<div class="contact-actions">' +
                            '<button type="button" class="action btn btn-success webrtc-call">' +
                                '<i class="glyphicon glyphicon-earphone"></i>' +
                            '</button>' +
                            '<button type="button" class="action btn btn-danger webrtc-decline">' +
                                '<i class="glyphicon glyphicon-earphone"></i>' +
                            '</button>' +
                            '<a href="http://www.zwazaaz.eu/user/' +msg + '" class="action btn btn-info">' +
                                '<i class="glyphicon glyphicon-info-sign"></i>' +
                            '</a>' +
                            '<button class="action btn btn-warning add-or-del-to-list">' +
                                '<i class="glyphicon glyphicon-trash"></i>' +
                            '</button>' +
                        '</div>' +
                        '</li>');
                }
                $.event.trigger('list-updated');
            });

    });
    //Show that blocked user
    jQuery('body').delegate(".block-user", "click",function () {
        var username = $(this).parents('.webrtc-user').data('username');
        var thiss = $(this).parents('.webrtc-user');
        //alert(username);

        jQuery.ajax({
            type: "POST",
            url: 'block-user',
            data: {
                nickname: username
            }
        }).done(function( msg ) {
                //alert(msg);
                if(msg == 1){
                    thiss.html(
                        '<span class="user-img">'+
                            '<li class="alert alert-info" style="margin-bottom: 0px; border: 0px solid transparent; border-radius: 0px;">Contact blocked Successfully</li>'+
                            '</span>'
                    );
                }
                else{
                    thiss.html(
                        '<span class="user-img">'+
                            '<li class="alert alert-info" style="margin-bottom: 0px; border: 0px solid transparent; border-radius: 0px;">Contact unblocked Successfully</li>'+
                            '</span>');
                }
            });

    });

});