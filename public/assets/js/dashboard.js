//$('.webrtc-call').click(function () {
$('body').delegate(".webrtc-call", "click",function () {
    var username = $(this).parents('.webrtc-user').data('username');
    dashboard.call(username);
    answerCall(username);
});
$('body').delegate(".webrtc-decline", "click",function () {
//$('.webrtc-decline').click(function () {
    declineCall();
    dashboard.leave();
});
$(document)
.on("webrtc-online", function (event, username) {
    $('#webrtc-user-' + username).find('.status').addClass('online').removeClass('away offline');
}).on("webrtc-offline", function (event, username) {
    $('#webrtc-user-' + username).find('.status').addClass('offline').removeClass('away online');
}).on("webrtc-away", function (event, username) {
    $('#webrtc-user-' + username).find('.status').addClass('away').removeClass('online offline');
}).on('webrtc-call', function (event, username, answer, decline) {
    incomingCall(username).done(function () {
        answer();
        answerCall(username);
    }).fail(function () {
        decline();
    });
}).on('webrtc-decline', function (event, username, room) {
    declineCall();
}).on('webrtc-close', function (event) {
    declineCall();
});
function answerCall(from) {
    $('.web-cam-wrapper').show();
}
function declineCall(from) {
    $('.web-cam-wrapper').hide();
}
function incomingCall(from) {
    var dfd = new jQuery.Deferred();
    $('.incoming-call').show()
        .find('.who').text(from).end()
        .find('.answer').click(function () {
            dfd.resolve(from);
            $('.incoming-call').hide();
            return false;
        }).end()
        .find('.decline').click(function () {
            dfd.reject(from);
            $('.incoming-call').hide();
            return false;
        });
    return dfd.promise();
}