<?php
include "include/conn.php";
$riderid  = $_GET["RiderId"];
$return=0;
$currentlat=0;
$currentlng=0;
$query = "select * from location where RiderId ='$riderid' ORDER BY Id desc ";
$result = mysqli_query($conn,$query);
if (mysqli_num_rows($result)>0){
$row = mysqli_fetch_assoc($result);
$currentlat = $row['Lat'];
$currentlng = $row['Lng'];
echo $row['Lat'].'==='.$row['Lng'];
}    
else
    echo "0===0";
    
    $querydes = "select * from accounts where Id='$riderid'";
    $resultdes = mysqli_query($conn,$querydes);
    $rowdes = mysqli_fetch_assoc($resultdes);
    $processingOrderId=$rowdes['OrderInProcess'];
    
    $querygetdes = "select * from orders where Id='$processingOrderId' and Status='Pending'";
    $resultgetdes = mysqli_query($conn,$querygetdes);
    if (mysqli_num_rows($resultgetdes)>0){
        $rowgetdes = mysqli_fetch_assoc($resultgetdes);
        echo '==='. $rowgetdes['Lat'].'==='.$rowgetdes['Lng'];
    }else
        echo "===".$currentlat."===". $currentlng;

?>