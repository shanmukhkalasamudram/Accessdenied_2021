<?php

session_start(); //we need session for the log in thingy XD                
 
include("functions.php");
           
        
?>

<html>
 
	<head>
		<title>Employee DashBoard</title>
		<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!-- Compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
			  
		<style>
			body{
                 
                
				  font-family: "Nunito", sans-serif;
				  background-color:#fff;
				  overflow-x:hidden;
				}
     

				.navbar a{
				  float:left;
				  display:block;
				  color:#f2f2f2;
				  text-align:center;
				  padding:14px 16px;
				  text-decoration:none;
				  font-size:17px;
				}

				.navbar a:hover{
				  background-color:rgba(127, 137, 161, 0.25);
				  color:#000;
				}

				.side-nav{
				  height:100%;
				  width:0;
				  position:fixed;
				  z-index:1;
				  top:0;
				  left:0;
				  background-color:#fff;
				  
				  overflow-x:hidden;
				  padding-top:60px;
				  transition:0.5s;
				}

				.side-nav a{
				  padding:10px 10px 10px 30px;
				  text-decoration:none;
				  font-size:22px;
				  color:#111;
				  display:block;
				  transition:0.3s;
				}

				.side-nav a:hover{
				  color: #f1418a;
				}

				.side-nav .btn-close{
				  position:absolute;
				  top:0;
				  right:22px;
				  font-size:36px;
				  margin-left:50px;
				}

				#main{
				  transition:margin-left 0.5s;
				  padding:20px;
				  overflow:hidden;
				  width:100%;
				}

				@media(max-width:568px){
				  .navbar-nav{display:none}
				}

				@media(min-width:568px){
				  /*.open-slide{display:none}*/
				}
				.card {
				  box-shadow: 0px 5px 30px rgba(65, 84, 241, 0.4);
				  transition: 0.3s;
				  width: 95%;
				  border-radius: 5px;
				  justify-content: center;
				  margin-bottom: 20px;
				}

				.card:hover {
				  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
				}

				.container {
				  padding: 2px 16px;
				}
				button{
					margin-top: 30px;
  line-height: 0;
  padding: 20px 40px;
  border-radius: 4px;
  transition: 0.5s;
  border: none;
  color: #fff;
  background: #f1418a;
  box-shadow: 0px 5px 30px rgba(65, 84, 241, 0.4);
  margin-left: 5px;
  font-size: 18px;
  transition: 0.3s;
  font-family: "Nunito", sans-serif;
  font-weight: 600;
  font-size: 16px;
  letter-spacing: 1px;
				}
				.circle{
   border-radius:50%;
   position:fixed;
   animation-fill-mode:both;
   transition:transform 3s;
   background: linear-gradient(rgba(255,100,100,0.6), rgba(255,100,100,0.8));
}
.circle:active  {
   transform:scale(2);
}
#circle1 {
     height:100px; width:100px;
     top:70px; left:20px;
     animation:amimation1 5s ease-in-out -2s infinite both;
	 background: linear-gradient(rgba(229, 230, 247, 0.95), rgba(229, 230, 247, 0.95));
}
#circle2 {
      height:140px; width:140px;
	  background: linear-gradient(rgba(245, 247, 229, 0.95), rgba(245, 247, 229, 0.95));
      right:140px;top:90px;
      z-index:2;
      animation:amimation1 8s ease-in-out -4s infinite both;
}
#circle3 {
      height:90px; width:90px;
      top:180px; right:-45px;
      animation:amimation1 9s ease-in-out 0s infinite both;
	  background: linear-gradient(rgba(229, 230, 247, 0.95), rgba(229, 230, 247, 0.95));
}
#circle4 {
      height:140px; width:140px;
      top:630px; left:-50px;
      animation:amimation1 7s ease-in-out -1s infinite both;
	  background: linear-gradient(rgba(247, 244, 229, 0.95), rgba(247, 244, 229, 0.95));
}
#circle5 {
     background: linear-gradient(rgba(255,120,120,0.9), rgba(255,100,120,0.75));
     height:50px; width:50px;
     right:450px; top:600px;
           animation:amimation1 10s ease-in-out -3s infinite both;
		   background: linear-gradient(rgba(229, 245, 247, 0.95), rgba(229, 245, 247, 0.95));
}
#circle6 {
     height:150px; width:150px;
     left:130px; bottom:170px;
     animation:amimation1 10s ease-in-out -6s infinite both;
	 background: linear-gradient( rgba(237, 247, 229, 0.95), rgba(237, 247, 229, 0.95));
}
}
#circle7 {
     height:80px; width:80px;
     bottom:10px; left:-10px;
     animation:amimation1 10s ease-in-out -8s infinite both;
}
#circle8 {
     background: linear-gradient(rgba(243, 215, 215, 0.95), rgba(243, 215, 215, 0.95));
     height:190px; width:190px;
     right:-10px; bottom:-50px;
     animation:amimation1 5s ease-in-out -1s infinite both;
}
@keyframes amimation1{
   0%{
     transform:translateX(0px) translateY(0px);
   }
   25%{
     transform:translateX(-10px) translateY(5px);
   }
   50%{
     transform:translateX(0px) translateY(-10px);
   }
   75%{
     transform:translateX(10px) translateY(5px);
   }
   100%{
     transform:translateX(0px) translateY(0px);
   }

}
		</style>
	</head>
	<body>
    <?php

            if(isset($_POST['enter'])){

                $email = $_SESSION['email'];
                $projectname = $_POST['projectname'];
                $abstract = $_POST['abstract'];
                $share = $_POST['share'];
                $amount = $_POST['amount'];
                $goals = $_POST['goals'];
               


                        
                               
                $query = "INSERT INTO `enter` ( `email`, `projectname`, `abstract`, `share`, `amount`, `goals`,`id`) VALUES (  '$email', '$projectname', '$abstract', '$share', '$amount', '$goals','0' )";
                if(performQuery($query)){
                    echo "<script>alert('Your Request is successfully registered ,  Thank you.')</script>";
                }else{
                    echo "<script>alert('Unknown error occured, Please Try After Sometime')</script>";
                }
           }
    ?>

<div class="circle" id="circle1"  ></div>
<div class="circle" id="circle2"  ></div>
<div class="circle" id="circle3"  ></div>
<div class="circle" id="circle4"  ></div>
<div class="circle" id="circle5"  ></div>
<div class="circle" id="circle6"  ></div>
<div class="circle" id="circle7"  ></div>
<div class="circle" id="circle8"  ></div>

		<nav class="navbar transparent">
	    <span class="open-slide">
	      <a href="#" onclick="openSlideMenu()">
		  
	        <svg width="30" height="30">
	            <path d="M0,5 30,5" stroke="#111" stroke-width="5"/>
	            <path d="M0,14 30,14" stroke="#111" stroke-width="5"/>
	            <path d="M0,23 30,23" stroke="#111" stroke-width="5"/>
	        </svg>
	      </a>
	    </span>
	  </nav>
	  <br>
      <form name="enter"  method="POST">
        <h5 align="center">Project Details</h5>
        
		<div class="container">
		  <div class="card">
			<div class="container row">
				<div class="input-field col s6">
					<input id="last_name" type="text" class="validate" name="projectname">
					<label for="last_name">Project Title </label>
				  </div>
				  <div class="input-field col s12">
					<textarea id="textarea1" class="materialize-textarea" name="abstract"></textarea>
					<label for="textarea1">Project Department</label>
				  </div>
				</div>
		    </div>
		</div>
		<h5 align="center">Request Form</h5>
		<div class="container">
		  <div class="card">
			  <div class="container row">
				<div class="input-field col s6">
					<input id="share" type="text" class="validate" name="share">
					<label for="share">Percentage of project done</label>
				</div>
				<div class="input-field col s6">
					<input id="amount" type="text" class="validate" name="amount">
					<label for="amount">Requesting Amount</label>
				</div>
				<div class="input-field col s12">
					<textarea id="textarea2" class="materialize-textarea" name="goals"></textarea>
					<label for="textarea2">Brief Your Request</label>
                </div>
                
			  </div>
		  </div>
		</div>
		<div class="container">
			<div class="container row">
				<button  type="submit" name="enter">Submit
					
                  </button>
                  
                  
			</div>
		</div>
    </form>
    

    <div id="side-menu" class="side-nav">
	    <a href="#" class="btn-close" onclick="closeSlideMenu()">&times;</a>
	    
	    <a href="#">Employee Dashboard</a>
	    <a href="receivedsponsors.php">Received Messages</a>
		<a href="myrequests.php">Send Message</a>
		<a href="index.html" id="log">Logout</a>
	  </div>

	  <script>
	    function openSlideMenu(){
	      document.getElementById('side-menu').style.width = '250px';
	      document.getElementById('main').style.marginLeft = '250px';
	    }

	    function closeSlideMenu(){
	      document.getElementById('side-menu').style.width = '0';
	      document.getElementById('main').style.marginLeft = '0';
	    }
  </script>
  <script type="text/javascript">
var doc = document.documentElement;
function fullscreen(){
  if(doc.requestFullscreen){
      doc.requestFullscreen();
  }
 

}


</script>
	</body>

</html>
