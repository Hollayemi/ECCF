<?php 
$mainDasdboard = "yes";
include('header.php');
session_start();
?>
    <div class="rightSidenav">
<br><br><br>

    <h4>Eccf <?php echo (date('Y')-1)."/". date('Y')." = ".$everyBody;?></h4>
    
    <div class="dashBoxes">
        <div class="abox">
            <a href="member.php" style="text-decoration:none;">
                <div class="tot_reg_dashboard">
                    Members
                    <?php echo $allMember; echo $workerFemale;?>
                </div>
            </a>
        </div>
        <div class="abox">
            <a href="worker.php" style="text-decoration:none">
                <div class="tot_reg_dashboard">
                    <h4>
                         Workers
                     <?php echo $allWorker; ?>
                     </h4>
                     <h4>
                         Workers
                     <?php echo $allWorker; ?>
                     </h4>
                </div>
            </a>
        </div>
        <div class="abox">
            <a href="#" style="text-decoration:none;">
                <div class="tot_reg_dashboard">
                    Executives
                    <?php echo $allExecutive; ?>
                </div>
            </a>
        </div>  
        <div class="abox">
            <a href="#" style="text-decoration:none;">
                <div class="tot_reg_dashboard">
                    Alumni
                    <?php echo $allExecutive; ?>
                </div>
            </a>
        </div>  
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
