<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script>
  
function announced_result()
  {
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          myObj = JSON.parse(this.responseText);
          var data1 = myObj.name;
        if(data1==1){
		  $("#shw").addClass("alert alert-success").html("Result Has Been Decleared");
          
		}

		}else{
		  $("#shw").addClass("alert alert-warning").html("Problem to Decleare Result");
        
		}
          
  };
  xmlhttp.open("GET", "announce_result_.php?data=1", true);
  xmlhttp.send();
  }
  
  
  
  
function announced_result_stop()
  {
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          myObj = JSON.parse(this.responseText);
          var data1 = myObj.name;
        if(data1==1){
		  $("#shw").addClass("alert alert-success").html("Result Declearetion process is stopped");
         
		}else{
		  $("#shw").addClass("alert alert-danger").html("Problem to stop Decleare Result");
        
		}
          }
  };
  xmlhttp.open("GET", "announce_result_.php?data=0", true);
  xmlhttp.send();
  }


function Redirect() {
               window.location="./show_result.php";
            }


  </script>
  <style>
  
  
  
  </style>
  </head>

<body>
<div id="shw"></div>


   




<form>
<div class="col-md-5" style="margin-left:20%;margin-top:5%;margin-bottom:20px;">
 <div class="input-group">
    <input type="text" name="query" class="form-control input-md" placeholder="Enter Exam Date" required>
    <div class="input-group-btn ">
      <button class="btn btn-default input-md" name="submit" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
	 
    </div>
  </div>
  </div>
   
</form>
     
    <button class="btn btn-danger pull-right" onclick="Redirect()"><i class="glyphicon glyphicon-refresh"></i></button>
 
   
   
  <br><br>
























<?php
require('dbconn.php');

if(isset($_GET['submit'])){

$sql="SELECT * FROM `userlogin` WHERE `date1`='".$_GET['query']."' ORDER BY `userlogin`.`marks` DESC";
$result=mysql_query($sql);
$j=0;
$count=0;

$result_count = mysql_num_rows($result);

if($result_count>0){



echo' <table class="table table-bordered"  >
    <thead>
      <tr >
        <th style="text-align:center;" >Rank</th>
        <th style="text-align:center;">Marks</th>
        <th style="text-align:center;">Name </th>
      </tr>
    </thead>';
    while($row=mysql_fetch_assoc($result)){
$j++;
  echo'
    <tbody>
      <tr style="text-align:center;" >
        
        <td>'.$j.' </td>
        <td>'.$row['marks'].'</td>
        <td>'.$row['username'].'</td>
      </tr>
       </tbody>
      ';

}

	
	
	


echo'
  </table>
   <input type="button" class="btn btn-danger pull-right" value="cancel" onclick="Redirect()" style="margin-top:10px;">
        <input type="button" class="btn btn-info pull-left" onclick="announced_result()"  value="Announce Result"  style="margin-top:10px;">
        <input type="button" class="btn btn-warning" onclick="announced_result_stop()" value="Stop Announcing Result" style="margin-top:10px;margin-left:10px;">
  
  
  
  ';
  
  


}
else{
	
	echo'<div class="alert alert-warning">
	<Strong>Sorry </Strong> no record found
	</div>';
	
}
}


else{
$sql1="SELECT DISTINCT `date1` FROM `question_ans_table`";
$result=mysql_query($sql1);
$date1[]=array();
$j1=0;

echo' <table class="table table-bordered"  >
    <thead>
      <tr >
        <th style="text-align:center;" >Exam Dates</th>
      </tr>
    </thead>';



while($row=mysql_fetch_assoc($result)){
	$j1++;
	$date1[$j1]=$row['date1'];
	
  echo'
    <tbody>
      <tr style="text-align:center;" >
        
        <td>'.$date1[$j1].' </td>
      </tr>
       </tbody>
      ';
	
}
echo'
  </table>';


}


?>


 
</body>
</html>