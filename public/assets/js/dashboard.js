$('body').delegate(".webrtc-call", "click",function () {
    var username = $(this).parents('.webrtc-user').data('username');
    dashboard.call(username);
    answerCall(username);
}).delegate(".webrtc-decline", "click",function () {
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
}).on('webrtc-call', function (event, username, dfd) {
    incomingCall(username).done(function () {
        dfd.resolve();
        answerCall(username);
    }).fail(function () {
        dfd.reject();
    });
    dfd.promise().always(function () {
        incomingCallEnd();
    })
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
    $('.incoming-call audio')[0].play();
    $('.incoming-call').show()
        .find('.who').text(from).end()
        .find('.answer').click(function () {
            dfd.resolve(from);
            incomingCallEnd();
            return false;
        }).end()
        .find('.decline').click(function () {
            dfd.reject(from);
            incomingCallEnd();
            return false;
        });
    return dfd.promise();
}

function incomingCallEnd() {
    $('.incoming-call').hide();
    $('.incoming-call audio')[0].pause();
}