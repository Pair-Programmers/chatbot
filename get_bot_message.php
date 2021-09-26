<?php
date_default_timezone_set('Asia/Kolkata');
include('admin/include/conn.php');
$txt=mysqli_real_escape_string($conn,$_POST['txt']);
$sql="select reply from chatbot_hints where questions like '%$txt%'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0){
	$row=mysqli_fetch_assoc($res);
	$html=$row['reply'];
}else{
	$html="Sorry i can't give you answer send your email we will contact you soon !";
}
/*$added_on=date('Y-m-d h:i:s');
mysqli_query($con,"insert into message(message,added_on,type) values('$txt','$added_on','user')");
$added_on=date('Y-m-d h:i:s');
mysqli_query($con,"insert into message(message,added_on,type) values('$html','$added_on','bot')");*/
echo $html;
?>