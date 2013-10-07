jQuery(document).ready(function(){
    function doAjaxValidation(){
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
                    window.location.replace("/zwazaaz/public/dashboard");
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
            });    
        }, 300);
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
});