<?php
require('dbconn.php');
$sql="DELETE FROM `question_ans_table` WHERE 1=1";
$result=mysql_query($sql);
if($result){
    $msg="question deleted successfully";

}  
else{
$msg="Failed to delete question";

}

$myObj = new stdClass();
$myObj->name = $msg;

$myJSON = json_encode($myObj);

echo $myJSON;

?>