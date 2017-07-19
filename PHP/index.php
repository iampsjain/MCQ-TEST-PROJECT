<html>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
.alert{padding:15px;margin-top:10px;margin-bottom:20px;border:1px solid transparent;border-radius:4px;
}
.alert h4{margin-top:0;color:inherit}
.alert.alert-link{font-weight:700}
.alert>p,.alert>ul{margin-bottom:0}.alert>p+p{margin-top:5px}
.alert-dismissable,
.alert-dismissible{padding-right:35px}
.alert-danger{
    color:#a94442;
    background-color:#f2dede;
    border-color:#ebccd1;
   
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

  @media screen and (min-width: 768px) {
	  
	  .box {
    border-radius: 3px;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    padding: 10px 25px;
    text-align: right;
    display: block;
    margin-top: 60px;
	margin-left:50%;
	width: 100%;
	background-color: #fff;
}
	  
	  
	  
  }
  
  
  @media screen and (max-width: 768px){
	  
	 .box {
    border-radius: 3px;
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    padding: 10px 25px;
    text-align: right;
    display: block;
    margin-top: 60px;
	
	width: 60%;
	background-color: #fff;
}
	  
	  
	  
	  
  }
   @media screen and (max-width: 400px){
	  
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
	  
	  
	  
	  
  }
   
  </style>
<script>
function Redirect() {
               window.location="./login_user_test.html";
            }


setInterval( function(){
var xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        myObj = JSON.parse(this.responseText);
        var abc=document.getElementById("output").value = myObj.name;
		if (abc=="1"){
		document.getElementById("output").innerHTML=myObj.name;
					$("#output").removeClass("alert alert-success animated fadeInUp").html(" ");	
				   $("#output").addClass("alert alert-success animated fadeInUp").html("परीक्षेचा कालावधि सुरु झाला आहे...");
               
              setTimeout('Redirect()', 3000);
		}
		else{
		
		        $("#output").addClass("alert alert-danger animated fadeInUp").html("परीक्षेचा कालावधि सुरू झाला नाही  ");
                }
		
	}
};
xmlhttp.open("GET", "status.php", true);
xmlhttp.send();
}, 5000);

function getdata(){
   var xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        myObj = JSON.parse(this.responseText);
        var abc=document.getElementById("output").value = myObj.name;
		if (abc=="1"){
		document.getElementById("output").innerHTML=myObj.name;
                   $("#output").removeClass("alert alert-success animated fadeInUp").html(" ");
				   $("#output").addClass("alert alert-success animated fadeInUp").html("परीक्षेचा कालावधि सुरु झाला आहे...");

             
              setTimeout('Redirect()', 3000);
		     
		}
		else{
		
		       $("#output").addClass("alert alert-danger animated fadeInUp").html("परीक्षेचा कालावधि सुरू झाला नाही ");
                }
		
	}
};
xmlhttp.open("GET", "status.php", true);
xmlhttp.send();
}
	</script>

<body style="background-image:url('../IMAGES/line.png')">
<div class="container">



    <div class="row">
        
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
	
    	<center>
            <div class="box">
                <div class="box-icon">
                    <span class="fa fa-4x fa-book"></span>
                </div>
                <div class="info">
                    <h4 class="text-center">"भगवतगीता"</h4>
                    <p>भगवत गीताच्या जगात आपले स्वागत आहे. भगवतगीते बद्दल आपल्या ज्ञानाची चाचणी करा, खालील बटणावर क्लिक करा आणि एकाधिक निवड प्रश्नांच्या स्पर्धेत सहभागी व्हा.</p>
                    <button class="btn" onclick="getdata()">Move to Login</button> 
					<p id="output"> </p>
                </div>
            </div>
			</center>
        </div>
		
        </div>
		
		
		
		
		</div>



</body>
</html>