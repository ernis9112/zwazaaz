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
                });    
            }, 700);
        }
    }
    jQuery('#friend-search').keyup(function(){
        searchContacts();
    });

    jQuery('body').delegate(".add-or-del-to-list", "click",function () {
        var username = $(this).parents('.webrtc-user').data('username');
        //alert(username);

        jQuery.ajax({
            type: "POST",
            url: 'add-friend',
            data: {
                nickname: username
            }
        }).done(function( msg ) {
                //alert(msg);
                if(msg == 1)
                    alert('Deleted');
                else
                    alert('Added');
                window.location.reload();
                if(msg != 1 && msg != username){
                    $('#contacts').children().append('<li class="webrtc-user" id="webrtc-user-'+msg+'" data-username="'+msg+'">'+
                            '<a href="#">'+
                        '<span class="user-img">'+
                        '<img src="assets/img/user-blank.jpg" alt="username">'+
                        '</span>'+
                        '<span class="display-name">'+ msg +'</span>'+
                        '<span class="status webrtc-status"></span>'+
                        '</a>'+
                        '<div class="contact-actions">'+
                        '<span class="action btn btn-success webrtc-call">'+
                        '<i class="glyphicon glyphicon-earphone"></i>'+
                    '</span>'+
                    '<button class="action btn btn-info">'+
                    '<i class="glyphicon glyphicon-info-sign"></i>'+
                    '</button>'+
                    '</div>'+
                    '</li>');
                }
            });

    });

});