$(window).bind('beforeunload', function (e) {
	if (1==1) {
		return 'abc';
	}
}); 

$(window).bind('unload', function () {
	csUnregister();
	if (csVoice.enableVoice) {
		reConfigDeviceType();
	}
});
	
// kết thúc cuộc gọi ra/vào
function csEndCall() {
	console.log("Call is ended");
	document.getElementById('phoneNo').innerHTML = "";
}

// đổ chuông trình duyệt của agent khi gọi ra
function csCallRingingAgent() {
	console.log("Has a new call to agent");
}

// đổ chuông trình duyệt của agent khi gọi vào
// đổ chuông tới khách hàng khi gọi ra
function csCallRinging(phone) {
	console.log("Has a new call to customer: " + phone);
    document.getElementById('phoneNo').innerHTML = phone + ' đang gọi ...';
}

// cuộc gọi vào được agent trả lời
function csAcceptCall() {
	console.log("Call is Accepted");
	document.getElementById('phoneNo').innerHTML = "Đang trả lời";
}

// cuộc gọi ra được khách hàng trả lời
function csCustomerAccept() {
	console.log("csCustomerAccept");
	document.getElementById('phoneNo').innerHTML = "Đang trả lời";
}

function csMuteCall() {
	console.log("Call is muted");
}

function csUnMuteCall() {
	console.log("Call is unmuted")
}

function csHoldCall() {
	console.log("Call is holded");
}

function csUnHoldCall() {
	console.log("Call is unholded");
}

function showCalloutInfo(number) {
	console.log("callout to " + number);
}

function showCalloutError(errorCode, sipCode) {
	console.log("callout error " + errorCode + " - " + sipCode);
}

function csShowEnableVoice(enableVoice) {
	if (enableVoice) {
		$('#enable').attr('disabled','disabled');
	} else {
		$('#enable').removeAttr('disabled');
	}
}

function csShowDeviceType(type) {
	console.log("csShowDeviceType");
}

function csShowCallStatus(status) {
	console.log("csShowCallStatus");
}

function csInitComplete() {
	if (!csVoice.enableVoice) {
	   csEnableCall();
    }
	console.log("csInitComplete");
}

function csCurrentCallId(callId) {
	console.log("csCurrentCallId: " + callId);
}

function csInitError(error) {
	console.log("csInitError: " + error);
}

