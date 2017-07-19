<?php
require('dbconn.php');


$sql="DELETE FROM `question_ans_table` WHERE `id`='".$_GET['id']."'";
$result=mysql_query($sql);
if($result){
    $msg=1;
}  
else{
$msg=0;
}



$myObj = new stdClass();
$myObj->name = $msg;

$myJSON = json_encode($myObj);

echo $myJSON;
?>