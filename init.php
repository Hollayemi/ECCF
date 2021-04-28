<?php 
        $showTex    = fopen('desc/Sunday-0.txt', "r");
        $showText   = fgets($showTex);
        $Sunday     = explode('==',$showText);  
        $sundTxt    = str_replace('\r\n',' ',$Sunday[1]);

        $showTex    = fopen('desc/Tuesday-0.txt', "r");
        $showText   = fgets($showTex);
        $Tuesday    = explode('==',$showText);
        $tueTxt     = str_replace('\r\n',' ',$Tuesday[1]);

        $showTex    = fopen('desc/Friday-0.txt', "r");
        $showText   = fgets($showTex);
        $Friday     = explode('==',$showText);
        $friTxt     = str_replace('\r\n',' ',$Friday[1]);




        $showTex    = fopen('desc/Brothers-Coordinator.txt', "r");
        $showText   = fgets($showTex);
        $Brothers        = explode('==',$showText);  
        // $Brothers   = str_replace('\r\n',' ',$Pre[1]);

        $showTex    = fopen('desc/General-Secretary.txt', "r");
        $showText   = fgets($showTex);
        $Secretary        = explode('==',$showText);
        // $Secretary  = str_replace('\r\n',' ',$Pre[1]);

        $showTex    = fopen('desc/President-0.txt', "r");
        $showText   = fgets($showTex);
        $President        = explode('==',$showText);
        // $President  = str_replace('\r\n',' ',$Pre[1]);

        $showTex    = fopen('desc/Vice-President.txt', "r");
        $showText   = fgets($showTex);
        $Vice        = explode('==',$showText);  
        // $Vice       = str_replace('\r\n',' ',$Pre[1]);

        $showTex    = fopen('desc/Sisters-Cordinator.txt', "r");
        $showText   = fgets($showTex);
        $Sisters        = explode('==',$showText);
        // $Sisters    = str_replace('\r\n',' ',$Pre[1]);
















        // ==========================================+++++++++bible verse+++++++++++++++++++++++================

        
        $showTex             = fopen('desc/bibleSlide-1.txt', "r");
        $showText            = fgets($showTex);
        $bibleSlide_1        = explode('==',$showText);

        $showTex             = fopen('desc/bibleSlide-2.txt', "r");
        $showText            = fgets($showTex);
        $bibleSlide_2        = explode('==',$showText);

        $showTex             = fopen('desc/bibleSlide-3.txt', "r");
        $showText            = fgets($showTex);
        $bibleSlide_3        = explode('==',$showText);





         // ==========================================+++++++++Upcoming  Events+++++++++++++++++++++++================

        
         $showTex                  = fopen('desc/Upcoming-Events-1.txt', "r");
         $showText                 = fgets($showTex);
         $Upcoming_Events_1        = explode('==',$showText);
 

         $showTex                  = fopen('desc/Upcoming-Events-2.txt', "r");
         $showText                 = fgets($showTex);
         $Upcoming_Events_2        = explode('==',$showText);
 


         $showTex                  = fopen('desc/Upcoming-Events-3.txt', "r");
         $showText                 = fgets($showTex);
         $Upcoming_Events_3        = explode('==',$showText);
 





        $Fetch_pic = array();
        $FetchAllPic = glob("webImages/*.png");
        for ($i=0; $i<count($FetchAllPic); $i++){
                $onePic = $FetchAllPic[$i];
                $picChe = explode('-',$onePic);
                $picCheck = explode('/',$picChe[0]);
                if($picCheck[1] ==  'service'){
                        $newG = explode('.',$picChe[1]);
                        $Fetch_pic[]=$newG[0]; 
                        // echo $newG[0];
                                 
                }
        
        }
        $showTex             = fopen('desc/service-'.(sizeof($Fetch_pic)-1).'.txt', "r");
        $showText            = fgets($showTex);
        $service_1           = explode('==',$showText);

        $showTex             = fopen('desc/service-'.(sizeof($Fetch_pic)-2).'.txt', "r");
        $showText            = fgets($showTex);
        $service_2           = explode('==',$showText);

        $showTex             = fopen('desc/service-'.(sizeof($Fetch_pic)-3).'.txt', "r");
        $showText            = fgets($showTex);
        $service_3           = explode('==',$showText);
        
?>
