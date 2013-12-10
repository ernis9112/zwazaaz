$(function() {

    $.backstretch("img/background2.jpg");

});



$(function(){

    $(function() {

        $('.slides .slides_container').slidesjs({

            width: 530,

            height: 330,

            navigation: {

                active: true},

            play: {

                effect: "slide",

                interval: 5000,

                auto: true

            }

        });

    });



});







$(document).ready(function(){



    $(".featu").hover(

        function() {

            $(this).stop().animate({"backgroundColor": "#efefef"}, "slow");

        },

        function() {

            $(this).stop().animate({"backgroundColor": "#000"}, "slow");

        });



});



$(function() {



    $("#tabbed-content").organicTabs({

        "speed": 150

    });



});



$(function(){

    $('.tabbed-nav li').click(function(){

        $('.nav li').removeClass('current-li');

        $(this).addClass('current-li');

    });

});

$(document).ready(function(){

    $("a[data-gal^='prettyPhoto']").prettyPhoto({ social_tools: '' });





});

$(document).ready(function(){

    $("img.b").hover(

        function() {

            $(this).stop().animate({"opacity": "1","-ms-filter":"progid:DXImageTransform.Microsoft.Alpha(opacity=100)"}, "800");

        },

        function() {

            $(this).stop().animate({"opacity": "0","-ms-filter":"progid:DXImageTransform.Microsoft.Alpha(opacity=0)"}, "fast");

        });



});





$(document).ready(function(){

    $(".featu").hover(

        function() {

            $("img.ft2", this).stop().animate({"opacity": "1","-ms-filter":"progid:DXImageTransform.Microsoft.Alpha(opacity=100)"}, "800");

        },

        function() {

            $("img.ft2", this).stop().animate({"opacity": "0","-ms-filter":"progid:DXImageTransform.Microsoft.Alpha(opacity=100)"}, "fast");

        });



});





/*---------	Contact Form  -------*/

$(document).ready(function(){

    $("#popi,#popi2").click(function(){

        $("#overlay_form").fadeIn(1000);

        $("#popi-bg").css({

            "opacity": "0.7"

        });

        $("#popi-bg").fadeIn("slow");

        positionPopup();

    });

    $("#close").click(function(){

        $("#overlay_form").fadeOut(500);+

            $("#popi-bg").fadeOut("slow");



    });

});



function positionPopup(){

    if(!$("#overlay_form").is(':visible')){

        return;

    }

    $("#overlay_form").css({

        left: ($(window).width() - $('#overlay_form').width()) / 2,

        top: ($(window).width() - $('#overlay_form').width()) / 7,

        position:'absolute'

    });

}

$(window).bind('resize',positionPopup);



function validateEmail(email) {

    var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    return reg.test(email);

}



$(document).ready(function() {



    $("#contactform").submit(function() { return false; });





    $("#send").on("click", function(){

        var emailval  = $("#email").val();

        var msgval    = $("#message").val();

        var msglen    = msgval.length;

        var mailvalid = validateEmail(emailval);



        if(mailvalid == false) {

            $("#email").addClass("error");

        }

        else if(mailvalid == true){

            $("#email").removeClass("error");

        }



        if(msglen < 4) {

            $("#msg").addClass("error");

        }

        else if(msglen >= 4){

            $("#msg").removeClass("error");

        }



        if(mailvalid == true && msglen >= 4) {

            // if both validate we attempt to send the e-mail

            // first we hide the submit btn so the user doesnt click twice

            $("input.submit").replaceWith("<em>sending...</em>");



            $.ajax({

                type: 'POST',

                url: 'mailer.php',

                data: $("#contactform").serialize(),

                success: function(data) {

                    if(data == "true") {

                        $("em").fadeOut("fast", function(){

                            $(this).before("<p> Your Message has been sent.</p>");

                            setTimeout("$.fancybox.close()", 1000);

                        });

                    }

                }

            });

        }

    });

});



$(function(){

    $(".tooltipsi").tipTip({maxWidth: "auto", edgeOffset: 10});

});



$(function(){

    if ($.browser.msie && $.browser.version <= 8) {



        $(".top-arrow").css({"display": "none"});



    };



});