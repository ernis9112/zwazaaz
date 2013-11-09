jQuery(document).ready(function(){
    var done = true;
    function doAjaxValidation(){
        // set packman on each invalid input
        jQuery('#registration input').each(function(){
            if( jQuery(this).parent().hasClass('has-error') || jQuery(this).hasClass('current-writing') )
                jQuery(this).addClass('loading');
        });
        //------------------------------------------------------
        if(done == true){
            done = false;
            function restoreFields(){
                jQuery('.help-block').text("");
                jQuery('.has-error').removeClass('has-error');
                jQuery('input#is_clicked').val('no');
                jQuery('#submit-form').removeAttr('disabled');
            }
            setTimeout(function(){
                jQuery.ajax({
                    type: "POST",
                    url: 'validate-registration',
                    data: {
                        first_name: jQuery('#registration #register-first-name').val(),
                        last_name:  jQuery('#registration #register-last-name').val(),
                        email:      jQuery('#registration #register-name').val(),
                        username:   jQuery('#registration #register-username').val(),
                        password:   jQuery('#registration #register-password').val(),
                        password_confirmation: jQuery('#registration #register-repeat-password').val(),
                        is_clicked: jQuery('#registration #is_clicked').val()
                    }
                }).done(function( msg ) {
                    if( msg == "OK" )
                        window.location.replace("/dashboard");// Really?
                    else if( msg == "GOOD" ){
                        restoreFields(); 
                        jQuery('#registration .alert-danger').hide("slow");
                        jQuery('#registration .alert-success').slideDown("slow");
                    } else{
                        restoreFields();
                        jQuery('#registration .alert-success').hide("slow");
                        jQuery('#registration .alert-danger').slideDown("slow"); 
                        $.each( msg, function( key, value ) {
                            if( jQuery('input[name="' + key + '"]').val() != "" ){
                                jQuery('.message-' + key).text(value);
                                jQuery('.message-' + key).parent().addClass('has-error');
                            }                
                        });
                    }
                    done = true;
                    jQuery('.loading').removeClass('loading');
                });    
            }, 700);
        }
    }
    jQuery('html').keyup(function(){
        doAjaxValidation();
    });
    jQuery('#submit-form').click(function(){
        jQuery('input#is_clicked').val('yes');
        jQuery('#submit-form').attr('disabled', 'disabled');
        doAjaxValidation();
    });
    jQuery('#registration input').attr('autocomplete', 'off');
    jQuery('#registration .alert-danger, #registration .alert-success').css('display', 'none');
    jQuery('#registration input').focus(function(){
        jQuery('.current-writing').removeClass('current-writing');
        jQuery(this).addClass('current-writing');
    });
});