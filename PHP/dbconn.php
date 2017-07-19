<?php
$conn=mysql_connect('hostname','username','password');
mysql_select_db('databaseName',$conn);
mysql_query("SET NAMES 'utf8'", $conn);
session_start();
?>