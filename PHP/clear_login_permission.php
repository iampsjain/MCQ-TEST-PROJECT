 <?php
require('dbconn.php');

 $sql1="UPDATE `userlogin` SET `status` = '0' WHERE 1";
$result1=mysql_query($sql1);
if($result1){
    $msg="record clear";
   }
   else{
       $msg="error occured";
   }

$myObj = new stdClass();
$myObj->name = $msg;

$myJSON = json_encode($myObj);

echo $myJSON;





?>