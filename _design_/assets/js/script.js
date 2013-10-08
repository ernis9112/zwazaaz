$(document).ready(function(){
    $('#sidebarTabs1 a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
        console.log("test1");
    })
    $('.mobile-navigation .toggle-sidebar').click(function(){
        $($(this).attr('data-target')).toggleClass("active");
    });
});
