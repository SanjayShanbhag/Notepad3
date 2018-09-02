<?php
	$conn = mysqli_connect('localhost', 'root', '', 'Notepad3');
	if(!$conn){
		die("Connection Error". mysqli_connect_error());
	}
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$sql = "SELECT id FROM users WHERE username = '$username'";
	$result = $conn->query($sql);
	if(mysqli_num_rows($result) > 0){
		echo "<p style='color: red;'>Please choose a different username. This username is already chosen.</p>";
	}else{
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$hash = password_hash($password, PASSWORD_BCRYPT);
		$sql = "INSERT INTO users(name,email,username,pwd) VALUES('$name', '$email', '$username', '$hash')";
		$result = $conn->query($sql);
		echo "<p style='color:#1B5E20;'>Your Account Has Been Successfully Created. Please Continue to <a href='login.php' style='text-decoration: none;'>Login</a>.</p>";
	}
?>