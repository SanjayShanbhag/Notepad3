<?php
	$conn = mysqli_connect('localhost', 'root', '', 'Notepad3');
	if(!$conn){
		die("Connection Error". mysqli_connect_error());
	}
	$title = mysqli_real_escape_string($conn,$_POST['title']);
	$content = mysqli_real_escape_string($conn,$_POST['content']);
	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$token = $_POST['token'];
	$sql = "SELECT uid FROM user_tokens WHERE token = '$token'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$token_uid = $row['uid'];
	if(isset($token_uid) && !empty($token_uid)){
		$sql = "INSERT INTO notes(title,content,username) VALUES('$title', '$content', '$token_uid')";
		$result = $conn->query($sql);
		if($result){
			echo 1;
		}else{
			echo 0;
		}
	}else{
		echo 2;
	}
?>