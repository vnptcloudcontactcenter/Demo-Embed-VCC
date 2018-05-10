<html>
	<head>
		<script src="https://web.vcc-vinaphone.com.vn/js/embed/jquery.min.js" type="text/javascript"></script>
		<script src="https://web.vcc-vinaphone.com.vn/js/embed/jssip-3.0.7.js" type="text/javascript"></script>
		<script src="https://web.vcc-vinaphone.com.vn/js/embed/init-3.0.7.js" type="text/javascript"></script>
		<script src="https://web.vcc-vinaphone.com.vn/js/embed/web.push.js" type="text/javascript"></script>
		<script src="https://web.vcc-vinaphone.com.vn/js/embed/cs_const.js" type="text/javascript"></script>
		<script src="https://web.vcc-vinaphone.com.vn/js/embed/cs_voice.js" type="text/javascript"></script>
		<script src="custom.js" type="text/javascript"></script>
		<script>
			csInit("{{token}}", "{{domain}}")			
		</script>
		<script>
			function onCallout() {
				csCallout($('#phoneNumber').val());
			}
			
		</script>
	</head>
	<body>
		<video id="my-video" autoplay style="display: none;" src="https://web.vcc-vinaphone.com.vn/images/320x240.ogg">
		</video>
		<video id="peer-video" autoplay style="display: none;" src="https://web.vcc-vinaphone.com.vn/images/320x240.ogg">
		</video>
		
		<button id="enable" onclick="csEnableCall()">1. Kích hoạt tab nhận cuộc gọi </button><br/>
		<button id="enable" onclick="changeCallStatus()">2. On/Off trạng thái</button><br/>
		<input type="text" id="phoneNumber"/><button onclick="onCallout()">3. Gọi ra khách hàng</button><br/>
		<button onclick="endCall();">4.Kết thúc gọi ra</button><br/><br/><br/><br/>
		
		<label id="phoneNo"></label><br/>
		<button onclick="onAcceptCall();">I. Nhận cuộc gọi vào</button><br/>
		<button onclick="muteCall();">II.Mute/Unmute</button><br/>
		<button onclick="holdCall();">III.Hold/Unhold</button><br/>
		<button onclick="endCall();">IV.Kết thúc cuộc gọi vào</button><br/>
	</body>
</html>