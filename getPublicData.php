<?php
	$conn = mysqli_connect('localhost', 'root', '', 'Notepad3');
	if(!$conn){
		die("Connection Error". mysqli_connect_error());
	}
	$id = $_POST['id'];
	$sql = "SELECT * FROM publicnotes WHERE id = '$id'";
	$result = $conn->query($sql);
	if(!$result){
		header('Location: index.php');
	}
	$row = $result->fetch_assoc();
	$title = $row['title'];
	$content = $row['content'];
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
		echo "<h2 id='dtitle'>".$title."</h2>";
		echo "<p style='float: right;' id='ddate'>".$datedisp."</p>";
		echo "<br><hr>";
		echo "<div id='dcontent'>".$content."</div>";
?>