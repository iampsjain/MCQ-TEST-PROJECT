

<html>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>





<?php
require('dbconn.php');
$sql="SELECT * FROM `userlogin`";
$result=mysql_query($sql);
$row=mysql_fetch_assoc($result);
$status=$row['result_status'];
if($status==1){













?>

  <style>
  @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);

body {padding-top:50px;}

.box {
    border-radius: 3px;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    padding: 10px 25px;
    text-align: right;
    display: block;
    margin-top: 60px;
	
	width: 100%;
	background-color: #fff;
}
.box-icon {
    background-color: #57a544;
    border-radius: 50%;
    display: table;
    height: 100px;
    margin: 0 auto;
    width: 100px;
    margin-top: -61px;
}
.box-icon span {
    color: #fff;
    display: table-cell;
    text-align: center;
    vertical-align: middle;
}
.info h4 {
    font-size: 26px;
    letter-spacing: 2px;
    text-transform: uppercase;
}
.info > p {
    color: #717171;
    font-size: 16px;
    padding-top: 10px;
    text-align: justify;
}
.info > button {
	margin-right: 50%;
	margin-left:40%;
	
    background-color: #03a9f4;
    border-radius: 2px;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    color: #fff;
    transition: all 0.5s ease 0s;
}
.info > button:hover {
    background-color: #0288d1;
    box-shadow: 0 2px 3px 0 rgba(0, 0, 0, 0.16), 0 2px 5px 0 rgba(0, 0, 0, 0.12);
    color: #fff;
    transition: all 0.5s ease 0s;
}
.alert-success{
color:#3c763d;
background-color:#dff0d8;
border-color:#d6e9c6;
margin-block-start: 20px;
}
.alert-success hr{border-top-color:#c9e2b3}
.alert{padding:15px;margin-bottom:20px;border:1px solid transparent;border-radius:4px;
margin-left: 20px;}
.alert h4{margin-top:0;color:inherit}
.alert.alert-link{font-weight:700}
.alert>p,.alert>ul{margin-bottom:0}.alert>p+p{margin-top:5px}
.alert-dismissable,
.alert-dismissible{padding-right:35px}
.alert-danger{
    color:#a94442;
    background-color:#f2dede;
    border-color:#ebccd1;
    margin-left: 30px;
    }
.alert-danger hr{border-top-color:#e4b9c0}.alert-danger
  @keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(20px);
    -ms-transform: translateY(20px);
    transform: translateY(20px);
  }

  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }
}

.fadeInUp {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
}

  
  
  </style>
<script>





function announced_result()
  {
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          myObj = JSON.parse(this.responseText);
          var data1=document.getElementById("output").innerHTML = myObj.name;
        if(data1==1){
		  $("#output").html("Result Has Been Decleared");
		  
		
        
		}else{
		  $("#output").html("Problem to Decleare Result");
        

        
		}
          }
  };
  xmlhttp.open("GET", "announce_result.php", true);
  xmlhttp.send();
  }






	</script>



<body style="">
<div class="container">
<p id="output"> </p>
    <div class="row">
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	
    	<center>
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-book"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">"BHAGWAT GITA CONTEST RESULT"</h4>
                    <p>Welcome to the world of bhagwat gita.  Test your Reginol knowledge about shrimat bhagwat gita, click the below button and login to the shrimat bhagwat gita multiple choice questions contest.</p>
                    <input type="button" class="btn btn-info" onclick="getdata()" data-toggle="modal"  data-target="#show_result" value="CHECK RESULT">			
					<input type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal2" value="CHECK ANSWERS"> 
                </div>
            </div>
        </div>
		</center>
        </div>
		</div>
		<div id="show_result" class="modal fade" role="dialog">
    <div class="modal-dialog model-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">

              

              <iframe style="width:100%;height:70%;" src="show_result.php">
              </iframe>
              <input type="button" onclick="" class="btn btn-danger pull-right" value="cancel" data-dismiss="modal" style="margin-top:10px;">

            </div>
        </div>
      </div>
    </div>

		
<?php		



		echo'
		<div id="myModal2" class="modal fade" role="dialog">
    <div class="modal-dialog model-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
			<div class="modal-body" style="height: 70%;
    overflow-y: auto;">
	
	<h2>ANSWERS</h2>
	';

				
			$sql="SELECT * FROM `question_ans_table` where 1";
			$result=mysql_query($sql);
			$answer=array();
			$question=array();
			
			
			$i=0;
			$j=0;
			while($row=mysql_fetch_assoc($result)){
			$i++;
			$answer[$i]=$row['answer'];
			$question[$i]=$row['question'];
			
			$j++;
			}
			for($i=1;$i<=$j;$i++){
			
			
			
			echo' <h3><hr><br>'.$i.') &nbsp&nbsp'.$question[$i].'<br><br><small> ANSWERS:-  '.$answer[$i].
			'<small></h3>';
			}
			echo'
				</div>
            </div>
        </div>
      </div>
    </div>
';
		
		
	?>	
		
		
		
		
		
		
		
		
		
		

</body>
</html>


<?php


}	
else{
	
	echo'<div class="alert alert-warning" style="margin-top:20%;margin:20%">
	
	<B>Sorry</B> Result was not announsed
	please refresh the page.
	
	</div>
	
	';
	
	
}

?>