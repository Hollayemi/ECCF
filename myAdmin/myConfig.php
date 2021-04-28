<?php
$mysqli=mysqli_connect('localhost','root','','eccf');
if(isset($_SESSION['id'])){
    $id = $_SESSION['id'];

    $sql="SELECT * FROM eccfdetail WHERE id='$id'";
    $run=mysqli_query($mysqli,$sql);
    $result = mysqli_fetch_assoc($run);
}




// gender


?>
