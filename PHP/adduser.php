<?php
require('dbconn.php');
$sql="SELECT * FROM `userlogin` WHERE `password`='".$_GET['password']."' ";
date_default_timezone_set('Asia/Kolkata');

$count=mysql_query($sql);
//validate username or password
$row=mysql_fetch_assoc($count);


if($row['status']==0){
	
$_SESSION['username']=$_GET['username'];

$sql="INSERT INTO `userlogin`(`username`, `password`, `status`,`date1`,`time1`) VALUES ('".$_GET['username']."','".$_GET['password']."',0,'".date("d/m/Y")."','".date("h:i:sa")."')";




$result=mysql_query($sql);


if($result){
	
	$sql="UPDATE `userlogin` SET `status`= 1 where `username`='".$_GET['username']."'";
	
	
		$result=mysql_query($sql);
		
		
    $msg = "1";
	
}

else{
	
   $msg ="0";

   
}


$myObj = new stdClass();
$myObj->name = $msg;

$myJSON = json_encode($myObj);

echo $myJSON;


}


else{
	
	
	$msg="0";
	
	
		$myObj = new stdClass();
		
		
$myObj->name = $msg;

$myJSON = json_encode($myObj);

echo $myJSON;
	
}

?>