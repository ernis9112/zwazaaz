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
        if (!$(this).hasClass("hover")) {
            $(this).addClass("hover");
            event.preventDefault ? event.preventDefault() : event.returnValue = false;
        }
    });
});
