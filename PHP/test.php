<?php

 require('dbconn.php');

?>

<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>

<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<script>
    $('.timeline-panel').click(function() {
    $('.timeline-body', this).toggle(); // p00f
});


    var countDownDate = new Date().getTime()+1800000;
    
// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    // Find the distance between now an the count down date
   
   
    var distance = countDownDate - now;
   
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("tim").innerHTML = hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("tim").innerHTML = "Form Submitted";
    }
}, 1000);



function disable(){
var inputs = document.getElementsByClassName('disable-class');
for(var i = 0; i < inputs.length; i++) {
    document.getElementById(i).disabled = true;
}
}


function fullScreen(theURL) {
window.open(theURL, '', 'fullscreen=yes, scrollbars=auto, refresh=false, reload=false');
}







    </script>
<style>






  
.timeline {
  list-style: none;
  padding: 20px 0 20px;
  position: relative;
}
.timeline:before {
  top: 0;
  bottom: 0;
  position: absolute;
  content: " ";
  width: 3px;
  background-color: #eeeeee;
  left: 25px;
  margin-right: -1.5px;
}
.timeline > li {
  margin-bottom: 20px;
  position: relative;
}
.timeline > li:before,
.timeline > li:after {
  content: " ";
  display: table;
}
.timeline > li:after {
  clear: both;
}
.timeline > li:before,
.timeline > li:after {
  content: " ";
  display: table;
}
.timeline > li:after {
  clear: both;
}
.timeline > li > .timeline-panel {
  width: calc( 100% - 75px );
  float: right;
  border: 1px solid #d4d4d4;
  border-radius: 2px;
  padding: 20px;
  position: relative;
  -webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
  box-shadow: 0 1px 6px rgba(0, 0, 0, 0.175);
}
.timeline > li > .timeline-panel:before {
  position: absolute;
  top: 26px;
  left: -15px;
  display: inline-block;
  border-top: 15px solid transparent;
  border-right: 15px solid #ccc;
  border-left: 0 solid #ccc;
  border-bottom: 15px solid transparent;
  content: " ";
}
.timeline > li > .timeline-panel:after {
  position: absolute;
  top: 27px;
  left: -14px;
  display: inline-block;
  border-top: 14px solid transparent;
  border-right: 14px solid #fff;
  border-left: 0 solid #fff;
  border-bottom: 14px solid transparent;
  content: " ";
}
.timeline > li > .timeline-badge {
  color: #fff;
  width: 50px;
  height: 50px;
  line-height: 50px;
  font-size: 1.4em;
  text-align: center;
  position: absolute;
  padding:14px;
  top: 16px;
  left: 0px;
  margin-right: -25px;
  background-color: #999999;
  z-index: 100;
  border-top-right-radius: 50%;
  border-top-left-radius: 50%;
  border-bottom-right-radius: 50%;
  border-bottom-left-radius: 50%;
}
.timeline > li.timeline-inverted > .timeline-panel {
  float: left;
}
.timeline > li.timeline-inverted > .timeline-panel:before {
  border-right-width: 0;
  border-left-width: 15px;
  right: -15px;
  left: auto;
}
.timeline > li.timeline-inverted > .timeline-panel:after {
  border-right-width: 0;
  border-left-width: 14px;
  right: -14px;
  left: auto;
}
.timeline-badge.primary {
  background-color: #2e6da4 !important;
}
.timeline-badge.success {
  background-color: #3f903f !important;
}
.timeline-badge.warning {
  background-color: #f0ad4e !important;
}
.timeline-badge.danger {
  background-color: #d9534f !important;
}
.timeline-badge.info {
  background-color: #5bc0de !important;
}
.timeline-title {
  margin-top: 0;
  color: inherit;
}
.timeline-body > p,
.timeline-body > ul {
  margin-bottom: 0;
}
.timeline-body > p + p {
  margin-top: 5px;
}

.timeline-body {
    display: none;
}   

.jumbotron { 
    background-color: #f4511e; /* Orange */
    color: #ffffff;
    height: 40%;
}

/*Nav bar */







.navbar {
    margin-bottom: 0;
    background-color: #f4511e;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
}

.navbar li a, .navbar .navbar-brand {
    color: #fff !important;
}

.navbar-nav li a:hover, .navbar-nav li.active a {
    color: #f4511e !important;
    background-color: #fff !important;
}

.navbar-default .navbar-toggle {
    border-color: transparent;
    color: #fff !important;
}

.btn1{
      margin-bottom: 0;
    background-color: #f4511e;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    height:50px;
}
.btn1:hover{
   height:50px;
    color: #f4511e !important;
    background-color: #fff !important;
    border-color:#f4511e
}
.btn1{
     color: #fff !important;
}
/*nav bar end*/




</style>
</head>
  <body >
      <form action="submit_question.php" method="POST">




<nav role="navigation" class="navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="#" class="navbar-brand">Brand</a>
    </div>
    <!-- Collection of nav links and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Messages</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Login</a></li>
        </ul>
    </div>
</nav>









  <div class="container">
  <br>
  <br>
    <ul class="timeline">
        <?php
       
       $i=0;
        $sql=sprintf("select * from `question_ans_table`");
        $result=mysql_query($sql);
        
        $count=mysql_num_rows($result);
        if($count>0){
            while($row=mysql_fetch_assoc($result)){
                $i++;
                  
        echo'
        
        
        <li>
          <div class="timeline-badge info disable-class"><i class="glyphicon glyphicon-question-sign"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">'. $row['question'] .'</h4>
              
               <input type="radio" name="question'.$i.'" value="'.$row["option_a"].'" id="'.$i.'"> '.$row["option_a"].'
              &nbsp&nbsp  <input type="radio" name="question'.$i.'" value="'.$row["option_b"].'" id="'.$i.'"> '.$row["option_b"].'
              &nbsp&nbsp   <input type="radio" name="question'.$i.'" value="'.$row["option_c"].'" id="'.$i.'"> '.$row["option_c"].'
              &nbsp&nbsp    
            <div class="timeline-body">
              
            </div>
          </div>
        </li>
        
        
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
    </ul>
</div>
</form>
  </body>
  </html>

