<?php
	include 'connection.php';
	include 'mail_location.php';
	session_start();
	if(isset($_POST['report'])){
		$description = $_POST['reportDescription'];
		$category = $_POST['category'];
		$coord = $_POST['hiddenCoord'];
		$location = $_POST['reportLocation'];
		$user_id = $_SESSION['user'];
		$count = 0;
		$coordLatLng = array_map('floatval',explode(',', $coord));

		$sql = "SELECT * FROM history WHERE active = 1";
		$result = mysqli_query($conn,$sql);
		$descriptions = array();
		$users = array();
		$categories = array();
		$locations = array();
		$coords = array();
		while($row = mysqli_fetch_assoc($result)){
			$storedLatLng = array_map('floatval',explode(',',$row['coordinates']));
			//TODO: check if same user.
			//logic only works for Nepal
			if($coordLatLng[0] < ($storedLatLng[0] + 0.002) && $coordLatLng[0] > ($storedLatLng[0] - 0.002)){
				if($coordLatLng[1] < ($storedLatLng[1] + 0.003) && $coordLatLng[1] > ($storedLatLng[1] - 0.003)){
					$count++;
					array_push($descriptions,$row['description']);
					array_push($users,$row['user_id']);
					array_push($coords,$row['coordinates']);
					array_push($locations,$row['location']);
					array_push($categories,$row['category_id']);
					if($count >= 3){
						foreach ($users as $user) {
							$sql = "UPDATE history SET active = 0 WHERE user_id = $user";
							$result = mysqli_query($conn,$sql);
						}
						send_mail($users,$categories,$locations,$coords,$descriptions);
						break;
					}
				}
			}
		}
		$sql = "INSERT INTO history(location,coordinates,description,category_id,user_id) VALUES('$location','$coord','$description','$category','$user_id')";
		$result = mysqli_query($conn,$sql);
		header('location:../user.php');

	}

?>