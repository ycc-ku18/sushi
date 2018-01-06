<?php
	function send_mail($users,$category,$location,$coord,$descriptions){
		include 'connection.php';
		$to = "anukulparajuli9@gmail.com";//to ngo mail
		$subject = "Report from Mark for Freedom";
		
		$body = " Mark for Freedom \n List of Reports: \n";
		for ($i = 0; $i < count($users); $i++) {
			$sql = "SELECT * FROM users WHERE id = $users[$i]";
			$result = mysqli_query($conn,$sql);
			$row = mysqli_fetch_assoc($result);
			$body .= "Email:" . $row['email'];
			$body .= "\n";
			$body .= "Phone No.: " . $row['phone'];
			$body .= "\n";
			$body .= "\nCategory: ";
			$body .= $category[$i];
			$body .= "\nLocation: ";
			$body .= $location[$i];
			$body .= "\nCoordinates: ";
			$body .= $coord[$i];
			$body .= "\nDescription: \n";
			$body .= $descriptions[$i];
			$body .= "\n \n";
		}

		mail($to,$subject,$body);
	}

?>