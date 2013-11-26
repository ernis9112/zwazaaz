$(document).ready(function(){
    $('#sidebarTabs1 a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
        console.log("test1");
    })
    $('.toggle-sidebar').click(function(){
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

    $(".webrtc-call").click(function(){
        $($('.toggle-sidebar').attr('data-target')).removeClass("active");
    });
    $(".incoming-call .call-actions .answer").click(function(){
        $($('.toggle-sidebar').attr('data-target')).removeClass("active");
    });

    var statusSelectContainer = $(".user-status .online-status");
    var listElements = "";
    $("select option", statusSelectContainer).each(function(){
        listElements += "<li><i class='icon icon-"+$(this).text()+"'></i>"+$(this).text()+"</li>";
    });
    var styledStatusSelect = "<div class='custom-status-select'><span class='selected'><i class='icon icon-online'></i> </span><ul>"+listElements+"</ul></div>";
    statusSelectContainer.append(styledStatusSelect);
    $(".custom-status-select", statusSelectContainer).not(".open").click(function(){
        $(this).addClass("open");
    });
    $("li", statusSelectContainer).click(function(event){
        event.stopPropagation();
        $(".custom-status-select").removeClass("open");
        $(".online-status select option:selected").prop('selected', false);
        $(".online-status select option").eq($(this).index()).prop('selected', true);
        $(".online-status select").trigger("change");
    });
    $(".online-status select").change(function(){
        $(".custom-status-select .selected i").attr("class", "icon icon-"+$(".online-status select option:selected").text());
    })
});