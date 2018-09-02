<!DOCTYPE html>
<html>
	<head>
		<title>Notepad3</title>
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
		<meta charset="utf-8">
        <link rel="manifest" href="manifest.json">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    	<link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <!-- Chrome for Android theme color -->
        <meta name="theme-color" content="#DD2C00">

        <!-- Add to homescreen for Chrome on Android -->
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="application-name" content="Notepad3">
        <link rel="icon" sizes="192x192" href="favicon.png">

        <!-- Add to homescreen for Safari on iOS -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="Notepad3">
        <link rel="apple-touch-icon" href="favicon.png">

        <!-- Tile for Win8 -->
        <meta name="msapplication-TileColor" content="#DD2C00">
        <meta name="msapplication-TileImage" content="favicon.png">
 		<link rel="stylesheet" type="text/css" href="CSS/w3.css">
 		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 		<script type="text/javascript">
        	$(function() {
            	$('#loading-bg').hide();
            	$('#loading-image').hide();

            	$(window).on('beforeunload', function() {
                	$('#loading-bg').show();
                	$('#loading-image').show();
            	});
        	});
    	</script>
    	<script>
			function w3_open() {
    			document.getElementById("mySidebar").style.display = "block";
			}
			function w3_close() {
   	 			document.getElementById("mySidebar").style.display = "none";
			}
		</script>
		<script type="text/javascript">
			checkLogin();
			function getCookie(cname) {
    			var name = cname + "=";
    			var decodedCookie = decodeURIComponent(document.cookie);
    			var ca = decodedCookie.split(';');
    			for(var i = 0; i <ca.length; i++) {
        			var c = ca[i];
        			while (c.charAt(0) == ' ') {
            			c = c.substring(1);
        			}
        			if (c.indexOf(name) == 0) {
            			return c.substring(name.length, c.length);
        			}
    			}
    			return "";
			}
			function decodestring(cname){
				var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/[^A-Za-z0-9+/=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/rn/g,"n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}}
				return Base64.decode(cname);
			}
			function checkLogin(){
				var cookievalue = getCookie("logindta");
                var tokenvalue = getCookie("pos1307");
				if(cookievalue == "" || tokenvalue == ""){
					window.location = "login.php";
				}
			}
			function getUserName(){
				var username1 = getCookie("logindta");
				username1 = decodestring(username1);
				document.getElementById('userName').innerHTML = username1;
                getData();
			}
            function getData(){
                if(navigator.onLine){
                    var url = "getData.php";
                    var uid = getCookie("logindta");
                    uid = decodestring(uid);
                    var tokenvalue2 = getCookie("pos1307");
                    $.post(url, {uid: uid, token: tokenvalue2},  function(data){
                        document.getElementById('dipno').style.display = "none";
                        $('.cont').append(data);
                    });
                }else{
                    var db;
                    var request1 = indexedDB.open("Notepad3",1);
                    request1.onsuccess = function (evt) {
                        db = request1.result;
                        var objectStore = db.transaction("notes").objectStore("notes");
                        objectStore.openCursor().onsuccess = function(event) {
                            var cursor = event.target.result;
                            if (cursor) {
                                var username = cursor.value.username;
                                var uid = getCookie('logindta');
                                uid = decodestring(uid);
                                if(username == uid){
                                    document.getElementById('dipno').style.display = "none";
                                    var id = cursor.value.noteid;
                                    var title = cursor.value.title;
                                    title = decodestring(title);
                                    var time = cursor.value.addtime;
                                    time = decodestring(time);
                                    var excerpt = cursor.value.excerpt;
                                    excerpt = decodestring(excerpt);


                                    var div = document.createElement('div');
                                    div.setAttribute("class", "col-sm-12 col-lg-6 col-md-6");
                                    var div1 = document.createElement('div');
                                    div1.setAttribute("class", "card");
                                    var z = document.createElement("H3");
                                    var t = document.createTextNode(title);
                                    z.appendChild(t);
                                    div1.appendChild(z);
                                    var z = document.createElement("P");
                                    z.style.float = "right";
                                    var t = document.createTextNode(time);
                                    z.appendChild(t);
                                    div1.appendChild(z);
                                    var x = document.createElement('BR');
                                    div1.appendChild(x);
                                    var x = document.createElement('HR');
                                    div1.appendChild(x);
                                    var z = document.createElement("P");
                                    z.innerHTML = excerpt;
                                    div1.appendChild(z);

                                    var url = "note.php?id="+id;
                                    var anchor = document.createElement("A");
                                    anchor.style.textDecoration ="none";
                                    anchor.style.color = "#212121";
                                    anchor.setAttribute("href", url);
                                    anchor.appendChild(div1);

                                    div.appendChild(anchor);
                                    var div2 = document.getElementById('cont');
                                    div2.appendChild(div);

                                    
                                }
                                cursor.continue();
                            }
                        };
                    }
                }
            }

            function logout(){
                document.cookie = "logindta=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                document.cookie = "pos1307=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                window.location = "login.php";
            }
		</script>
 	</head>
	<body onload="getUserName()">
		<div id="loading-bg"></div>
        <img id="loading-image" src="images/loader.gif" alt="">
        <div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:250px;" id="mySidebar">
  			<button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
  			<div class="topleft">
  				<div class="innertopleft">
  					<img src="images/user.jpg" style="width: 50px; height: 50px; border-radius: 50px; margin-top: 50px; margin-left: 20px;"> 
  					<br>
  					<h4 id='userName' style="margin-left: 20px; color: #FAFAFA;"></h4>
                </div>
            </div>
            <a href="index.php" class="w3-bar-item w3-button" style="text-decoration: none;"><i class="fa fa-home"></i> Home</a>
            <a href="addnote.php" class="w3-bar-item w3-button" style="text-decoration: none;"><i class="fa fa-plus"></i> Add Note</a>
            <a href="syncoffline.php" class="w3-bar-item w3-button" style="text-decoration: none;"><i class="fa fa-refresh"></i> Sync Data Offline</a>
            <a href="addpublicnote.php" class="w3-bar-item w3-button" style="text-decoration: none;"><i class="fa fa-plus"></i> Add Public Note</a>
            <a href="about.php" class="w3-bar-item w3-button" style="text-decoration: none;"><i class="fa fa-info-circle"></i> About</a>
            <a onclick="logout()" class="w3-bar-item w3-button" style="text-decoration: none;"><i class="fa fa-power-off"></i> Logout</a>
        </div>
		<div class="w3-main" style="margin-left:250px">
			<div class="w3-deep-orange">
  				<button class="w3-button w3-deep-orange w3-xlarge w3-hide-large" onclick="w3_open()"><i class="fa fa-bars"></i></button>
  				<div class="w3-container">
    				<h1>Notepad3</h1>
  				</div>
			</div>
			<div class="container">
				<br><br>
                <div class="cont" id="cont">
                </div>
                <div id="dipno">
                    <p>There are no notes to show at the moment. Either you have not added any notes or they are not yet available offline. If you have notes, click on 'Sync Data Offline' when online to save all your notes offline.</p>
                </div>
			</div>
		</div>
		<script>
            
            if('serviceWorker' in navigator){
                navigator.serviceWorker.register('service-worker2.js')
                .then(function(registration) {
                    console.log('Registration Completed: ', registration);
                })
                .catch(function(error) {
                    console.log('Registration Failed: '. error);
                });
            }
            
        </script>
	</body>
</html>