<?php
	$conn = mysqli_connect('localhost', 'root', '', 'Notepad3');
	if(!$conn){
		die("Connection Error". mysqli_connect_error());
	}
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT pwd FROM users WHERE username = '$username'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$hash = $row['pwd'];
	if(password_verify($password, $hash)){
		$length = 20;
		$token = bin2hex(random_bytes($length));
		$sql = "INSERT INTO user_tokens(uid,token) VALUES('$username', '$token')";
		$result = $conn->query($sql);
		setcookie("pos1307", $token, time() + 31536000);
		$value = 1;
		echo $value;
	}else{
		$value = 0;
		echo $value;
	}
?>