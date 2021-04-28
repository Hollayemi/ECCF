<?php
    $id                 =        $result['id'];

    if(isset($_POST['submitExco'])){
        $Unit1          =        $mysqli->real_escape_string($_POST['Unit1']);
        $Unit2          =        $mysqli->real_escape_string($_POST['Unit2']);
        $servedSet      =        $mysqli->real_escape_string($_POST['servedSet']);
        $postHeld       =        $mysqli->real_escape_string($_POST['postHeld']);
        $Phone          =        $mysqli->real_escape_string($_POST['Phone']);
        $Address        =        $mysqli->real_escape_string($_POST['Address']);
        require_once('uploadFunction.php');
        $fileInputName  =        'excosMemberPic';
        $checkingFact   =        "";
        $_newDir        =        "gallery/".$servedSet."-" .$postHeld.".png";
        if(is_file(uploadPicture($fileInputName,$checkingFact,$_newDir))){
            if($Unit1 != "" && $postHeld != "" && $servedSet != "" && $Phone != "" && $Address != ""){
                if($Unit2 == ""){
                    $Unit2 = "not set";
                }
                $sql="UPDATE eccfdetail SET Unit1='$Unit1',Unit2='$Unit2',excoSet='$servedSet', Phone='$Phone',Address='$Address', PostHeld = '$postHeld' WHERE id = '$id'";
                if(mysqli_query($mysqli,$sql)){
                    echo $profileEdited = "<div class='profileEdited' style='color:red'>Successfully Uploaded</div>";
                }
            }
        }else{
            echo $profileEdited = "<div class='profileEdited' style='color:red'>".uploadPicture($fileInputName,$checkingFact,$_newDir)."</div>";
        }
    }


    if(isset($_POST['submitWorker'])){
        $Unit1          =        $mysqli->real_escape_string($_POST['Unit1']);
        $Unit2          =        $mysqli->real_escape_string($_POST['Unit2']);
        $Phone          =        $mysqli->real_escape_string($_POST['Phone']);
        $Address        =        $mysqli->real_escape_string($_POST['Address']);
        if($Unit1 != "" &&  $Phone != "" && $Address != ""){
            if($Unit2 == ""){
                $Unit2 = "not set";
            }
            $sql="UPDATE eccfdetail SET Unit1='$Unit1',Unit2='$Unit2',Phone='$Phone',Address='$Address' WHERE id = '$id'";
			mysqli_query($mysqli,$sql);
        }
    }

    if(isset($_POST['submitMember'])){
        $Phone          =        $mysqli->real_escape_string($_POST['Phone']);
        $Address        =        $mysqli->real_escape_string($_POST['Address']);
        if( $Phone != "" && $Address != ""){
            $sql="UPDATE eccfdetail SET Phone='$Phone',Address='$Address' WHERE id = '$id'";
            mysqli_query($mysqli,$sql);

        }
    }
?>