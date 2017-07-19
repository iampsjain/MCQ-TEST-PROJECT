<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">div.image {max-width: 256px;max-height: 256px;background-color:black;background-image: url(data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDMxMi44NSAzMTIuODUiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDMxMi44NSAzMTIuODU7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KPGc+Cgk8cGF0aCBkPSJNMTQ2LjIxNiwwLjE0NmMtMy4zMTQtMC42ODEtNi42MzYsMS4wNy03Ljk2LDQuMTc3bC00OC4yMiwxMTMuMTQ4Yy0xNC44NjYsMzIuODU5LTEuMTQ3LDcyLjIwMyw0LjcxNCw4Ni4xOWwtNTcuODYsNDcuOTYxICAgYy0xLjQ3OCwxLjIyNS0yLjM5NywyLjk5Ni0yLjU0OSw0LjkwOWMtMC4xNTIsMS45MTQsMC40NzcsMy44MDcsMS43NDMsNS4yNWw0Mi42OTgsNDguNjQ5YzEuMzU0LDEuNTQyLDMuMzAyLDIuNDE5LDUuMzQxLDIuNDE5ICAgYzAuMTIsMCwwLjI0LTAuMDAzLDAuMzYtMC4wMDljMi4xNjktMC4xMSw0LjE2OC0xLjIwNSw1LjQyOC0yLjk3NGw2MC41NzQtODUuMDE0YzAuODU3LTEuMjAzLDEuMzE4LTIuNjQ0LDEuMzE5LTQuMTIxICAgbDAuMDA0LTEwLjEzOWMwLjAyLTQzLjE5MywwLjA5Mi0xOTUuNDY5LDAuMDkyLTIwMy40ODVDMTUxLjkwMSwzLjczMiwxNDkuNTI1LDAuODIxLDE0Ni4yMTYsMC4xNDZ6IiBmaWxsPSIjRDgwMDI3Ii8+Cgk8cGF0aCBkPSJNMjc4LjUwOSwyNTYuNTMxYy0wLjE1MS0xLjkxNC0xLjA3MS0zLjY4NS0yLjU0OS00LjkwOWwtNTcuODYxLTQ3Ljk2MWM1Ljg2Mi0xMy45ODcsMTkuNTgxLTUzLjMzMSw0LjcxNC04Ni4xOSAgIEwxNzQuNTkzLDQuMzIzYy0xLjMyMy0zLjEwNy00LjY1MS00Ljg1Ny03Ljk2LTQuMTc3Yy0zLjMwOSwwLjY3NS01LjY4NSwzLjU4Ni01LjY4NSw2Ljk2M2MwLDguMDE2LDAuMDcyLDE2MC4yOTIsMC4wOTIsMjAzLjQ4NSAgIGwwLjAwNCwxMC4xMzljMC4wMDEsMS40NzcsMC40NjEsMi45MTcsMS4zMTksNC4xMjFsNjAuNTc0LDg1LjAxNGMxLjI2LDEuNzY4LDMuMjU5LDIuODY0LDUuNDI4LDIuOTc0ICAgYzAuMTIxLDAuMDA2LDAuMjQxLDAuMDA5LDAuMzYsMC4wMDljMi4wNCwwLDMuOTg4LTAuODc3LDUuMzQxLTIuNDE5bDQyLjY5OC00OC42NDkgICBDMjc4LjAzMiwyNjAuMzM4LDI3OC42NjEsMjU4LjQ0NSwyNzguNTA5LDI1Ni41MzF6IiBmaWxsPSIjRDgwMDI3Ii8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==)}</style>


<script>

function show_result() {
               window.location="./display_result.php";
            }
</script>


</head>





<?php
if(isset($_POST['btn_submit'])){
require('dbconn.php');
if(!isset($_SESSION['username']))
{
  echo "you are not allowed";
  die();
}




echo ' <img src="../IMAGES/vitthal.png" style="margin-left:40%;">
<center><h1 ><small>Welcome   '.$_SESSION['username'].'<p>Your Result Board..!</p></small></h1></center>';




$total_questions= $_POST['total_question'];



$answers = array();



for($i=1;$i<=$_POST['total_question'];$i++){
	
	
	
 $answers[$i]=$_POST['question'.$i];
 
 
 
}
date_default_timezone_set('Asia/Kolkata');

 $date=date('d/m/Y');
$sql="SELECT * FROM `question_ans_table` WHERE `date1`='".$date."' ";
$result=mysql_query($sql);



$j=1;
$count=0;

    $total_answers=array();
	
	
	
	
while($row=mysql_fetch_assoc($result)){
$total_answers[$j]=$row['answer'];
$j++;

if(empty($answers[$j])){
 $answers[$j]="Not Solved";
}

else{
   
if($answers[$j]==$row['answer']){
$count++;
}
}
}





echo' <table class="table table-bordered">
    <thead>
      <tr>
        <th>YOUR ANSWERS</th>
        <th>CORRECT ANSWERS</th>
      </tr>
    </thead>';
	
	$count2=0;
	
for($i=1;$i<=$total_questions;$i++){
if($answers[$i]==$total_answers[$i]){
$count2++;
  echo'
    <tbody>
      <tr>
        <td>'.$answers[$i].'</td>
        <td> <i class="glyphicon glyphicon-ok" style="color:green"></i></td>
      </tr>
       </tbody>
      ';
}




else{
	
	
	
  echo'
    <tbody>
      <tr>
        <td>'.$answers[$i].'</td>
        <td> <i class="glyphicon glyphicon-remove" style="color:red"></i></td>
      </tr>
       </tbody>
      ';


}


  }
  
  
  
  
  if($count<10){
  
echo'
  </table>';


$sql="UPDATE `userlogin` SET `marks`='0".$count2."' WHERE `username`= '".$_SESSION['username']."'";
$result=mysql_query($sql);
if($result){
	
  echo'<h2> Your total score is  0'.$count2.'</h2>
  <h1 style="text-align:center">गुणवत्ता यादी काही कालावधी प्रदर्शित केली जाईल</h1><h1 style="text-align:center">धन्यवाद <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDMxMi44NSAzMTIuODUiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDMxMi44NSAzMTIuODU7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KPGc+Cgk8cGF0aCBkPSJNMTQ2LjIxNiwwLjE0NmMtMy4zMTQtMC42ODEtNi42MzYsMS4wNy03Ljk2LDQuMTc3bC00OC4yMiwxMTMuMTQ4Yy0xNC44NjYsMzIuODU5LTEuMTQ3LDcyLjIwMyw0LjcxNCw4Ni4xOWwtNTcuODYsNDcuOTYxICAgYy0xLjQ3OCwxLjIyNS0yLjM5NywyLjk5Ni0yLjU0OSw0LjkwOWMtMC4xNTIsMS45MTQsMC40NzcsMy44MDcsMS43NDMsNS4yNWw0Mi42OTgsNDguNjQ5YzEuMzU0LDEuNTQyLDMuMzAyLDIuNDE5LDUuMzQxLDIuNDE5ICAgYzAuMTIsMCwwLjI0LTAuMDAzLDAuMzYtMC4wMDljMi4xNjktMC4xMSw0LjE2OC0xLjIwNSw1LjQyOC0yLjk3NGw2MC41NzQtODUuMDE0YzAuODU3LTEuMjAzLDEuMzE4LTIuNjQ0LDEuMzE5LTQuMTIxICAgbDAuMDA0LTEwLjEzOWMwLjAyLTQzLjE5MywwLjA5Mi0xOTUuNDY5LDAuMDkyLTIwMy40ODVDMTUxLjkwMSwzLjczMiwxNDkuNTI1LDAuODIxLDE0Ni4yMTYsMC4xNDZ6IiBmaWxsPSIjRDgwMDI3Ii8+Cgk8cGF0aCBkPSJNMjc4LjUwOSwyNTYuNTMxYy0wLjE1MS0xLjkxNC0xLjA3MS0zLjY4NS0yLjU0OS00LjkwOWwtNTcuODYxLTQ3Ljk2MWM1Ljg2Mi0xMy45ODcsMTkuNTgxLTUzLjMzMSw0LjcxNC04Ni4xOSAgIEwxNzQuNTkzLDQuMzIzYy0xLjMyMy0zLjEwNy00LjY1MS00Ljg1Ny03Ljk2LTQuMTc3Yy0zLjMwOSwwLjY3NS01LjY4NSwzLjU4Ni01LjY4NSw2Ljk2M2MwLDguMDE2LDAuMDcyLDE2MC4yOTIsMC4wOTIsMjAzLjQ4NSAgIGwwLjAwNCwxMC4xMzljMC4wMDEsMS40NzcsMC40NjEsMi45MTcsMS4zMTksNC4xMjFsNjAuNTc0LDg1LjAxNGMxLjI2LDEuNzY4LDMuMjU5LDIuODY0LDUuNDI4LDIuOTc0ICAgYzAuMTIxLDAuMDA2LDAuMjQxLDAuMDA5LDAuMzYsMC4wMDljMi4wNCwwLDMuOTg4LTAuODc3LDUuMzQxLTIuNDE5bDQyLjY5OC00OC42NDkgICBDMjc4LjAzMiwyNjAuMzM4LDI3OC42NjEsMjU4LjQ0NSwyNzguNTA5LDI1Ni41MzF6IiBmaWxsPSIjRDgwMDI3Ii8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
  
  <input type="button" class="btn btn-success" value="click here" onclick="show_result()">
  
  </h1>
  
  ';
}
else{
	echo mysql_error();



  }
  
  
  }
  
  
  
  
else{
	  
	  $sql="UPDATE `userlogin` SET `marks`='".$count2."' WHERE `username`='".$_SESSION['username']."' ";
$result=mysql_query($sql);
if($result){
	
	  echo'<h2> Your total score is  '.$count2.'</h2>
  <h1 style="text-align:center">गुणवत्ता यादी काही कालावधी प्रदर्शित केली जाईल</h1><h1 style="text-align:center">धन्यवाद <img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDMxMi44NSAzMTIuODUiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDMxMi44NSAzMTIuODU7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMnB4Ij4KPGc+Cgk8cGF0aCBkPSJNMTQ2LjIxNiwwLjE0NmMtMy4zMTQtMC42ODEtNi42MzYsMS4wNy03Ljk2LDQuMTc3bC00OC4yMiwxMTMuMTQ4Yy0xNC44NjYsMzIuODU5LTEuMTQ3LDcyLjIwMyw0LjcxNCw4Ni4xOWwtNTcuODYsNDcuOTYxICAgYy0xLjQ3OCwxLjIyNS0yLjM5NywyLjk5Ni0yLjU0OSw0LjkwOWMtMC4xNTIsMS45MTQsMC40NzcsMy44MDcsMS43NDMsNS4yNWw0Mi42OTgsNDguNjQ5YzEuMzU0LDEuNTQyLDMuMzAyLDIuNDE5LDUuMzQxLDIuNDE5ICAgYzAuMTIsMCwwLjI0LTAuMDAzLDAuMzYtMC4wMDljMi4xNjktMC4xMSw0LjE2OC0xLjIwNSw1LjQyOC0yLjk3NGw2MC41NzQtODUuMDE0YzAuODU3LTEuMjAzLDEuMzE4LTIuNjQ0LDEuMzE5LTQuMTIxICAgbDAuMDA0LTEwLjEzOWMwLjAyLTQzLjE5MywwLjA5Mi0xOTUuNDY5LDAuMDkyLTIwMy40ODVDMTUxLjkwMSwzLjczMiwxNDkuNTI1LDAuODIxLDE0Ni4yMTYsMC4xNDZ6IiBmaWxsPSIjRDgwMDI3Ii8+Cgk8cGF0aCBkPSJNMjc4LjUwOSwyNTYuNTMxYy0wLjE1MS0xLjkxNC0xLjA3MS0zLjY4NS0yLjU0OS00LjkwOWwtNTcuODYxLTQ3Ljk2MWM1Ljg2Mi0xMy45ODcsMTkuNTgxLTUzLjMzMSw0LjcxNC04Ni4xOSAgIEwxNzQuNTkzLDQuMzIzYy0xLjMyMy0zLjEwNy00LjY1MS00Ljg1Ny03Ljk2LTQuMTc3Yy0zLjMwOSwwLjY3NS01LjY4NSwzLjU4Ni01LjY4NSw2Ljk2M2MwLDguMDE2LDAuMDcyLDE2MC4yOTIsMC4wOTIsMjAzLjQ4NSAgIGwwLjAwNCwxMC4xMzljMC4wMDEsMS40NzcsMC40NjEsMi45MTcsMS4zMTksNC4xMjFsNjAuNTc0LDg1LjAxNGMxLjI2LDEuNzY4LDMuMjU5LDIuODY0LDUuNDI4LDIuOTc0ICAgYzAuMTIxLDAuMDA2LDAuMjQxLDAuMDA5LDAuMzYsMC4wMDljMi4wNCwwLDMuOTg4LTAuODc3LDUuMzQxLTIuNDE5bDQyLjY5OC00OC42NDkgICBDMjc4LjAzMiwyNjAuMzM4LDI3OC42NjEsMjU4LjQ0NSwyNzguNTA5LDI1Ni41MzF6IiBmaWxsPSIjRDgwMDI3Ii8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
  
  <input type="button" class="btn btn-success" value="click here" onclick="show_result()">
  
  </h1>
  
  ';
}

   else{
	
	echo"problem in else statemnt";
     }
	  
	  
	  
  }
}
else{
	
	echo"you dont have authority to access";
	
}
 


?>