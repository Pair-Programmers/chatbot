<?php
date_default_timezone_set('Asia/Kolkata');
include('admin/include/conn.php');
$txt=mysqli_real_escape_string($conn,$_POST['txt']);
list($a, $b) = explode('/', $txt);

$sql="INSERT INTO queries (questions, email)
                                                VALUES ('$a' , '$b')";
mysqli_query($conn,$sql);

$html="We have recieved your email Thanks !";

/*$added_on=date('Y-m-d h:i:s');
mysqli_query($con,"insert into message(message,added_on,type) values('$txt','$added_on','user')");
$added_on=date('Y-m-d h:i:s');
mysqli_query($con,"insert into message(message,added_on,type) values('$html','$added_on','bot')");*/
echo $html;
?>