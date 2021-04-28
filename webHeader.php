<?php
	include('init.php');
	include('session.php');
	if($result['Phone'] == 0){
		include('getExecutives.php');
	}

	if(isset($_POST['Change'])){
		$changeRegUname     =$mysqli->real_escape_string($_POST['changeRegUname']);
		$sql2="SELECT Uname  FROM eccfdetail WHERE Uname='$changeRegUname'";
		$run2=mysqli_query($mysqli,$sql2);
		$num_of_rows=mysqli_num_rows($run2);

		$changeRegUemail         =$mysqli->real_escape_string($_POST['changeRegUemail']);
		$changeRegUpass          =md5($_POST['changeRegUpass']);
		$changeConfRegUpass      =md5($_POST['changeConfRegUpass']);
		$changeRegDOB    	     =$mysqli->real_escape_string($_POST['changeRegDOB']);
		$changeAccType    	  	 =$mysqli->real_escape_string($_POST['changeAccType']);

		
		$myPath         = $_FILES['changeUpic'];
		$fileName       = $_FILES['changeUpic']['name'];
		$fileSize       = $_FILES['changeUpic']['size'];
		$fileTempName   = $_FILES['changeUpic']['tmp_name'];
		$fileType       = $_FILES['changeUpic']['type'];
		$fileError      = $_FILES['changeUpic']['error'];
		$fileExt        =   explode('.',$fileName);
		$fileActualExt  =   strtolower(end($fileExt));
		$allowed    =   array('jpg','jpeg','png');
		if(in_array($fileActualExt,$allowed)){
			if($fileError === 0){
				if($fileSize > 10){
					$fileDestination = 'profPics/'.$changeRegUname.'.'.'png';
					if($fileDestination){
						move_uploaded_file($fileTempName,$fileDestination);
						if($changeRegUname != "" && $changeRegUpass != "" && $changeConfRegUpass != ""){
							if(strlen($changeConfRegUpass)>=8){
								if($changeRegUpass == $changeConfRegUpass){
									if($num_of_rows < 2){
										$sql="UPDATE eccfdetail SET Uname='$changeRegUname',Upass='$changeRegUpass',UEmail='$changeRegUemail', DOB='$changeRegDOB',accType='$changeAccType', dp = '$fileDestination' WHERE id = '$id'";
										mysqli_query($mysqli,$sql);
									}else{
										$getErr = "Username already existed";
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
					}else{
						$getErr = "Fd";
					}
				}else{
					$getErr = "space";
				}
			}else{
				$getErr = "err";
			}
		}else{
			$getErr = "no f";
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
	<meta name="description" content="Created for Eagles Of christ Campus fellowship" />
	<meta name="keywords" content="" />
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

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700" rel="stylesheet">
	
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style2.css">
	<link href="lightbox/css/lightbox.min.css" rel="stylesheet">
	<link href="lightbox/css/lightbox.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link href="images/Eagles2.png" rel="icon">
	<script src="js/modernizr-2.6.2.min.js"></script>

	
	</head>
	<body class="body">
	<div class="mainEditBox">
		<div class="editTopbox">
		<div class="previewImageSide">
			<div class="previewImage tumaDiv tuma2" id="secServiceblab">
				<i class="fa fa-camera mySaCme2" style="color:#fff; line-height:100px"></i>
				<img  src='<?php echo $result['dp']?>' class='reframePic1' style="display:none"> 
				<img id='myblabService' src='#' class='reframePic' style="display:none; z-index:1000000;"> 

			</div>
		</div>
		</div>
		
		<div class="loingInput signupInput" style="margin-top:-100px;position:absolute; width:100%">
			<form action="" method="POST" autocomplete='off' enctype="multipart/form-data">
				<input type="text" placeholder="Username" value="<?php echo $result['Uname']?>" name="changeRegUname" style="margin-top:220px;"><br><br>
				<input type="text" placeholder="Email" value="<?php echo $result['UEmail'] ?>" name="changeRegUemail"><br><br>
				<input type="password" placeholder="Password"  name="changeRegUpass"><br><br>
				<input type="password" placeholder="Confirm Password" name="changeConfRegUpass"><br><br>
				<input type="date" placeholder="Date of Birth" value="<?php echo $result['DOB'] ?>" name="changeRegDOB" ><br><br>
				<input type="radio" name="changeAccType" value="member" checked> <span class="loginType">Member</span>
				<input type="radio" name="changeAccType" value="worker"> <span class="loginType">Worker</span>
				<input type="radio" name="changeAccType" value="executive"><span class="loginType"> Executive</span> <br><br>
				<label class="new-button upLabel1" style="margin-left:-20px;margin-top:-10px" for="serUpload" title="Choose picture"><i class="fa fa-upload"></i> Add Picture</label><br><br>
                <input type="file" name='changeUpic' id="serUpload" onchange="userpic(this)" class="new-button" style="padding:10px;"> 
				<input type="submit" value="Update" name="Change" class="submitLogin">
			</form>
		</div>

		<div class="editBottomBox"></div>
	</div>
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container-wrap">
			


			<div class="top-menu">
				<div class="row">
					<div class="col-md-12 col-offset-0 text-center">
						<div class="eaglesLogos">
							<br><br>
							<img src="images/Eagles2.png" class="eagleLogo" alt="">
							<img src="images/Eagles.png" class="schoolLogo" alt="">
						</div>
						<div id="fh5co-logo"><a href="index.php">Eagles of Christ Campus Fellowship<? if(isset($getErr)){echo $getErr;} ?></a></div>
					</div>
					<div class="col-md-12 col-md-offset-0 text-center menu-1">
						<ul style="padding-top:50px">
						<?php
							if(isset($home)){
								echo '<li class="active"><a href="index.php">Home</a></li>';
							}else{
								echo '<li><a href="index.php">Home</a></li>';
							}
							if(isset($sermon)){
								echo '<li class="active"><a href="sermons.php">Sermons</a></li>';
							}else{
								echo '<li><a href="sermons.php">Sermons</a></li>';
							}
							if(isset($song)){
								echo '<li class="has-dropdown active">';
							}else{
								echo '<li class="has-dropdown">';
							}
							?>						
								<a href="song.php">Songs</a>
								<ul class="dropdown">
									<li><a href="#">Nigerial Gospel Music</a></li>
									<li><a href="#">Nigerial Gospel Music</a></li>
									<li><a href="#">Chants</a></li>
									<li><a href="#">Instrumentals</a></li>
								</ul>
							</li>
							<?php
							if(isset($articles)){
								echo '<li class="active"><a href="articles.php">Articles</a></li>';
							}else{
								echo '<li><a href="articles.php">Articles</a></li>';
							}
							if(isset($about)){
								echo '<li class="active"><a href="about.php">About</a></li>';
							}else{
								echo '<li><a href="about.php">About</a></li>';
							}
							if(isset($contact)){
								echo '<li class="active"><a href="contact.php">Contact us</a></li>';
							}else{
								echo '<li><a href="contact.php">Contact us</a></li>';
							}
							if(isset($gallery)){
								echo '<li class="active"><a href="gallery.php">Gallery</a></li>';
							}else{
								echo '<li><a href="gallery.php">Gallery</a></li>';
							}
							?>
							<li class="has-dropdown"
							><a href="#" class="donate <?php if($result['dp'] == "no pic"){ echo "no_txt";}else{echo "no_pic";}?>">
								<?php
									if($result['dp'] == "no pic"){
										echo substr($result['Uname'],0,3);
									}else{
										echo '<img src="profPics/Oluwasusi.png" alt="">';
									}
								?>
							</a>
							<ul class="dropdown">
									<li><a href="#"><?php echo ($result['Uname']) ?></a></li>
									<li><a href="#"><?php echo ($result['accType']) ?></a></li>
									<li style="border-bottom:1px solid #fff"><a href="#"><?php echo ($result['UEmail']) ?></a><br></li>
									<li class="clickEdit">EDIT</li>
									<li><a href="Login.php">Logout</a></li>
								</ul>						
							</li>

						</ul><br>
					</div>
				</div>
				
			</div>
		</div>
	</nav>
	<div class="container-wrap">
		<aside id="fh5co-hero">
			<div class="flexslider">
				<ul class="slides">
				   <li class="slides_li">
					<img src="webImages/Slide-1.png" alt="" class="chk_bg_pic">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 text-center">
				   				<div class="slider-text">
								   <div class="slider-text-inner">
										   <?php 
										 		$showTex = fopen('desc/Slide-1.txt', "r");
												 $showText = fgets($showTex);
												 $showTexts=explode('==',$showText);  
										   ?>
					   					<h1><?php echo $showTexts[0] ?></h1>
											<h2><?php echo substr($showTexts[2],0,50)."..." ?></h2>
											<p><a class="btn btn-primary btn-demo popup-vimeo" href="https://vimeo.com/channels/staffpicks/93951774"> <i class="icon-play4"></i> Watch Video</a> <a class="btn btn-primary btn-learn">Join us here! <i class="icon-arrow-right3"></i></a></p>
					   				</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
				   <li>
				   <img src="webImages/Slide-2.png" alt="" class="chk_bg_pic">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 text-center">
				   				<div class="slider-text">
					   				<div class="slider-text-inner">
										   <?php 
										 		$showTex = fopen('desc/Slide-2.txt', "r");
												 $showText = fgets($showTex);
												 $showTexts=explode('==',$showText);  
										   ?>
					   					<h1><?php echo $showTexts[0] ?></h1>
										   <h2><?php echo substr($showTexts[2],0,50)."..." ?></h2>
											<p><a class="btn btn-primary btn-demo popup-vimeo" href="https://vimeo.com/channels/staffpicks/93951774"> <i class="icon-play4"></i> Watch Video</a> <a class="btn btn-primary btn-learn">Join us here! <i class="icon-arrow-right3"></i></a></p>
					   				</div>
					   			</div>
				   			</div>
				   		</div>
			   		</div>
				   </li>
				   <li>
				   <img src="webImages/Slide-3.png" alt="" class="chk_bg_pic">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 text-center">
				   				<div class="slider-text">
								   <div class="slider-text-inner">
										   <?php 
										 		$showTex = fopen('desc/Slide-3.txt', "r");
												 $showText = fgets($showTex);
												 $showTexts=explode('==',$showText);  
										   ?>
					   					<h1><?php echo $showTexts[0] ?></h1>
										   <h2><?php echo substr($showTexts[2],0,10)."..." ?></h2>
											<p><a class="btn btn-primary btn-demo popup-vimeo" href="https://vimeo.com/channels/staffpicks/93951774"> <i class="icon-play4"></i> Watch Video</a> <a class="btn btn-primary btn-learn">Join us here! <i class="icon-arrow-right3"></i></a></p>
					   				</div>
					   			</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li>
				   <img src="webImages/Slide-4.png" alt="" class="chk_bg_pic">
			   		<div class="overlay"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 text-center">
				   				<div class="slider-text">
								   <div class="slider-text-inner">
										   <?php 
										 		$showTex = fopen('desc/Slide-4.txt', "r");
												 $showText = fgets($showTex);
												 $showTexts=explode('==',$showText);  
										   ?>
					   					<h1><?php echo $showTexts[0] ?></h1>
										   <h2><?php echo substr($showTexts[2],0,10)."..." ?></h2>
											<p><a class="btn btn-primary btn-demo popup-vimeo" href="https://vimeo.com/channels/staffpicks/93951774"> <i class="icon-play4"></i> Watch Video</a> <a class="btn btn-primary btn-learn">Join us here! <i class="icon-arrow-right3"></i></a></p>
					   				</div>
					   			</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		