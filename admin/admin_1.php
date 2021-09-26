<?php
session_start();

include("include/conn.php");

			   
if( isset($_POST['login']) && isset($_POST['Username']) && !empty($_POST['Username']) AND isset($_POST['Password']) && !empty($_POST['Password'])){

	$Username= $_POST['Username'];
	$Password=$_POST['Password'];

	$query= "SELECT *FROM admin WHERE Username='$Username' AND Password='$Password' ";
	$result=mysqli_query($conn , $query);
	$count=mysqli_num_rows($result);


	if($count==1)

	{
		$_SESSION['Username'] = $Username;
		$_SESSION['Password'] = $Password;
		$_SESSION['login'] = true;

		echo "<script>alert('you are logged in')</script>";
		echo "<script>window.open('questions_answers.php' , '_self')</script>";

	}

	else
	{
		echo "<script>alert('incorrect username or password')</script>";
		echo "<script>window.open('index.php' , '_self')</script>";

	}
}

?>