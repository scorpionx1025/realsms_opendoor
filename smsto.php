<?php
    //這邊置入控制門禁PUSH/EXIT的方法
	//Socket TCP / HTTP REST / MQTT
	//doSomething();
?>
<html>
<script>
var ua = navigator.userAgent.toLowerCase();
var isAndroid = ua.indexOf("android") > -1; //&& ua.indexOf("mobile");

window.onload = function() { 
    if (isAndroid) {
        location.href = "sms:1922?body=場所代碼：1234567812345678 你好咖啡旅店暫不提供內用服務"
    } else {
        // iOS
        location.href = "sms:1922&body=場所代碼：1234567812345678 你好咖啡旅店暫不提供內用服務"
    }
}
</script>
</html>