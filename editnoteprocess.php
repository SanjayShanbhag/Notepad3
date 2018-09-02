<?php
	$conn = mysqli_connect('localhost', 'root', '', 'Notepad3');
	if(!$conn){
		die("Connection Error". mysqli_connect_error());
	}
	$title = mysqli_real_escape_string($conn,$_POST['title']);
	$content = mysqli_real_escape_string($conn,$_POST['content']);
	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$token = $_POST['token'];
	$id = mysqli_real_escape_string($conn,$_POST['id']);
	$sql = "SELECT uid FROM user_tokens WHERE token = '$token'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$token_uid = $row['uid'];
	if(isset($token_uid) && !empty($token_uid)){
		$sql = "SELECT username FROM notes WHERE id = '$id'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		if($row['username'] == $token_uid){
			$sql = "UPDATE notes SET title = '$title', content = '$content' WHERE id = '$id'";
			$result = $conn->query($sql);
			if($result){
				echo 1;
			}else{
				echo 0;
			}
		}else{
			echo 0;
		}
	}else{
		echo 0;
	}

?>