<?php
	$conn = mysqli_connect('localhost', 'root', '', 'Notepad3');
	if(!$conn){
		die("Connection Error". mysqli_connect_error());
	}
	$uid = mysqli_real_escape_string($conn, $_POST['username']);
	$content = mysqli_real_escape_string($conn, $_POST['content']);
	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$type = mysqli_real_escape_string($conn, $_POST['type']);
	$token = $_POST['token'];
	$sql = "SELECT uid FROM user_tokens WHERE token = '$token'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$token_uid = $row['uid'];
	if(isset($token_uid) && !empty($token_uid)){
		if($type == 1){
			$sql = "INSERT INTO notes(title, content, username) VALUES('$title', '$content', '$token_uid')";
			$result = $conn->query($sql);
		}else{
			$nid = $_POST['nid'];
			$sql = "SELECT username FROM notes WHERE id = '$nid'";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			if($row['username'] == $token_uid){
				$sql = "UPDATE notes SET title = '$title', content = '$content' WHERE id = '$nid'";
				$result = $conn->query($sql);
			}
		}
		echo "Success";
	}
