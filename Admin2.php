<!DOCTYPE html>
<?php
 session_start();
 include('session.php');
?>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon"type="" href="fashion/n/awesome.png" style="width: 150px;">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/main.css"/>
	<link rel="stylesheet" type="text/css" href="Admin.css">

</head>
<body>
    
    <div class='top'></div>
    <div class='ryt'></div>
<h3>
	<ul class="sidenav">
	  <li><a class="active" href="Admin2.php">Dashboard</a></li>
	  <li><a href="shop_registered.php">Shops Registered</a></li>
	  <li><a href="Admin_agents.php">Agents</a></li>
	  <li><a href="Couple.html">Grade Agents</a></li>
	  <li><a href="Admin_subscribers.php">Subscribers</a></li>
	 
	</ul>
</h3>
<div class="adm" style="margin-left:55%">
    <h3>ADMIN PANEL</h3>
</div>
<section class="content" style="margin-left:20%">
<h3  style="margin-left:20%">Total Registered</h3> <br><br><br>
    <div >
        <div >
            <a href="shop_registered.php" style="text-decoration:none;width:50%;">
                <div class="tot_reg_dashboard">
                    <h4>Shop Registered</h4>
                    <?php echo $_SESSION['tot_shop_reg']?><br><br>
                
                </div>
            </a>
        </div>
        <div>
            <a href="Admin_agents.php" style="text-decoration:none">
                <div class="tot_reg_dashboard">
                    <h4>Agents Registered</h4>
                    <?php echo $_SESSION['tot_agn_reg']?><br><br>
                
                </div>
            </a>
        </div>  

        <div>
            <a href="#" style="text-decoration:none;margin-left:-50%">
                <div class="tot_reg_dashboard">
                    <h4>Total Registered</h4>
                    <?php echo $_SESSION['tot_shop_reg']+ $_SESSION['tot_agn_reg']?><br><br>
                
                </div>
            </a>

        </div>  
    </div>
<br><br><br><br>
<!-------------------------------------2--------------------------------------->
<h3  style="margin-left:20%">Subscribers</h3> <br><br><br>

    <div >
        <div >
            <a href="#" style="text-decoration:none;width:50%; background-color:cyan;">
                <div class="tot_reg_dashboard"style="background-color:cyan; border:1px solid rgb(51, 148, 143)">
                    <h4>1 year Subscribers</h4>
                    <?php echo $_SESSION['type_of_sub_for_year'];?><br><br>
                
                </div>
            </a>
        </div>


        <div >
            <a href="#" style="text-decoration:none">
                <div class="tot_reg_dashboard" style="background-color:cyan;border:1px solid rgb(51, 148, 143)">
                    <h4>6 months Subscribers</h4>
                    <?php echo $_SESSION['type_of_sub_for_6months']?><br><br>
                
                </div>
            </a>

        </div>  

        <div >
            <a href="#" style="text-decoration:none;margin-left:-50%">
                <div class="tot_reg_dashboard" style="background-color:cyan;border:1px solid rgb(51, 148, 143)">
                    <h4>3 months Subscribers</h4>
                    <?php echo $_SESSION['type_of_sub_for_3months']?><br><br>
                
                </div>
            </a>

        </div>  
    </div><br><br><br>

    <!-------------------------------------2--------------------------------------->
<h3  style="margin-left:20%">Agents Payments and Award</h3> <br><br><br>

<div >
    <div >
        <a href="#" style="text-decoration:none;width:50%; background-color:cyan;">
            <div class="tot_reg_dashboard"style="background-color:green;color:white;border:1px solid rgb(51, 148, 143)">
                <h4>Agents to Pay </h4>
                <?php echo $_SESSION['counting5']?><br><br>
            
            </div>
        </a>
    </div>


    <div >
        <a href="#" style="text-decoration:none">
            <div class="tot_reg_dashboard" style="background-color:green;color:white;border:1px solid rgb(51, 148, 143)">
                <h4>Agents with over 20 referrals</h4>
                <?php echo $_SESSION['bestReferrals']?><br><br>
            
            </div>
        </a>

    </div>  

    <div >
        <a href="#" style="text-decoration:none;margin-left:-50%">
            <div class="tot_reg_dashboard" style="background-color:green;color:white;border:1px solid rgb(51, 148, 143)">
                <h4>3 months Subscribers</h4>
                <?php echo $_SESSION['tot_agn_reg']?><br><br>
            
            </div>
        </a>

    </div>  
</div><br><br><br><br><br><br>

</section>


</body>

</html>
