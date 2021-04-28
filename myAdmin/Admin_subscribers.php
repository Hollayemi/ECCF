<!DOCTYPE html>
<?php
 session_start();
 include('session.php');
?>
<html>
<head>
	<title>Men</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon"type="" href="fashion/n/awesome.png" style="width: 150px;">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="Admin.css">
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    
    <div class='top'></div>
    <div class='ryt'></div>
<h3>
	<ul class="sidenav">
	  <li><a href="Admin2.php">Dashboard</a></li>
	  <li><a href="shop_registered.php">Shops Registered</a></li>
	  <li><a href="Admin_agents.php">Agents</a></li>
	  <li><a href="Couple.html">Grade Agents</a></li>
	  <li><a class="active" href="Admin_subscribers.php">Subscribers</a></li>
	 
	</ul>
</h3>
<div class="adm" style="margin-left:55%">
    <h3>ADMIN PANEL</h3>
</div><br><br><br>
<section class="content" style="margin-left:26%;margin-right:6%">

<style>
table{
    width:100%;
}
table, th, td {
    border: 0px solid black;
    border-collapse: collapse;
    margin-left:0%;
    margin-right:10%;
    margin-top:30px;
    margin-bottom:130px;
}
th, td {
    padding: 5px;
}
</style>



<table style="width:100%">
  <tr>
    <th>Usernames</th>
    <th>Emails</th>
    <th>Shops Subscribed</th>
    <th>Expires on</th>
    <th>Subscribed on</th>
    <th>Days Left</th>
    <th>Type of subscription</th>
  </tr>


<?php
    $mysqli=mysqli_connect('localhost','root','','market');

    $sql="SELECT username,email,shop,Date_expired,Date_subscribed,type_of_sub,Days_left FROM subscribers";

    $run=mysqli_query($mysqli,$sql);

    function Delete($id) {
        $sql="DELETE * FROM users WHERE id='$id'";
        mysqli_query($mysqli,$sql);
    }

    while($row = mysqli_fetch_assoc($run)) {
        $Usernames          =       $row["username"];
        $Emails             =       $row["email"];
        $Shops              =       $row["shop"];
        $Expire             =       $row["Date_expired"];
        $Subscribed         =       $row["Date_subscribed"];
        $Days               =       $row['Days_left'];
        $Type               =       $row["type_of_sub"];
        
        
        
   
?>


    <tr>
        <td><?php echo $Usernames ?> </td>
        <td><?php echo $Emails ?> </td>
        <td><?php echo $Shops ?> </td>
        <td><?php echo $Expire ?> </td>		
        <td><?php echo $Subscribed ?> </td>		
        <td><?php echo $Days ?> </td>	
        <td><?php echo $Type ?></td>        
    </tr>
  
    
<?php 

    
}
     


?>

</section>


</body>

</html>
