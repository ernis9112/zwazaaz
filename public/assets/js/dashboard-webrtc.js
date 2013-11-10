!function (window) {
    var currentRoom;
    var webrtc;
    var username;
    var $localVideoEl;
    var $remoteVideosEl;
    var localVideoStarted;

    function bind() {
        webrtc.connection.emit('online', username, function (usernames) {
            console.log('online on connection', usernames.split(','));
            $.each(usernames.split(','), function (key, username) {
                $.event.trigger('webrtc-online', [username]);
            });
        });
        webrtc.connection.on('online', function (username) {
            console.log('online ', username);
            $.event.trigger('webrtc-online', [username]);
        });
        webrtc.connection.on('offline', function (username) {
            console.log('offline ', username);
            $.event.trigger('webrtc-offline', [username]);
        });
        webrtc.connection.on('call', function (data) {
            console.log('call from ', data.username, 'to join', data.room);
            var answer = function answer() {
                join(data.room);
            };
            var decline = function decline() {
                webrtc.connection.emit('decline', data.room);
            };
            $.event.trigger('webrtc-call', [data.username, answer, decline]);
        });
        webrtc.connection.on('decline', function (data) {
            console.log('decline from ', data.username, 'to join', data.room);
            leaveRoom();
            $.event.trigger('webrtc-decline', [data.username, data.room]);
        });
        webrtc.on('videoRemoved', function () {
            console.log('videoRemoved leaveRoom');
            leaveRoom();
            $.event.trigger('webrtc-close', []);
        });
    }

    function startLocalVideo() {
        if (!localVideoStarted) {
            var dfd = new $.Deferred();
            webrtc.startLocalVideo();
            // we have to wait until it's ready
            webrtc.once('readyToCall', function () {
                dfd.resolve();
            });
            localVideoStarted = dfd.promise();
        }
        return localVideoStarted;
    }

    function join(room) {
        var dfd = new $.Deferred();
        leaveRoom();
        currentRoom = room;
        startLocalVideo().done(function () {
            webrtc.joinRoom(room);
            dfd.resolve(room);
        });
        return dfd.promise();
    }
    function leaveRoom() {
        $remoteVideosEl.empty();
        if (!currentRoom) {
            return ;
        }
        currentRoom = null;
        webrtc.connection.emit('decline', currentRoom);
        webrtc.leaveRoom();
    }


    var api = {
        init: function init(options) {
            username = options.username;
            webrtc = new SimpleWebRTC(options);
            $localVideoEl = $(options.localVideoEl);
            $remoteVideosEl = $(options.remoteVideosEl);
            webrtc.connection.on('connect', function () {
                bind();
            });
        },
        call: function call(username) {
            var room = btoa(Math.random()).substr(7,15);
            join(room).done(function () {
                webrtc.connection.emit('call', username, room);
            });
        },
        leave: function leave() {
            leaveRoom();
        }
    };
    window.dashboard = api;
}(window);