<?php
if(isset($_POST['saveSlides'])){
    $nameOfSlide        =$mysqli->real_escape_string($_POST['noOfSlides']);
    $slideVideoUrl      =$mysqli->real_escape_string($_POST['slideVideoUrl']);
    $slideVideoDesc     =$mysqli->real_escape_string($_POST['slideVideoDesc']);
    $slideVideoTitle    =$mysqli->real_escape_string($_POST['slideVideoTitle']);
    
    $myPath         = $_FILES['slideVideoPreviewPic'];
    $fileName       = $_FILES['slideVideoPreviewPic']['name'];
    $fileSize       = $_FILES['slideVideoPreviewPic']['size'];
    $fileTempName   = $_FILES['slideVideoPreviewPic']['tmp_name'];
    $fileType       = $_FILES['slideVideoPreviewPic']['type'];
    $fileError      = $_FILES['slideVideoPreviewPic']['error'];
    $fileExt        =   explode('.',$fileName);
    $fileActualExt  =   strtolower(end($fileExt));

    $allowed    =   array('jpg','jpeg','png');
    if(in_array($fileActualExt,$allowed)){
        if($fileError === 0){
            if($fileSize > 10 && $nameOfSlide != 'Select Slide *'){
                $fileDestination = '../webImages/'.$nameOfSlide.'.'.'png';
                if($fileDestination){
                    $NewPageFile  =  '../desc/'.$nameOfSlide . ".txt";
                    $contents =$slideVideoTitle."==".$slideVideoUrl."==".$slideVideoDesc;
                        if(file_put_contents($NewPageFile,$contents)){
                        }else{
                        }
                  move_uploaded_file($fileTempName,$fileDestination);
                  $_SESSION['normProfilePic']=$fileDestination;
                }else{
                    echo "pic not uploaded";
                  }
            }else{
              $profileEdited = "<div class='profileEdited' style='color:red'>This file is too big, try with a lesser file size</div>";
            }
        }else{
          $profileEdited = "<div class='profileEdited' style='color:red'>An error has occured, try again with another file</div>";
        }
    }else{
      $profileEdited = "<div class='profileEdited' style='color:red'>Note: File was not changed</div>";
    }
}



// ==================================++++++++++++++++++++Submit Sermon++++++++============================================





if(isset($_POST['saveSermon'])){
  $sermonDay        =$mysqli->real_escape_string($_POST['sermonDay']);
  $sermonBrief   =$mysqli->real_escape_string($_POST['sermonBrief']);
  $sermonTitle   =$mysqli->real_escape_string($_POST['sermonTitle']);
  
  $myPath         = $_FILES['sermonPreviewPic'];
  $fileName       = $_FILES['sermonPreviewPic']['name'];
  $fileSize       = $_FILES['sermonPreviewPic']['size'];
  $fileTempName   = $_FILES['sermonPreviewPic']['tmp_name'];
  $fileType       = $_FILES['sermonPreviewPic']['type'];
  $fileError      = $_FILES['sermonPreviewPic']['error'];
  $fileExt        =   explode('.',$fileName);
  $fileActualExt  =   strtolower(end($fileExt));

  $allowed    =   array('jpg','jpeg','png');
  if(in_array($fileActualExt,$allowed)){
      if($fileError === 0){
          if($fileSize > 10 && $sermonDay != 'Service Day *'){
              $fileDestination = '../webImages/'.$sermonDay.'.'.'png';
              if($fileDestination){
                  $NewPageFile  =  '../desc/'.$sermonDay . ".txt";
                  $contents =$sermonTitle."==".$sermonBrief."==".date("Y/m/d");
                      if(file_put_contents($NewPageFile,$contents)){
                      }else{
                      }
                move_uploaded_file($fileTempName,$fileDestination);
                $_SESSION['normProfilePic']=$fileDestination;
              }else{
                  echo "pic not uploaded";
                }
          }else{
            $profileEdited = "<div class='profileEdited' style='color:red'>This file is too big, try with a lesser file size</div>";
          }
      }else{
        $profileEdited = "<div class='profileEdited' style='color:red'>An error has occured, try again with another file</div>";
      }
  }else{
    $profileEdited = "<div class='profileEdited' style='color:red'>Note: File was not changed</div>";
  }
}











// ==================================++++++++++++++++++++Submit Sermon++++++++============================================



if(isset($_POST['saveExcosMember'])){
  $excosMember            =$mysqli->real_escape_string($_POST['excosMember']);
  $excosMemberWhatsapp  =$mysqli->real_escape_string($_POST['excosMemberWhatsapp']);
  $excosMemberName      =$mysqli->real_escape_string($_POST['excosMemberName']);
  $excosMemberEmail     =$mysqli->real_escape_string($_POST['excosMemberEmail']);
  
  $myPath         = $_FILES['excosMemberPic'];
  $fileName       = $_FILES['excosMemberPic']['name'];
  $fileSize       = $_FILES['excosMemberPic']['size'];
  $fileTempName   = $_FILES['excosMemberPic']['tmp_name'];
  $fileType       = $_FILES['excosMemberPic']['type'];
  $fileError      = $_FILES['excosMemberPic']['error'];
  $fileExt        =   explode('.',$fileName);
  $fileActualExt  =   strtolower(end($fileExt));

  $allowed    =   array('jpg','jpeg','png');
  if(in_array($fileActualExt,$allowed)){
      if($fileError === 0){
          if($fileSize > 10 && $excosMember != 'Central Executives'){
              $fileDestination = '../webImages/'.$excosMember.'.'.'png';
              if($fileDestination){
                  $NewPageFile  =  '../desc/'.$excosMember. ".txt";
                  $contents =$excosMemberName."==".$excosMemberWhatsapp."==".$excosMemberEmail;
                      if(file_put_contents($NewPageFile,$contents)){
                      }else{
                      }
                move_uploaded_file($fileTempName,$fileDestination);
                $_SESSION['normProfilePic']=$fileDestination;
              }else{
                  echo "pic not uploaded";
                }
          }else{
            $profileEdited = "<div class='profileEdited' style='color:red'>This file is too big, try with a lesser file size</div>";
          }
      }else{
        $profileEdited = "<div class='profileEdited' style='color:red'>An error has occured, try again with another file</div>";
      }
  }else{
    $profileEdited = "<div class='profileEdited' style='color:red'>Note: File was not changed</div>";
  }
}






if(isset($_POST['sermonTopics'])){
  $Topic         =$mysqli->real_escape_string($_POST['Topic']);
  $preacherName  =$mysqli->real_escape_string($_POST['preacherName']);
  $topicText     =$mysqli->real_escape_string($_POST['topicText']);

  $Fetch_pic = array();
    $FetchAllPic = glob("../webImages/*.png");
    for ($i=0; $i<count($FetchAllPic); $i++){
        $onePic = $FetchAllPic[$i];
        $picChe = explode('-',$onePic);
        $picCheck = explode('/',$picChe[0]);
        if($picCheck[2] ==  'service'){
            $Fetch_pic[]=$picCheck[0];
            
        }
        
    }
    
    
  
  $myPath         = $_FILES['excosMemberPic'];
  $fileName       = $_FILES['excosMemberPic']['name'];
  $fileSize       = $_FILES['excosMemberPic']['size'];
  $fileTempName   = $_FILES['excosMemberPic']['tmp_name'];
  $fileType       = $_FILES['excosMemberPic']['type'];
  $fileError      = $_FILES['excosMemberPic']['error'];
  $fileExt        =   explode('.',$fileName);
  $fileActualExt  =   strtolower(end($fileExt));

  $allowed    =   array('jpg','jpeg','png');
  if(in_array($fileActualExt,$allowed)){
      if($fileError === 0){
          if($fileSize > 10 && $Topic != ' '){
              $fileDestination = '../webImages/service-'.sizeof($Fetch_pic).'.'.'png';
              if($fileDestination){
                  $NewPageFile  =  '../desc/service-'.sizeof($Fetch_pic). ".txt";
                  $contents = $Topic."==".$preacherName."==".$topicText."==".date("Y/m/d");
                      if(file_put_contents($NewPageFile,$contents)){
                      }else{
                      }
                move_uploaded_file($fileTempName,$fileDestination);
                $_SESSION['normProfilePic']=$fileDestination;
              }else{
                  echo "pic not uploaded";
                }
          }else{
            $profileEdited = "<div class='profileEdited' style='color:red'>This file is too big, try with a lesser file size</div>";
          }
      }else{
        $profileEdited = "<div class='profileEdited' style='color:red'>An error has occured, try again with another file</div>";
      }
  }else{
    $profileEdited = "<div class='profileEdited' style='color:red'>Note: File was not changed</div>";
  }
}



if(isset($_POST['submitBibleVerse'])){
  $bibleSlide          =$mysqli->real_escape_string($_POST['bibleSlide']);
  $bibleVerse          =$mysqli->real_escape_string($_POST['bibleVerse']);
  $bibleText           =$mysqli->real_escape_string($_POST['bibleText']);

  $NewPageFile  =  '../desc/'.$bibleSlide. ".txt";
  $contents = $bibleVerse."==".$bibleText;
      if(file_put_contents($NewPageFile,$contents)){
      }else{
      }

}






if(isset($_POST['myBookSubmit'])){
  $writtenBy          =   $mysqli->real_escape_string($_POST['writtenBy']);
  $bookTopic          =   $mysqli->real_escape_string($_POST['bookTopic']);
  $inBrief            =   $mysqli->real_escape_string($_POST['inBrief']);
  
  require_once('../uploadFunction.php');

  $fileInputName    =       "myBook";
  $checkingFact     =       "";
  $_newDir          =       "../e-books/".$bookTopic.'-'.$writtenBy;
  uploadEbooks($fileInputName,$checkingFact,$_newDir);

  $NewPageFile  =  '../desc/'.$upcomingEvents. ".txt";
  $contents = $eventTitle."==".$eventDate."==".$aboutEvent;
      if(file_put_contents($NewPageFile,$contents)){
      }else{
      }

}












if(isset($_POST['submitUpcomingEvents'])){
  $upcomingEvents          =$mysqli->real_escape_string($_POST['upcomingEvents']);
  $eventDate               =$mysqli->real_escape_string($_POST['eventDate']);
  $eventTitle              =$mysqli->real_escape_string($_POST['eventTitle']);
  $aboutEvent              =$mysqli->real_escape_string($_POST['aboutEvent']);

  $NewPageFile  =  '../desc/'.$upcomingEvents. ".txt";
  $contents = $eventTitle."==".$eventDate."==".$aboutEvent;
      if(file_put_contents($NewPageFile,$contents)){
      }else{
      }

}


?>