<?php
require('dbconn.php');

$sql="SELECT * FROM `question_ans_table` WHERE `start_exam`='1'";

$result=mysql_query($sql);


$count=mysql_num_rows($result);

if($count>0){
	
	$status="1";
	
}else{
$status="0";	
}
$myObj = new stdClass();
$myObj->name = $status;

$myJSON = json_encode($myObj);

echo $myJSON;

?>