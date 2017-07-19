<?php
require('dbconn.php');

$sql="UPDATE `userlogin` SET `result_status`=".$_GET['data']."";
$result=mysql_query($sql);
if($result){
	$status="1";
}else{
$status="0";	
}
$myObj = new stdClass();
$myObj->name = $status;

$myJSON = json_encode($myObj);

echo $myJSON;

?>