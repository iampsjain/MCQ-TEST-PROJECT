<?php
require('dbconn.php');


$sql="INSERT INTO `question_ans_table`(`question`, `option_a`, `option_b`, `option_c`, `answer`,`date1`) VALUES ('".$_GET['question']."','".$_GET['a']."','".$_GET['b']."','".$_GET['c']."','".$_GET['ans']."','".$_GET['date']."')";
$result=mysql_query($sql);

if($result){
$msg="1";  
}
else{
    $msg="0";
}

$myObj = new stdClass();
$myObj->name = $msg;

$myJSON = json_encode($myObj);

echo $myJSON;


?>