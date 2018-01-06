<?php
	include'connection.php';

	if(isset($_POST['submit'])){
		$password = $_POST['password'];
		$conf_password = $_POST['confirm_password'];
		$email = $_POST['email'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];

		if($password == $conf_password){
			$password = md5($password);
			$sql = "INSERT INTO users(name,email,phone,password) VALUES('$name','$email','$phone','$password')";
			$result = mysqli_query($conn, $sql);
			$sql = "SELECT * FROM users WHERE email = '$email'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
			$_SESSION['user'] = $row['id'];

			//for conformation email
			$to = $email;
			$subject ="Conformation email for logiing in.";
			$body = "Please press on the link below to confirm your email.

			http://localhost/markforfreedom/database/success.php?user_id=".$_SESSION['user']."&email=".$email;
			mail($to, $subject, $body);
			//
			echo "Conformation link has been sent to your email";
			//header('location:../user.php');
		}else{
			echo "Password Mismatch Error!";
		}
	}
?>