<?php
	session_start();
	session_destroy();
	session_start();
	include('myAdmin/myConfig.php');
	if(isset($_POST['Login'])){
		$username          =	$mysqli->real_escape_string($_POST['username']);
		$password          =	md5($_POST['password']);
		$sql2="SELECT id,Uname,Upass  FROM eccfdetail WHERE Uname='$username'";
		$run2=mysqli_query($mysqli,$sql2);
		$result=mysqli_fetch_array($run2,MYSQLI_ASSOC);
		if($username != "" && $password != ""){
			if(isset($result['Uname'])){
				if(strtolower($result['Uname']) == strtolower($username) && $result['Upass']==$password){
					$_SESSION['id'] = $result['id'];
					header("location:index.php");
				}else{
					$getErr = "Incorrect Password";
				}
			}$getErr = "Incorrect Password";
		}else{
			$getErr = "Nothing Entered";
		}
	}



	if(isset($_POST['Register'])){
		$regUname          =$mysqli->real_escape_string($_POST['regUname']);
		$regUemail         =$mysqli->real_escape_string($_POST['regUemail']);
		$Fname       	   =$mysqli->real_escape_string($_POST['Fname']);
		$Sname      	   =$mysqli->real_escape_string($_POST['Sname']);
		$Yadd      		   =$mysqli->real_escape_string($_POST['Yadd']);
		$Ygrd       	   =$mysqli->real_escape_string($_POST['Ygrd']);
		$gender       	   =$mysqli->real_escape_string($_POST['gender']);
		$regUpass          =md5($_POST['regUpass']);
		$confRegUpass      =md5($_POST['confRegUpass']);
		$regDOB    	       =$mysqli->real_escape_string($_POST['regDOB']);
		$accType    	   =$mysqli->real_escape_string($_POST['accType']);

		$sql2="SELECT Uname  FROM eccfdetail WHERE Uname='$regUname'";
		$run2=mysqli_query($mysqli,$sql2);
		$num_of_rows=mysqli_num_rows($run2);
		if($regUname != "" && $regUpass != "" && $gender != "" && $accType != "" && $Ygrd != "" && $Yadd != "" && $Sname != "" && $Fname != ""){
			if(strlen($confRegUpass)>=8){
				if($regUpass == $confRegUpass){
					if($num_of_rows < 1){
						$sql="INSERT INTO eccfdetail (id,Uname,UPass,UEmail, DOB,accType,gender,Sname,Fname,Yadd,Ygrd,dp) VALUES ('NULL','$regUname','$regUpass',
						'$regUemail','$regDOB','$accType','$gender','$Sname','$Fname','$Yadd','$Ygrd','no pic')";
						mysqli_query($mysqli,$sql);
					}else{
						$getErr = "Account already existed";
					}
				}else{
					$getErr = "Password dosen't match";
				}
			}else{
				$getErr = "Password less than 8 characters";
			}
		}else{
			$getErr = "Nothing Entered";
		}

	}
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Eagles of Christ Campus Fellowship</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Designed by stephanyemmitty" />
	<meta name="author" content="Oluwasusi Stephen Olayemi" />
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="images/Eagles2.png" rel="icon">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700" rel="stylesheet"
	>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>


	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<!-- <div id="page"> -->
	

		<div class="container-wrap" style="background-color:transparent">
            <div class="myLoginBoxes">
				<div class="myTopLoginBox">
					<div class="topDivTitle">
						<?php 
							if(!isset($getErr)){
								echo '<h2 style="text-align:center;line-height:50px">ECCF</h2>';
							}else{
								echo '<h3 class="getErrorInfo">'.$getErr.'</h3>';
							}
						?>
					</div>

					<div class="loingInput">
						<form action="" method="POST" autocomplete='off'>
							<input type="text" placeholder="Username" name="username" style="margin-top:200px;"><br><br>
							<input type="password" placeholder="Password" name="password"><br><br>
							<input type="submit" value="Login" name="Login" class="submitLogin">
						</form>
					</div>
					<div class="loingInput signupInput fir">
						<form action="" method="POST" autocomplete='off'>
							<input type="text" placeholder="Username" name="regUname" style="margin-top:220px;"><br><br>
							<input type="text" placeholder="Email" name="regUemail"><br><br>
							<input type="password" placeholder="Password" name="regUpass"><br><br>
							<input type="password" placeholder="Confirm Password" name="confRegUpass"><br><br>
							<input type="date" placeholder="Date of Birth" name="regDOB" ><br><br>
							<input type="radio" name="accType" value="member" checked> <span class="loginType">Member</span>
							<input type="radio" name="accType" value="worker"> <span class="loginType">Worker</span>
							<input type="radio" name="accType" value="executive"><span class="loginType"> Executive</span> <br><br>
							<h4 class="NextLogin">Next</h4><br><br><br>

							<h4 class="NextLogin prev"><</h4>
							<input type="text" placeholder="First Name" name="Fname"><br><br>
							<input type="text" placeholder="Surname" name="Sname"><br><br>
							<input type="number" placeholder="Year Admitted" min="2000" name="Yadd"><br><br>
							<input type="number" placeholder="Till" min="2000" name="Ygrd"><br><br>
							<input type="radio" name="gender" value="Male" checked> <span class="loginType">Male</span>
							<input type="radio" name="gender" value="Female"> <span class="loginType">Female</span><br><br>
							<input type="submit" value="Sign Up" name="Register" class="submitLogin">
						</form>
					</div>


				</div>
				<div class="myBottomLoginBox">
					<div class="LoginSignUp">
						<div><h3 class="switchLogin">LOGIN</h3></div>
						<div><h3 class="switchSignUp">SIGN UP</h3></div>
					</div>
					<h4 class="ForgotPass"><a href="#">Forgot Password?</a></h4>

				</div>
				
			</div>
	    </div>

	
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<script>
		var loingInput = document.querySelector('.loingInput')
		var signupInput = document.querySelector('.signupInput');

		var switchLogin = document.querySelector('.switchLogin')
		var switchSignUp = document.querySelector('.switchSignUp')

		switchSignUp.addEventListener('click',function(){
			switchLogin.style.backgroundColor="#ffb350"
			switchLogin.style.color="#fff"

			switchSignUp.style.backgroundColor="transparent"
			switchSignUp.style.color="#ffb350"
			loingInput.style.marginTop="-550px"

		})

		switchLogin.addEventListener('click',function(){
			switchLogin.style.backgroundColor="transparent"
			switchSignUp.style.backgroundColor="#ffb350"
			switchSignUp.style.color="#fff"
			switchLogin.style.color="#ffb350"
			loingInput.style.marginTop="0px"
			signupInput.style.marginTop="0px"
		})
		document.querySelector('.NextLogin').addEventListener('click',function(){
			document.querySelector('.signupInput').style.marginTop="-500px"
		})
		
		document.querySelector('.prev').addEventListener('click',function(){
			document.querySelector('.fir').style.marginTop="0px"
		})
	</script>
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

