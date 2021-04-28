<?php
    $FirstPageVideos = 'yes';
    include('header.php');
?>
        <div class="rightSidenav">
            <div>
            <h4 class="divTitle" style="margin-top:150px">Change Slides Pictures</h4>
                 <div class="flexSecA">
                    <div class="inputField">
                        <form action="" method="POST" autocomplete='off' enctype="multipart/form-data">
                            <input type="submit" class="submitButton" value='Save' name='saveSlides'><br>
                            <select class='slide-select-css' name="noOfSlides">
                                <option disabled="true" selected>Select Slide <i style="color:red">*</i></option>
                                <option value="Slide-1">Slide 1</option>
                                <option value="Slide-2">Slide 2</option>
                                <option value="Slide-3">Slide 3</option>
                                <option value="Slide-4">Slide 4</option>
                            </select>
                            <h5><input placeholder="Video URL" type="text" name='slideVideoUrl'></h5>
                            <h5>please, enter the video<i> YouTube</i> url</h5>
                            <h5><input type="text" placeholder="Title" name='slideVideoTitle'></h5>
                            <textarea placeholder="Brief Description" name='slideVideoDesc' id=""></textarea>
                            <h4><label class="new-button upLabel1" for="Agnupload" title="Choose picture"><i class="fa fa-upload"></i> Add Picture</label></h4>
                            <input type="file" name='slideVideoPreviewPic' id="Agnupload" onchange="readURL(this)" class="new-button" style="padding:10px;"> 
                        </form>
                    </div>
                    <div class="previewImageSide">
                        <div class="previewImage tumaDiv" id="secblab">
                            <i class="fa fa-camera-retro myCme"></i>
                            <img id='myblab' src='#' class='tuma' style="display:none">      
                        </div>
                    </div>
                </div>
            </div>

<br><br><br>

<hr>
            <div>
            <h4 class="divTitle">Change Service Day</h4>
            
            <div class="flexSecA">
                <div class="inputField">
                    <form action="" method="POST" autocomplete='off' enctype="multipart/form-data">
                        <input type="submit"  class="submitButton" value='Save' name='saveSermon'><br>
                        <select class='slide-select-css' name="sermonDay">
                            <option disabled="true" selected>Service Day <i style="color:red">*</i></option>
                            <option value="Sunday-0">Sunday</option>
                            <option value="Tuesday-0">Tuesday</option>
                            <option value="Friday-0">Friday</option>
                        </select>
                        <h5><input type="text" placeholder="Sermon Title" name='sermonTitle'></h5>
                        </h5><textarea name='sermonBrief' placeholder="" id=""></textarea><br>
                        <h4><label class="new-button upLabel1" for="serUpload" title="Choose picture"><i class="fa fa-upload"></i> Add Picture</label></h4>
                        <input type="file" name='sermonPreviewPic' id="serUpload" onchange="readService(this)" class="new-button" style="padding:10px;"> 
                    </form>
                </div>
                <div class="previewImageSide">
                    <div class="previewImage tumaDiv" id="secServiceblab">
                        <i class="fa fa-camera-retro mySaCme"></i>
                        <img id='myblabService' src='#' class='tuma' style="display:none">      
                    </div>
                </div>
            </div>
            </div>

            <hr>
            <div>
                <h4 class="divTitle">Change Central Excos</h4>
                <div class="flexSecA">
                    <div class="inputField">
                        <form action="" method="POST" autocomplete='off' enctype="multipart/form-data">
                            <input type="submit" class="submitButton" value='Save' name='saveExcosMember'><br>
                            <select class='slide-select-css' name="excosMember">
                                <option disabled="true" selected>Central Executives</option>
                                <option value="President-0">President</option>
                                <option value="Vice-President">Vice President</option>
                                <option value="General-Secretary">General Secretary</option>
                                <option value="Brothers-Coordinator">Brothers Coordinator</option>
                                <option value="Sisters-Cordinator">Sisters Coordinator</option>
                            </select>
                            <h5><input type="text" placeholder="Name" name='excosMemberName'></h5>
                            <h5><input placeholder="Whatsapp number" type="text" name='excosMemberWhatsapp'></h5>
                            <h5><input type="text" placeholder="Email" name='excosMemberEmail'></h5>
                            <h4><label class="new-button upLabel1" for="myexcos" title="Choose picture"><i class="fa fa-upload"></i> Add Picture</label></h4>
                            <input type="file" name='excosMemberPic' id="myexcos" onchange="excos(this)" class="new-button" style="padding:10px;"> 
                        </form>
                    </div>
                    <div class="previewImageSide">
                        <div class="previewImage tumaDiv" id="excossecblab">
                            <i class="fa fa-camera-retro myexcosCme"></i>
                            <img id='excosblab' src='#' class='tuma' style="display:none">      
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div>
                <h4 class="divTitle">Add Sermon</h4>
                <div class="flexSecA">
                    <div class="inputField">
                        <form action="" method="POST" autocomplete='off' enctype="multipart/form-data">
                            <input type="submit" value='Save' class="submitButton" name='sermonTopics'>
                            <h5><input type="text" placeholder="Topic" name='Topic'></h5>
                            <h5><input type="text" placeholder="Preacher" name='preacherName'></h5>
                            <h5><input type="text" placeholder="Text" name='topicText'></h5>
                            <h4><label class="new-button upLabel1" for="eaglesTopic" title="Choose picture"><i class="fa fa-upload"></i> Add Picture</label></h4>
                            <input type="file" name='excosMemberPic' id="eaglesTopic" onchange="topics(this)" class="new-button" style="padding:10px;"> 
                        </form>
                    </div>
                    <div class="previewImageSide">
                        <div class="previewImage tumaDiv" id="topicssecblab">
                            <i class="fa fa-camera-retro topicsCme"></i>
                            <img id='topicsblab' src='#' class='tuma' style="display:none">      
                        </div>
                    </div>
                </div>
            </div>


            <hr>
            <div>
                <h4 class="divTitle">Bible Text Slides</h4>
                <div class="flexSecA">
                    <div class="inputField">
                        <form action="" method="POST" autocomplete='off' enctype="multipart/form-data">
                            <select class='slide-select-css' name="bibleSlide">
                                <option disabled="true" selected>Bible verse</option>
                                <option value="bibleSlide-1">Slide 1</option>
                                <option value="bibleSlide-2">Slide 2</option>
                                <option value="bibleSlide-3">Slide 3</option>
                            </select>
                            <h5><input type="text"  placeholder="Bible Text" name='bibleText'></h5>
                            <textarea placeholder="Bible Verse" name="bibleVerse"></textarea>
                            <input type="submit" value='Save' class="submitButton" name='submitBibleVerse'>
                        </form>
                    </div>
                    
                </div>

            </div>




            <hr>
            
            <div>
                <h4 class="divTitle">Add Article e.g .pdf, .docs, .ppt</h4>
                <div class="flexSecA">
                    <div class="inputField">
                        <form action="" method="POST" autocomplete='off' enctype="multipart/form-data">
                            <input type="submit" value='Save' class="submitButton" name='myBookSubmit'>
                            <h5><input type="text" placeholder="Topic" name='bookTopic'></h5>
                            <h5><input type="text" placeholder="Written by" name='writtenBy'></h5>
                            <textarea placeholder="Book In Brief," name="inBrief"></textarea>
                            <h4><label class="new-button upLabel1" for="myBookCover" title="Choose picture"><i class="fa fa-upload"></i> Add Book Cover</label></h4>
                            <input type="file" name='myBookCover' id="myBookCover" onchange="myBookCover(this)" class="new-button" style="padding:10px;"> 


                            <h4><label class="new-button upLabel1" for="myBook" title="Choose picture"><i class="fa fa-upload"></i> Upload (.pdf, .docx, .ppt)</label></h4>
                            <input type="file" name='myBook' id="myBook" class="new-button" style="padding:10px;"> 
                        </form>
                    </div>
                    <div class="previewImageSide">
                        <div class="previewImage tumaDiv" id="galsecblab">
                            <i class="fa fa-camera-retro galCme"></i>
                            <img id='galblab' src='#' class='tuma' style="display:none">      
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div>
                <h4 class="divTitle">Add Event</h4>
                <div class="flexSecA">
                    <div class="inputField">
                        <form action="" method="POST" autocomplete='off' enctype="multipart/form-data">
                            <select class='slide-select-css' name="upcomingEvents">
                                <option disabled="true" selected>Upcoming Events</option>
                                <option value="Upcoming-Events-1">Next Event</option>
                                <option value="Upcoming-Events-2">Another</option>
                                <option value="Upcoming-Events-3">Another</option>
                            </select>
                            <h5><input type="date" placeholder="Event Date" name='eventDate'></h5>
                            <h5><input type="text" placeholder="Event Title" name='eventTitle'></h5>
                            <textarea placeholder="About Event" name="aboutEvent"></textarea>
                            <input type="submit" value='Save' class="submitButton" name='submitUpcomingEvents'>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>

    </section>


    </body>


    <script>


function mygallery(input) {      
        var galblab = document.getElementById('galblab');
        var galsecblab = document.getElementById('galsecblab');
            if (input.files && input.files[0]) {
                console.log('popo');
                document.querySelector('.galCme').style.display="none"
                galsecblab.style.display = "block";
                galblab.style.display = "block";
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#galblab')
                            .attr('src', e.target.result)
                            .width(150)
                            .height(200);
                            };
                        reader.readAsDataURL(input.files[0]);
            }
    }


function topics(input) {      
        var topicsblab = document.getElementById('topicsblab');
        var topicssecblab = document.getElementById('topicssecblab');
            if (input.files && input.files[0]) {
                document.querySelector('.topicsCme').style.display="none"
                topicssecblab.style.display = "block";
                topicsblab.style.display = "block";
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#topicsblab')
                            .attr('src', e.target.result)
                            .width(150)
                            .height(200);
                            };
                        reader.readAsDataURL(input.files[0]);
            }
    }

    function readURL(input) {      
        var blab2 = document.getElementById('myblab');
        var blab = document.getElementById('secblab');
            if (input.files && input.files[0]) {
            document.querySelector('.myCme').style.display="none"
                    blab.style.display = "block";
                    blab2.style.display = "block";
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#myblab')
                            .attr('src', e.target.result)
                            .width(150)
                            .height(200);
                            };
                        reader.readAsDataURL(input.files[0]);
            }
    }


            function readService(input) {   
                var blabSer2 = document.getElementById('myblabService');
                var blabSer = document.getElementById('secServiceblab');
                if (input.files && input.files[0]) {
                    document.querySelector('.mySaCme').style.display="none"
                    blabSer.style.display = "block";
                    blabSer2.style.display = "block";
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#myblabService')
                            .attr('src', e.target.result)
                            .width(150)
                            .height(200);
                            };
                        reader.readAsDataURL(input.files[0]);
                }
    }

    function excos(input) {      
        var excosblab = document.getElementById('excosblab');
        var excossecblab = document.getElementById('excossecblab');
            if (input.files && input.files[0]) {
                document.querySelector('.myexcosCme').style.display="none"
                excossecblab.style.display = "block";
                excosblab.style.display = "block";
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#excosblab')
                            .attr('src', e.target.result)
                            .width(150)
                            .height(200);
                            };
                        reader.readAsDataURL(input.files[0]);
            }
    }
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

<script src="../jquery/jquery.min.js"></script>
<script src="../jquery/jquery-migrate.min.js"></script>
</html>
