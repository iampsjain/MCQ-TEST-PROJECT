<?php
require('dbconn.php');
$status=$_GET['data'];
$date2=$_GET['date'];






if($status==1){
$sql="UPDATE `question_ans_table` SET `start_exam`='".$status."' where `date1`='".$date2."'";

$result = mysql_query($sql);
if($result){
   if($result){
      
   $msg="1";
   }
   else{
   $msg="0";
       
   }
   }
   else{
       $msg="0";
   }
}





else{
	

$sql="UPDATE `question_ans_table` SET `start_exam`='".$status."' where 1";

$result = mysql_query($sql);
if($result){
	
   if($result){
      
   $msg="1";
   }
   else{
   $msg="0";
       
   }
   }
   else{
       $msg="0";
   }
	
	
	
	
	
}
$myObj = new stdClass();
$myObj->name = $msg;

$myJSON = json_encode($myObj);

echo $myJSON;



?>