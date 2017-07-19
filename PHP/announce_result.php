<?php
require('dbconn.php');

$sql="SELECT * FROM `userlogin`";
$result=mysql_query($sql);
if($result){
	$row=mysql_fetch_assoc($result);
    $status=$row['result_status'];
	
}else{
$status="0";	
}
$myObj = new stdClass();
$myObj->name = $status;

$myJSON = json_encode($myObj);

echo $myJSON;

?>