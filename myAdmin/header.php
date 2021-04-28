<?php 
    session_start();
    include('myConfig.php');
    include('query.php');
    include('submitPage.php');
    ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon"type="" href="fashion/n/awesome.png" style="width: 150px;">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Admin.css">
    <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/style2.css"> -->
</head>
<body>
    <div class="adm">
        <h4 class="menuBars"><i class="fa fa-bars"></i></h4>
        <h3>ADMIN PANEL</h3>
    </div>
    <div class="leftSidenav">
            <ul class="sidenav">
                <?php
                if(isset($mainDasdboard)){
                    echo '<li><a class="active" href="Admin2.php">Dashboard</a></li>';
                 }else{
                     echo '<li><a href="Admin2.php">Dashboard</a></li>';
                 }
                ?>
                  <?php
                if(isset($FirstPageVideos)){
                    echo '<li><a class="active" href="FirstPageVideos.php"><i class="fa fa-home faHeader"></i> Homepage Videos</a></li>';
                 }else{
                     echo '<li><a href="FirstPageVideos.php"><i class="fa fa-home faHeader"></i>Homepage Videos</a></li>';
                 }

                 if(isset($mainMember)){
                    echo '<li><a class="active" href="member.php">Member</a></li>';
                 }else{
                     echo '<li><a href="member.php">Member</a></li>';
                 }

                 if(isset($mainWorker)){
                    echo '<li><a class="active" href="worker.php">Worker</a></li>';
                 }else{
                     echo '<li><a href="worker.php">Worker</a></li>';
                 }
                ?>
                
                
                <li><a href="excos.php">Executives</a></li>
            </ul>
    </div>
