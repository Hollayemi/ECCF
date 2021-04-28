  <section class="setWorker">
        <div>
            <center>
                <h4>Welcome, <?php echo $result['Uname'] ?>.</h4>
                <form action="" method="POST" autocomplete='off' enctype="multipart/form-data">
                    <input type="number" placeholder="Phone number" min="2000" name="Phone"><br>
                    <input type="Text"   placeholder="Address" min="2000" name="Address"><br>
                <?php if($result['accType'] == 'worker' || $result['accType'] == 'executive') {?>
                    <select class='slide-select-css' name="Unit1">
                        <option disabled="true" selected>Select Unit <i style="color:red">*</i></option>
                        <option value="Academic">Academic</option>
                        <option value="Bible Study">Bible Study</option>
                        <option value="Choir">Choir</option>
                        <option value="Decorating">Decorating</option>
                        <option value="Drama">Drama</option>
                        <option value="Editorial">Editorial</option>
                        <option value="Evangelism">Evangelism</option>
                        <option value="Prayer">Prayer</option>
                        <option value="Technical">Technical</option>
                        <option value="Ushering">Ushering</option>
                        <option value="Welfare">Welfare</option>
                    </select><br>
                    <select class='slide-select-css' name="Unit2">
                        <option disabled="true" selected>Select Unit2 (optional)</i></option>
                        <option value="None">None</option>
                        <option value="Academic">Academic</option>
                        <option value="Bible Study">Bible Study</option>
                        <option value="Choir">Choir</option>
                        <option value="Decorating">Decorating</option>
                        <option value="Drama">Drama</option>
                        <option value="Editorial">Editorial</option>
                        <option value="Evangelism">Evangelism</option>
                        <option value="Prayer">Prayer</option>
                        <option value="Technical">Technical</option>
                        <option value="Ushering">Ushering</option>
                        <option value="Welfare">Welfare</option>
                    </select><br>
                    
                    <?php if($result['accType'] == 'executive') {?>
                        <input type="number" placeholder="set" min="2000" name="servedSet"><br>
                        <input type="text" placeholder="Post held / Post Holding" name="postHeld"><br><br>
                        <label class="new-button setWorkerPicBtn" for="setWorkerPic" title="Choose picture"><i class="fa fa-upload"></i>Your Real Picture</label><br>
                        <input type="file" name='excosMemberPic' id="setWorkerPic" onchange="excos(this)" class="new-button" style="padding:10px;"> 
                        <?php }  ?>
                    <?php }  ?>
                    <?php
                    if($result['accType'] == 'executive') {
                        echo '<input type="submit" name="submitExco"  value="Submit"><br>';
                    }elseif($result['accType'] == 'worker'){
                        echo '<input type="submit" name="submitWorker" value="Submit"><br>';
                    }else{
                        echo '<input type="submit" name="submitMember" value="Submit"><br>';
                    }
                    ?>
                </form>

            </center>
        </div>
    </section>

<?php
    include('execToDatabase.php')
?>