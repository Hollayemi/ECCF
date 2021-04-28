<?php

function uploadPicture($fileInputName,$checkingFact,$_newDir){

    $myPath         = $_FILES[ $fileInputName ];
    $fileName       = $_FILES[ $fileInputName ]['name'];
    $fileSize       = $_FILES[ $fileInputName ]['size'];
    $fileTempName   = $_FILES[ $fileInputName ]['tmp_name'];
    $fileType       = $_FILES[ $fileInputName ]['type'];
    $fileError      = $_FILES[ $fileInputName ]['error'];

    $fileExt        =   explode('.',$fileName);
    $fileActualExt  =   strtolower(end($fileExt));
  
    $allowed    =   array('jpg','jpeg','png');
    if(in_array($fileActualExt,$allowed)){
        if($fileError === 0){
            if($fileSize > 10){
                $fileDestination = $_newDir;
                if($fileDestination){
                  move_uploaded_file($fileTempName,$fileDestination);
                  return $fileDestination;
                }else{
                    return "pic not uploaded";
                  }
            }else{
              return "<div class='profileEdited' style='color:red'>This file is too big, try with a lesser file size</div>";
            }
        }else{
            return "<div class='profileEdited' style='color:red'>An error has occured, try again with another file</div>";
        }
    }else{
        return "<div class='profileEdited' style='color:red'>Note: File was not changed</div>";
    }
}











function uploadEbooks($fileInputName,$checkingFact,$_newDir){

    $myPath         = $_FILES[ $fileInputName ];
    $fileName       = $_FILES[ $fileInputName ]['name'];
    $fileSize       = $_FILES[ $fileInputName ]['size'];
    $fileTempName   = $_FILES[ $fileInputName ]['tmp_name'];
    $fileType       = $_FILES[ $fileInputName ]['type'];
    $fileError      = $_FILES[ $fileInputName ]['error'];

    $fileExt        =   explode('.',$fileName);
    $fileActualExt  =   strtolower(end($fileExt));
  
    $allowed    =   array('ppt','pdf','docx');
    if(in_array($fileActualExt,$allowed)){
        if($fileError === 0){
            if($fileSize > 10){
                $fileDestination = $_newDir.".".$fileActualExt;
                if($fileDestination){
                  move_uploaded_file($fileTempName,$fileDestination);
                  return $fileDestination;
                }else{
                    return "pic not uploaded";
                  }
            }else{
              return "<div class='profileEdited' style='color:red'>This file is too big, try with a lesser file size</div>";
            }
        }else{
            return "<div class='profileEdited' style='color:red'>An error has occured, try again with another file</div>";
        }
    }else{
        return "<div class='profileEdited' style='color:red'>Note: File was not changed</div>";
    }
}


?>