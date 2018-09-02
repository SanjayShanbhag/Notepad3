<?php
	$conn = mysqli_connect('localhost', 'root', '', 'Notepad3');
	if(!$conn){
		die("Connection Error". mysqli_connect_error());
	}
	$title = mysqli_real_escape_string($conn,$_POST['title']);
	$content = mysqli_real_escape_string($conn,$_POST['content']);
	$sql = "INSERT INTO publicnotes(title,content) VALUES('$title', '$content')";
	$result = $conn->query($sql);
	if($result){
		$sql = "SELECT SCOPE_IDENTITY()";
		$result = $conn->query($sql);
		$id = mysqli_insert_id($conn);
		echo $id;
	}else{
		echo 0;
	}
?>