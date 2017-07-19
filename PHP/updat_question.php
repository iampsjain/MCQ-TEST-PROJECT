<?php
require('dbconn.php');


$sql="UPDATE `question_ans_table` SET `question`='".$_GET['question']."',`option_a`='".$_GET['a']."',`option_b`='".$_GET['b']."',`option_c`='".$_GET['c']."',`option_d`='".$_GET['d']."',`answer`='".$_GET['ans']."' WHERE `id` ='".$_GET['id']."';";
$result=mysql_query($sql);
if($result){
    echo"question updated successfully";

}  
else{
echo"Failed to update question";

}
?>