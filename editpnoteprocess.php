<?php
	$conn = mysqli_connect('localhost', 'root', '', 'Notepad3');
	if(!$conn){
		die("Connection Error". mysqli_connect_error());
	}
	$title = mysqli_real_escape_string($conn,$_POST['title']);
	$content = mysqli_real_escape_string($conn,$_POST['content']);
	$id = mysqli_real_escape_string($conn,$_POST['id']);
	$sql = "UPDATE publicnotes SET title = '$title', content = '$content' WHERE id = '$id'";
	$result = $conn->query($sql);
	if($result){
		echo 1;
	}else{
		echo 0;
	}
?>