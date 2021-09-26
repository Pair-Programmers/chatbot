<?php
session_start();
include("include/conn.php"); 

if (isset($_GET['id']))
{
    $del = $_GET['id'];
$sql = "DELETE FROM chatbot_hints where id ='$del' ";
$run_query = mysqli_query($conn,$sql);
if($run_query){
    echo "<script>alert('Record Deleted!')</script>";
	echo "<script>window.open('questions_answers.php' , '_self')</script>";
}
else {
    echo "<script>alert('Something Went Wrong!')</script>";
	echo "<script>window.open('questions_answers.php' , '_self')</script>";}

}
?>




