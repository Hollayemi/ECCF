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
	  <li><a href="AdminShop_registered.php">Shops Registered</a></li>
	  <li><a class="active" href="Admin_agents.php">Agents</a></li>
	  <li><a href="Couple.html">Grade Agents</a></li>
	  <li><a href="Admin_subscribers.php">Subscribers</a></li>
	 
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
    <th>id</th>
    <th>Agent Username</th>
    <th>Account Name</th>
    <th>Account Number</th>
    <th>Bank</th>
    <th>Phone</th>		
    <th>Email</th>
    <th>1 year</th>
    <th>6 months</th>
    <th>3 months</th>
    <th>Amount to pay</th>
  </tr>


<?php
    $mysqli=mysqli_connect('localhost','root','','market');

    $sql="SELECT id,agnUsername,agnAccName,agnAccNumber,Bank,accPhoneNumber,mail,1_year,6_months,3_months,counting FROM agent";
    $run=mysqli_query($mysqli,$sql);

    while($row = mysqli_fetch_assoc($run)) {
        $id                  =       $row["id"];
        $agnUsername         =       $row["agnUsername"];
        $agnAccName          =       $row["agnAccName"];
        $agnAccNumber        =       $row["agnAccNumber"];
        $Bank                =       $row["Bank"];
        $accPhoneNumber      =       $row["accPhoneNumber"];
        $mail                =       $row["mail"];
        $y1                  =       $row["1_year"];
        $m6                  =       $row["6_months"];
        $m3                  =       $row["3_months"];
        $amt2Pay             =       ($row['counting']*1200) + ($row['3_months']*1400) + ($row['6_months']*1600) + ($row['1_year']*1900)
        
        
   
?>


    <tr>
        <td><?php echo $id ?> </td>
        <td><?php echo $agnUsername ?> </td>
        <td><?php echo $agnAccName ?> </td>
        <td><?php echo $agnAccNumber ?> </td>
        <td><?php echo $Bank ?> </td>
        <td><?php echo $accPhoneNumber ?> </td>		
        <td><?php echo $mail ?></td>        
        <td><?php echo $y1 ?></td>  
        <td><?php echo $m6 ?></td>  
        <td><?php echo $m3 ?></td>  
        <td><?php echo '&#x20A6 '.$amt2Pay ?></td> 
    </tr>
  
    
<?php 

    
}
     


?>

</section>


</body>

</html>
