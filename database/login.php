<?php
	include'connection.php';
	session_start();
	//checking if the user has confirmed the email or not
	$email = $_POST['email'];
	$query = "SELECT * FROM users WHERE email='$email'";
	$result = $conn->query($query);
	$user = $result->fetch_assoc();
	if($user['active'] == 1)
	{ 
		//
		if(isset($_POST['submit'])){
			$password = $_POST['password'];
			$email = $_POST['email'];
			$sql = "SELECT * FROM users";
			$result = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_assoc($result)){
				if($row['email'] == $email && $row['password'] == md5($password)){
					echo "logged in.";
					$_SESSION['user'] = $row['id'];
					header('location:../user.php');
				}else{
					echo "password and email mismatch";
				}
			}
		}
		//
	}
	else
	{
		echo "Your email has not been verified yet.";
	}
	//
?>