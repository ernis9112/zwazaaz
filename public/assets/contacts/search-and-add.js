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
                    //jQuery('#livesearch').css('display', 'inline-block');
                    //jQuery('#livesearch').css('position', 'absolute');
                    //jQuery('#livesearch').css('width', '91.5%');
                    //jQuery('#livesearch').css('z-index', '1');

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

    jQuery('body').delegate(".btn-add", "click",function () {
        var username = $(this).parents('.webrtc-user').data('username');
        //alert(username);

        jQuery.ajax({
            type: "POST",
            url: 'add-friend',
            data: {
                nickname: username
            }
        }).done(function( msg ) {
                jQuery.alert(msg);
            });
    });

});