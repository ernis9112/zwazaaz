<script src="<?php echo asset('js/socket.io.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('js/simplewebrtc.bundle.js'); ?>" type="text/javascript"></script>
<script src="<?php echo asset('js/jquery-1.10.2.min.js'); ?>" type="text/javascript"></script>
<style>
	#video {
		display: none;
	}
	#remoteVideos {

	}
	#localVideo {
		position: fixed;
		bottom: 15px;
		right: 15px;
	}
	#localVideo video {
		height: 150px;
	}
	#answer {
		background: green;
		color: white;
		display: none;
		position: absolute;
		right: 20%;
		left: 20%;
		top: 20%;
		bottom: 20%;
	}
</style>
<form id="login">
	<input name="name"/>
	<input type="submit" value="Login"/>
</form>

<div id="video">
	<div id="localVideo"></div>
	<div id="remoteVideos"></div>

	<a id="answer" href="#"></a>

	<form id="call">
		<input name="name"/>
		<input type="submit" value="Call"/>
		<input type="submit" name="endCall" value="End Call"/>
	</form>
</div>

<script>
var username;
function video(username) {
	var currentRoom;
	var webrtc = new SimpleWebRTC({
		url: "http://144.76.59.98:8888",
		debug: true,
		// the id/element dom element that will hold "our" video
		localVideoEl: 'localVideo',
		// the id/element dom element that will hold remote videos
		remoteVideosEl: 'remoteVideos',
		// immediately ask for camera access
		autoRequestMedia: false
	});
	webrtc.connection.on('connect', function () {
		init();
	});

	function init() {
		webrtc.connection.emit('online', username, function (usernames) {
			console.log('online on connection', usernames);
		});
		webrtc.connection.on('online', function (username) {
			console.log('online ', username);
		});
		webrtc.connection.on('offline', function (username) {
			console.log('offline ', username);
		});
		webrtc.connection.on('call', function (data) {
			console.log('call from ', data.username, 'to join', data.room);
			$('#answer').text("Call from " + data.username).show().click(function () {
				$(this).hide();
				join(data.room);
			});
		});
	}

	function join(room) {
		currentRoom && leave();
		currentRoom = room;
		webrtc.startLocalVideo();
		// we have to wait until it's ready
		webrtc.once('readyToCall', function () {
			webrtc.joinRoom(currentRoom);
		});
	}
	function leave() {
		currentRoom = null;
		webrtc.leaveRoom();
		webrtc.stopLocalVideo();
		$('#localVideo').empty();
		$('#remoteVideos').empty();
	}

	$('#call').submit(function (event) {
		event.preventDefault();
		var name = $(this).find('[name="name"]').val();
		if (!name) {
			return ;
		}
		var room = btoa(Math.random()).substr(7,15);
		webrtc.connection.emit('call', name, room);
		join(room);

	}).find('[name="endCall"]').click(function (event) {
		event.preventDefault();
		leave();
	});
}

$('#login').submit(function (event) {
	event.preventDefault();
	username = $(this).find('[name="name"]').val();
	if (!username) {
		return ;
	}
	$('#video').show();
	$(this).hide();
	video(username);
});
</script>