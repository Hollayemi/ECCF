<?php 
$mainExcos = "yes";
include('header.php');
session_start();
?>
    <div class="rightSidenav">
<br><br><br>

    <h4>Eccf <?php echo (date('Y')-1)."/". date('Y')." = ".$everyBody;?></h4>
    
      
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
