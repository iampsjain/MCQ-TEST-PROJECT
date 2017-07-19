<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script>

 function Redirect(){
 window.location="./view_question.php";
           
}


 

function deletequestion(abc){
        Redirect(); 
  var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          myObj = JSON.parse(this.responseText);
          var data1 = myObj.name;
       if(data1=="1"){
          $("#Message").addClass("alert alert-success").html("Question deleted successfully");
        setTimeout('Redirect()', 100);
         }
         else{
            $("#Message").addClass("alert alert-danger").html("problem to delete question");
        
         }
          }
  };
  xmlhttp.open("GET", "delete_single_question.php?id="+abc, true);
  xmlhttp.send();


  }
    </script>


</head>


<body>




<?php
require('dbconn.php');

$sql="SELECT * FROM `question_ans_table`";

$result = mysql_query($sql);

if($result){
    $questions=array();
    
    $a=array();
    $b=array();
    $c=array();
    
    $i=0;
    $count=0;
    while($row=mysql_fetch_assoc($result))
    {
        $i++;
          $questions[$i]=$row['question'];
           $a[$i]=$row['option_a'];
           $b[$i]=$row['option_b'];
           $c[$i]=$row['option_c'];
           $id[$i]=$row['id'];
           $count++;
    }
if(empty($questions[1])){

     echo "माफ करा कोणतेही प्रश्न उपलब्ध नाहीत";
  
}
else{
    echo' <table  class="table table-bordered">
    <thead>
      <tr>
        <th >QUESTIONS ANSWERS 
<i class="fa fa-undo pull-right" onclick="Redirect()" style="font-size:25px;color:red"></i></th>
        
      </tr>
    </thead>
  ';
    for($i=1;$i<=$count;$i++){
            echo'
    <tbody>
      <tr>
        <td>
        <div class="col-sm-4">
        <h5><label id="question_name_'.$i.'" >'.$questions[$i].'</label></h5>
       
        <small>'.$a[$i].' &nbsp&nbsp&nbsp
        '.$b[$i].'&nbsp&nbsp&nbsp
        '.$c[$i].'&nbsp&nbsp&nbsp
        
        </small>
        <input type="button" onclick="deletequestion('.$id[$i].')
"  class="btn btn-danger pull-right" value="Delete">
         </div>
        
        </td>
        
      </tr>
       </tbody>
      

  ';

    }
    echo'</table>';
}
   
   }
   else{
      echo $msg="माफ करा कोणतेही प्रश्न उपलब्ध नाहीत";
   }






?>
</body>
</html>