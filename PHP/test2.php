<?php

 require('dbconn.php');

?>

<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>







    </script>
<style>
	

.navbar {
    margin-bottom: 0;
    background-color: #fff;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
	optacity
}

.navbar li a, .navbar .navbar-brand {
    color: #fff !important;
}

.navbar-nav li a:hover, .navbar-nav li.active a , .navbar-brand:hover {
    color: white !important;
    background-color: orange !important;
}

.navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
}

.navbar-brand{
	float:right!important;
	height:50px;
	padding:15px 15px;
	font-size:18px;
	line-height:20px;
	margin-left:-15px
	}
.navbar-brand:focus,.navbar-brand:hover{
	text-decoration:none
	}

.navbar-brand>img{display:block}


@media screen and (min-width:768px){
	.navbar>.container 
	.navbar-brand,.navbar>.container-fluid
	.navbar-brand
	{margin-left:-15px}
	}
.navbar-brand{color:#777}
.navbar-default .navbar-brand:focus,.navbar-default .navbar-brand:hover{color:#5e5e5e;background-color:transparent}
.navbar-default .navbar-text{color:#777}
.navbar-default .navbar-nav>li>a{color:#777}
.navbar-default .navbar-nav>li>a:focus,.navbar-default .navbar-nav>li>a:hover{background-color:transparent}


@media screen and (min-width:400px){
	
	.img-circle{
		width:20%;
		
		border-radius:100%}
	
}
@media screen and (min-width:600px){
	.img-circle{border-radius:100%}
	
	
	
}

@media screen and (max-width:768px){
	.img-circle{
		width:20%;
		
		border-radius:100%}
	
	
	
}

@media screen and (min-width:1200px){
	.img-circle{
		width:10%;
		
		border-radius:100%}
	
	
	
}


</style>

<div class="jumbotron" style="background-color:#FFF">
   
<img src="../IMAGES/md.jpg"  class="img-circle" style="margin-left:48%;margin-top:20px;" width="20%;" height="150px;">
<div class="caption" style="margin-left:40%;">
 <h2> Manohar Dharmapurikar<p style="margin-left:15%;">(Vitthal Das)</p>
    </h2>
</div>
</div>
 
</div>

 <form action="submit_question.php" method="POST">

<br>
<br>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header" >
     
      <center><input type="submit" class="btn btn-warning navbar-brand pull-right"  value="SUBMIT"></input></center>
    </div>
   
  </div>
</nav>

</head>
  <body >
     








  
  
   
        <?php
       
       $i=0;
        $sql=sprintf("select * from `question_ans_table` where `start_exam`='1'");
        $result=mysql_query($sql);
        
        $count=mysql_num_rows($result);
        if($count>0){
            while($row=mysql_fetch_assoc($result)){
                $i++;
                  
        echo'
        
			 <div class="panel panel-default">
  <div class="panel-body">
  <h4>
                 '.$i.') '. $row['question'] .'
		</h4>
<h4>		
		
              &nbsp&nbsp <input type="radio" name="question'.$i.'" value="'.$row["option_a"].'" id="'.$i.'"> '.$row["option_a"].'
              &nbsp&nbsp  <input type="radio" name="question'.$i.'" value="'.$row["option_b"].'" id="'.$i.'"> '.$row["option_b"].'
              &nbsp&nbsp   <input type="radio" name="question'.$i.'" value="'.$row["option_c"].'" id="'.$i.'"> '.$row["option_c"].'
              &nbsp&nbsp 
	</h4>	  
          
      
        </div>
            </div>
        
        
        ';

           
           
            }
			
              echo'<input type="hidden" name="total_question" value="'.$i.'">';
             }
        else{
            
			echo '<div class="alert alert-warning" style="text-align:center;">
            Sorry no questions found
            </div>
            ';
            
			}
        
        
        
        ?>
   

</form>
  </body>
  </html>

