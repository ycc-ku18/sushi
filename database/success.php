<?php
require "connection.php";
session_start();
	$user_id = $_GET['user_id'];
	$query = "UPDATE users SET active= 1 WHERE id = $user_id";
	$result = $conn->query($query);
	header("location:../login.php");
?>