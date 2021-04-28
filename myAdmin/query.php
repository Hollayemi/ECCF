<?php

$sql="SELECT * FROM eccfdetail";
$run=mysqli_query($mysqli,$sql);
$queryRun = mysqli_fetch_assoc($run);
$everyBody = mysqli_num_rows($run);

$sql="SELECT * FROM eccfdetail WHERE accType = 'Member'";
$run=mysqli_query($mysqli,$sql);
$allMember = mysqli_num_rows($run);



$sql="SELECT * FROM eccfdetail WHERE accType = 'Worker'";
$run=mysqli_query($mysqli,$sql);
$allWorker = mysqli_num_rows($run);


$sql="SELECT * FROM eccfdetail WHERE accType = 'Executive'";
$run=mysqli_query($mysqli,$sql);
$allExecutive = mysqli_num_rows($run);



//  /////////////////////////////////////////////membrt/////////////////////////  ////////////////////////////////////////////////
$sql="SELECT * FROM eccfdetail WHERE accType = 'Member' AND gender='Male'";
$run=mysqli_query($mysqli,$sql);
$memberMale = mysqli_num_rows($run);

$sql="SELECT * FROM eccfdetail WHERE accType = 'Member' AND gender='Female'";
$run=mysqli_query($mysqli,$sql);
$memberFemale = mysqli_num_rows($run);



$sql="SELECT * FROM eccfdetail WHERE accType = 'Worker' AND gender='Male'";
$run=mysqli_query($mysqli,$sql);
$workerMale = mysqli_num_rows($run);

$sql="SELECT * FROM eccfdetail WHERE accType = 'Worker' AND gender='Female'";
$run=mysqli_query($mysqli,$sql);
$workerFemale = mysqli_num_rows($run);
?>