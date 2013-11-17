$(document).ready(function(){
    $('#sidebarTabs1 a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
        console.log("test1");
    })
    $('.mobile-navigation .toggle-sidebar').click(function(){
        $($(this).attr('data-target')).toggleClass("active");
    });

    $(".contacts-list li").click(function (event){
        $(this).siblings().removeClass("hover");
        if (!$(this).hasClass("hover") && ($(".contact-actions", $(this)).has($(event.target)).length == 0)) {
            $(this).addClass("hover");
            event.preventDefault ? event.preventDefault() : event.returnValue = false;
        } else {
            $(this).removeClass("hover");
        }
    });

    $("#video-full-screen-toggle").click(function() {
        $(this).closest(".web-cam-wrapper").toggleClass("full-screen");
    });

    $(document).keyup(function(e) {
        if (e.keyCode == 27) {
            $("#video-full-screen-toggle").trigger("click");
        }
    });

    $(".contact-search input").keyup(function(){
        var input = $(this);

        if( input.val() == "" ) {
            $('a[href="#contact-search"]').parent().addClass("hidden");
            $('#sidebarTabs1 a[href="#contacts"]').tab('show');
        } else {
            $('a[href="#contact-search"]').parent().removeClass("hidden");
            $('#sidebarTabs1 a[href="#contact-search"]').tab('show');
        }
    });
});