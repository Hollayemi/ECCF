<?php
    session_start();
    if(isset($_SESSION['id'])){
        $id = $_SESSION['id'];
        include('myAdmin/myConfig.php');
        $sql2="SELECT * FROM eccfdetail WHERE id = '$id'";
        $run2=mysqli_query($mysqli,$sql2);
        $result=mysqli_fetch_array($run2,MYSQLI_ASSOC);
    }else{
        header('Location:Login.php?');
    }

    
?>