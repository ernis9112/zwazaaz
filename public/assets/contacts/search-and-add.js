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
});