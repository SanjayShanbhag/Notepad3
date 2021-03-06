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
 		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script type="text/javascript" src="plugin/tinymce/tinymce.min.js"></script>
        <script type="text/javascript" src="plugin/tinymce/init-tinymce.js"></script>
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
            function encodestring(cname){
                var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/[^A-Za-z0-9+/=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/rn/g,"n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}}
                return Base64.encode(cname);
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
            }
            function add1(titl, cont, username2, tokenvalue2){
                var db;
                var request1 = indexedDB.open("Notepad3",1);
                request1.onsuccess = function (evt) {
                    db = request1.result;
                    var request = db.transaction(["notesOffline"], "readwrite")
                    .objectStore("notesOffline")
                    .add({ title: titl, content: cont, username: username2, token: tokenvalue2});
                }
            }
            function submit(){
                var cont = tinyMCE.get('content').getContent();
                var titl = document.getElementById('title').value;
                if(!titl || /^\s*$/.test(titl)){
                    var x = document.getElementById("snackbar");
                    x.innerHTML = "Title and Content is required.";
                    x.className = "show";
                    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
                    return;
                }
                if(!cont || /^\s*$/.test(cont)){
                    var x = document.getElementById("snackbar");
                    x.innerHTML = "Title and Content is required.";
                    x.className = "show";
                    return;
                }
                var username2 = getCookie("logindta");
                var tokenvalue2 = getCookie("pos1307");
                username2 = decodestring(username2);
                var url = "addnoteprocess.php";
                if(navigator.onLine){
                    syncing();
                    $.post(url,{username: username2, title: titl, content: cont, token: tokenvalue2}, function(data){
                        if(data == 2){
                            var x = document.getElementById("snackbar");
                            x.innerHTML = "Please Logout and Login Again.";
                            x.className = "show";
                            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
                        }else{
                            var x = document.getElementById("snackbar");
                            document.getElementById("submitsave").onclick = null;
                            document.getElementById("submitsave").innerHTML = "Saved";
                            x.innerHTML = titl+", Has Been Saved.";
                            x.className = "show";
                            setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
                        }
                    });
                }else{
                    titl = encodestring(titl);
                    cont = encodestring(cont);
                    username2 = encodestring(username2);
                    add1(titl, cont, username2, tokenvalue2);
                    var x = document.getElementById("snackbar");
                    document.getElementById("submitsave").onclick = null;
                    document.getElementById("submitsave").innerHTML = "Saved";
                    x.innerHTML = "Note Has Been Saved Offline. It Will Be Synced When You Connect To Internet.";
                    x.className = "show";
                    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
                }
            }
            function logout(){
                document.cookie = "logindta=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                document.cookie = "pos1307=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
                window.location = "login.php";
            }


            function syncing(){
                var db;
                var request1 = indexedDB.open("Notepad3",1);
                request1.onsuccess = function (evt) {
                    db = request1.result;
                    var objectStore = db.transaction("notesOffline").objectStore("notesOffline");
                    objectStore.openCursor().onsuccess = function(event) {
                        var cursor = event.target.result;
                        if (cursor) {
                            var titl = cursor.value.title;
                            var cont = cursor.value.content;
                            var uid = cursor.value.username;
                            titl = decodestring(titl);
                            cont = decodestring(cont);
                            uid = decodestring(uid);
                            var token = cursor.value.token;
                            var type = 1;
                            var url1 = "onlineSync.php";
                            $.post(url1, {username: uid, title: titl, content: cont, type: type, token: token}, function(data){
                                console.log("One Success");
                            });
                            cursor.continue();
                        }
                    };
                }

                var request2 = indexedDB.open("Notepad3",1);
                request2.onsuccess = function (evt) {
                    db2 = request2.result;
                    var objectStore2 = db2.transaction("notesOfflineEdits").objectStore("notesOfflineEdits");
                    objectStore2.openCursor().onsuccess = function(event) {
                        var cursor2 = event.target.result;
                        if (cursor2) {
                            var titl = cursor2.value.title;
                            var cont = cursor2.value.content;
                            var uid = cursor2.value.username;
                            var nid = cursor2.value.id;
                            var token = cursor2.value.token;
                            titl = decodestring(titl);
                            cont = decodestring(cont);
                            uid = decodestring(uid);
                            var type = 2;
                            var url1 = "onlineSync.php";
                            $.post(url1, {username: uid, title: titl, content: cont, type: type, nid: nid, token: token}, function(data){
                                console.log("Two Success");
                            });
                            cursor2.continue();
                        }
                    };
                }

                var db3;
                var request3 = indexedDB.open("Notepad3",1);
                request3.onsuccess = function (evt) {
                    db3 = request3.result;
                    var request4 = db3.transaction(["notesOfflineEdits"], "readwrite")
                    .objectStore("notesOfflineEdits")
                    .clear();
                }

                var db4;
                var request4 = indexedDB.open("Notepad3",1);
                request4.onsuccess = function (evt) {
                    db4 = request4.result;
                    var request5 = db4.transaction(["notesOffline"], "readwrite")
                    .objectStore("notesOffline")
                    .clear();
                }
            }
            window.addEventListener('online', function(e) {
                syncing();
            }, false);

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
                <h4>Title: </h4>
                <input type="text" name="title" id="title" class="form-control" placeholder="Add Title">
                <br>
                <h4>Your Note: </h4>
                <TEXTAREA  class="tinymce" name="content" id="content"></TEXTAREA>
                <br>
                <div style="display: flex; justify-content: center;">
                    <button class="btn btn-primary" onclick="submit()" id="submitsave">Save</button>
                </div>
                <br><br>
                <div id="snackbar"></div>
            </div>
        </div>
    </body>
</html>