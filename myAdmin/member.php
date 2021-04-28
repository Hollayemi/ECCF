<?php 
$mainMember = "yes";
include('header.php');
?>
    <div class="rightSidenav">
        <br><br><br>
        <div class="contain">
            <section class="content" style="margin-left:20px;text-align:Left">

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
                    min-width:150px !important;
                    padding: 5px;
                }
                table#t01 tr:nth-child(even) {
                    background-color: #eee;
                }
                table#t01 tr:nth-child(odd) {
                    background-color: #fff;
                }
                </style>


                <table id="t01" style="width:100%">
                <tr>
                    <th>Surname</th>
                    <th>First Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>DOB</th>
                    <th>Year admitted</th>
                    <th>Till</th>
                </tr>


                <?php
                
                    $sql="SELECT Sname,Fname,UEmail,gender,DOB,Yadd,Ygrd FROM eccfdetail WHERE accType = 'member'";
                    $run=mysqli_query($mysqli,$sql);

                    while($row = mysqli_fetch_assoc($run)) {
                        $surname         =       $row["Sname"];
                        $firstName       =       $row["Fname"];
                        $email           =       $row["UEmail"];
                        $gender          =       $row["gender"];
                        $dob             =       $row["DOB"];
                        $Yadd            =       $row["Yadd"];
                        $Ygrd            =       $row['Ygrd'];
                        
                        
                        
                
                ?>


                    <tr>
                        <td><?php echo $surname ?> </td>
                        <td><?php echo $firstName ?> </td>
                        <td><?php echo $email ?> </td>
                        <td><?php echo $gender ?> </td>		
                        <td><?php echo $dob ?> </td>		
                        <td><?php echo $Yadd ?> </td>	
                        <td><?php echo $Ygrd ?></td>        
                    </tr>
                
                    
                <?php 

                    
                }
                    


                ?>

            </section>
    
        </div>
    </div>

</section>



<script>

    document.querySelector('.menuBars').addEventListener('click', function(){
        if(document.querySelector('.leftSidenav').style.marginLeft == "-70%"){
            document.querySelector('.leftSidenav').style.marginLeft="0px"
            document.querySelector('.leftSidenav').style.width="70%"
        }else{
            document.querySelector('.leftSidenav').style.marginLeft="-70%"
            // document.querySelector('.leftSidenav').style.width="-50%"
        }
    })
</script>

</body>
</html>
