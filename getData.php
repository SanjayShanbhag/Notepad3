<?php
	$uid = $_POST['uid'];
    $token = $_POST['token'];
	$conn = mysqli_connect('localhost', 'root', '', 'Notepad3');
	if(!$conn){
		die("Connection Error". mysqli_connect_error());
	}
    $sql = "SELECT uid FROM user_tokens WHERE token = '$token'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $token_uid = $row['uid'];
    $sql = "SELECT * FROM notes WHERE username = '$token_uid' ORDER BY id DESC";
	$result = $conn->query($sql);
    $num = mysqli_num_rows($result);
    if($num == 0){
        echo "<p>There are no Notes Here! Click on 'Add Note' to get started!</p>";
    }
	while($row = $result->fetch_assoc()){
		$title = $row['title'];
		$body = $row['content'];
		$date = $row['addtime'];
		$datearr = explode(" ", $date);
        $date1 = $datearr[0];
        $time = $datearr[1];
        $date1arr = explode("-", $date1);
        $month = $date1arr[1];
        if($month == '01'){
            $month = "JAN";
        }
        if($month == '02'){
            $month = "FEB";
        }
        if($month == '03'){
            $month = "MAR";
        }
        if($month == '04'){
            $month = "APR";
        }
        if($month == '05'){
            $month = "MAY";
        }
        if($month == '06'){
            $month = "JUN";
        }
        if($month == '07'){
            $month = "JUL";
        }
        if($month == '08'){
            $month = "AUG";
        }
        if($month == '09'){
            $month = "SEP";
        }
        if($month == '10'){
            $month = "OCT";
        }
        if($month == '11'){
            $month = "NOV";
        }
        if($month == '12'){
            $month = "DEC";
        }
        $datedisp = $date1arr[2]."-".$month;
        $flag1 = 0;
		if ((strlen($body) > 100) && (strlen($body) > 1)) { 
            $whitespaceposition = strpos($body," ",95); 
            $body = substr($body, 0, $whitespaceposition);
            $flag1 = 1;
        }
        if($flag1 == 1){
           	$body = $body."...";
        }
        $id = $row['id'];
        echo "<div class='col-sm-12 col-md-6 col-lg-6'>";
        	echo "<a href='note.php?id=".$id."' style='text-decoration: none; color: #212121; cursor: pointer;'><div class='card'>";
        		echo "<h3>".$title."</h3>";
        		echo "<p>".$datedisp."</p>";
        		echo "<p>".$body."</p>";
        	echo "</div></a>";
        echo "</div>";
    }
?>