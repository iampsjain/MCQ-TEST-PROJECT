<?php

require('dbconn.php');


$sql="select * from userlogin where `username`='".$_POST['username']."' and password='".$_POST['password']."' ";

$count=mysql_query($sql);
$result=mysql_num_rows($count);
//validate username or password


if($result>0){
$_SESSION['username']=$_POST['username'];
$_SESSION['password']=$_POST['password'];
$sql="select * from userlogin where `username`='".$_POST['username']."' and password='".$_POST['password']."' ";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);	
	if($row['status']==0){
		$sql="UPDATE `userlogin` SET `status`= 1 where `username`='".$_POST['username']."'";
		$result=mysql_query($sql);
		$status="1";
//login success
		echo $status;
	}
	else{
		$status="2";
		
//you are already appeard for this session
		echo $status;
	}

}
else{
	//login failed
$status="0";
		echo $status;
}

?>