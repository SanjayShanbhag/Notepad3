<?php
	$conn = mysqli_connect('localhost', 'root', '', 'Notepad3');
	if(!$conn){
		die("Connection Error". mysqli_connect_error());
	}
	$uid = $_POST['username'];
    $token = $_POST['token'];
    $sql = "SELECT uid FROM user_tokens WHERE token = '$token'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $token_uid = $row['uid'];
	$sql = "SELECT * FROM notes WHERE username = '$token_uid' ORDER BY id DESC";
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc()){
		$body = $row['content'];
		$flag1 = 0;
		if ((strlen($body) > 100) && (strlen($body) > 1)) { 
            $whitespaceposition = strpos($body," ",95); 
            $body = substr($body, 0, $whitespaceposition);
            $flag1 = 1;
        }
        if($flag1 == 1){
           	$body = $body."...";
        }
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
		$table_data[] = array("id:".$row['id'],"title:".$row['title'], "content:".$row['content'], "time1:".$datedisp, "excerpt:".$body);
	}
	echo json_encode($table_data);
?>