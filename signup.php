<!DOCTYPE html>
<html>
<head>
	<title>Notepad3 Signup</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.png" />
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
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
 		function createuser(){
 			var name = document.getElementById('name').value;
 			var email = document.getElementById('email').value;
 			var username = document.getElementById('username').value;
 			var password = document.getElementById('pwd').value;
 			var checker = 0;
 			if(!name){
 				alert("Enter The Name");
 				checker = 1;
 			}
 			if(!email){
 				alert("Enter The Email");
 				checker = 1;
 			}
 			if(!username){
 				alert("Enter The Username");
 				checker = 1;
 			}
 			if(!password){
 				alert("Enter The Password");
 				checker = 1;
 			}
 			if(checker == 0){
 				var url = "adduser.php";
 				$.post(url,{name: name, email: email, username: username, password: password}, function(data){
 					document.getElementById('result').innerHTML = "";
                    $('.result').append(data);
            		document.getElementById('name').innerHTML = "";
            		document.getElementById('email').innerHTML = "";
            		document.getElementById('username').innerHTML = "";
            		document.getElementById('pwd').innerHTML = "";
                });
 			}
 		}
 	</script>
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
</head>
<body>
	<div id="loading-bg"></div>
    <img id="loading-image" src="images/loader.gif" alt="">
	<div class="container-fluid back">
		<div class="content">
			<br><br><br><br><br><br><br>
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-md-4 col-lg-4">
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="loginbox">
							<br>
							<img src="images/logo.png" class="center-block" style="height: 80px; width: 250px;">
							<h3 style="text-align: center; margin-top: 0; color: #223E76;">Sign Up</h3>
							<br>
							<input type="text" name="name" id="name" placeholder="Name" class="form-control">
							<br>
							<input type="email" name="email" id="email" placeholder="E-Mail" class="form-control">
							<br>
							<input type="text" name="username" id="username" placeholder="Username" class="form-control">
							<br>
							<input type="password" name="pwd" id="pwd" placeholder="Password" class="form-control">
							<br>
							<p style="color: #636363;">By clicking on Register, I accept to the <a style="color: #000000; text-decoration: none;" href="terms-and-conditions.html">Terms and Conditions</a> and <a style="color: #000000; text-decoration: none;" href="privacy-policy.html">Privacy Policy</a></p>
							<br>
							<div style="display: flex; justify-content: center;">
								<button class="btn btn-primary" onclick="createuser()">Register</button>
							</div>
							<br>
							<div class="result" id="result">
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>