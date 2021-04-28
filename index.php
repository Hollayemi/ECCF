<?php
	$home="tru";
	include('webHeader.php');
?>
		<div id="fh5co-intro">
			<div class="row animate-box">
				<div class="col-md-12 col-md-offset-0 text-center">
					<h2>Living in God's Amazing Grace!</h2>
					<span>We are open Sunday to Monday</span>
				</div>
			</div>
		</div>
		
		<!--<div id="fh5co-counter" class="fh5co-counters">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 text-center animate-box">
					<p>We have a fun facts far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
			</div>
			 <div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-6 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="9452" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Members</span>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="214" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Ministries</span>
						</div>
						<div class="clearfix visible-sm-block visible-xs-block"></div>
						<div class="col-md-3 col-sm-6 col-xs-6 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="433" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Classes</span>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6 text-center">
							<span class="fh5co-counter js-counter" data-from="0" data-to="512" data-speed="5000" data-refresh-interval="50"></span>
							<span class="fh5co-counter-label">Activities</span>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<div id="fh5co-services" class="fh5co-light-grey">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Services</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 animate-box">
					<div class="services">
						<a href="#" class="img-holder"><img class="img-responsive" src="webImages/Sunday-0.png" style="height:200px; width:100%;" alt="Monday picture.png"></a>
						<div class="desc">
							<h3 style="text-align:center"><a href="#">Glorious Sunday Service</a></h3>
							<h3 style="font-size:17px;text-align:center"><a style="color:rgb(37, 10, 10)" href="#"><?php echo $Sunday[0] ?></a></h3>
							<p><?php echo substr($sundTxt,0,150) ?></p>
							<a href="#">Read More <i class="icon-arrow-right3"></i></a>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<a href="#" class="img-holder"><img class="img-responsive" src="webImages/Tuesday-0.png" style="height:200px; width:100%;" alt="Tuesday picture.png"></a>
						<div class="desc">
							<h3 style="text-align:center"><a href="#">Word Exploision</a></h3>
							<h3 style="font-size:17px;text-align:center"><a style="color:rgb(37, 10, 10)" href="#"><?php echo $Tuesday[0] ?></a></h3>
							<p><?php echo substr($tueTxt,0,150) ?></p>
							<a href="#">Read More <i class="icon-arrow-right3"></i></a>
						</div>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="services">
						<a href="#" class="img-holder"><img class="img-responsive" src="webImages/Friday-0.png" style="height:200px;width:100%;" alt="Friday picture.png"></a>
						<div class="desc">
							<h3 style="text-align:center"><a href="#">Liberation Hour</a></h3>
							<h3 style="font-size:17px;text-align:center"><a style="color:rgb(37, 10, 10)" href="#"><?php echo $Friday[0] ?></a></h3>
							<p><?php echo substr($friTxt,0,150) ?></p>
							<a href="#">Read More <i class="icon-arrow-right3"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-sermon">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Our Sermons</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 text-center animate-box">
					<div class="sermon-entry">
						<div class="sermon" style="background-image: url(webImages/service-<?php echo sizeof($Fetch_pic)-1?>.png);">
							<div class="play">
								<a class="popup-vimeo" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play3"></i></a>
							</div>
						</div>
						<h3><?php echo $service_1[0]?></h3>
						<span>( <?php echo $service_1[2]?> )</span><br>
						<span><?php echo $service_1[1]?></span>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="sermon-entry">
						<div class="sermon" style="background-image: url(webImages/service-<?php echo sizeof($Fetch_pic)-2?>.png);">
							<div class="play">
								<a class="popup-vimeo" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play3"></i></a>
							</div>
						</div>
						<h3><?php echo $service_2[0]?></h3>
						<span>( <?php echo $service_2[2]?> )</span><br>
						<span><?php echo $service_2[1]?></span>
					</div>
				</div>
				<div class="col-md-4 text-center animate-box">
					<div class="sermon-entry">
						<div class="sermon" style="background-image: url(webImages/service-<?php echo sizeof($Fetch_pic)-3?>.png);">
							<div class="play">
								<a class="popup-vimeo" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play3"></i></a>
							</div>
						</div>
						<h3><?php echo $service_3[0]?></h3>
						<span>( <?php echo $service_3[2]?> )</span><br>
						<span><?php echo $service_3[1]?></span>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-news" class="fh5co-light-grey">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 animate-box">
					<div class="news">
						<a href="#" class="img-holder"><img class="img-responsive" src="webImages/Brothers-Coordinator.png" alt="Free HTML5 Website Template by freehtml5.co"></a>
						<div class="desc">
						<span class="date" style="text-align:center; font-size:18px"><?php echo $Brothers[0] ?></span>
							<!-- <h3><a href="#">Live News</a></h3> -->
						</div>
					</div>
				</div>
				<div class="col-md-2 animate-box">
					<div class="news">
						<a href="#" class="img-holder"><img class="img-responsive" src="webImages/Vice-President.png" alt="Free HTML5 Website Template by freehtml5.co"></a>
						<div class="desc">
						<span class="date" style="text-align:center; font-size:20px"><?php echo $Vice[0] ?></span>
						<span class="date" style="text-align:center; font-size:16px">(Vice President)</span>
						</div>
					</div>
				</div>
				<div class="col-md-3 animate-box">
					<div class="news">
						<a href="#" class="img-holder"><img class="img-responsive" src="webImages/President-0.png" alt="Free HTML5 Website Template by freehtml5.co"></a>
						<div class="desc">
						<span class="date" style="text-align:center; font-size:18px"><?php echo $President[0] ?></span>
							<!-- <h3><a href="#">Helping Children</a></h3> -->
							
						</div>
					</div>
				</div>
				<div class="col-md-2 animate-box">
					<div class="news">
						<a href="#" class="img-holder"><img class="img-responsive" src="webImages/General-Secretary.png" alt="Free HTML5 Website Template by freehtml5.co"></a>
						<div class="desc">
							<span class="date" ><?php echo $Secretary[0] ?></span>
							<!-- <h3><a href="#">Helping Children</a></h3> -->
						</div>
					</div>
				</div>
				<div class="col-md-2 animate-box">
					<div class="news">
						<a href="#" class="img-holder"><img class="img-responsive" src="webImages/Sisters-Cordinator.png" alt="Free HTML5 Website Template by freehtml5.co"></a>
						<div class="desc">
						<span class="date" style="text-align:center; font-size:18px"><?php echo $Sisters[0] ?></span>
							<!-- <h3><a href="#">Helping Children</a></h3> -->
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-bible-verse">
			<div class="overlay"></div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
							<div class="item">
								<div class="bible-verse-slide active text-center">
									<blockquote>
										<p>&ldquo;<?php echo $bibleSlide_1[0] ?>.&rdquo;</p>
										<span><?php echo $bibleSlide_1[1] ?></span>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="bible-verse-slide active text-center">
									<blockquote>
										<p>&ldquo;<?php echo $bibleSlide_2[0] ?>.&rdquo;</p>
										<span><?php echo $bibleSlide_2[1] ?></span>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="bible-verse-slide active text-center">
									<blockquote>
										<p>&ldquo;<?php echo $bibleSlide_3[0] ?>.&rdquo;</p>
										<span><?php echo $bibleSlide_3[1] ?></span>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-events">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Our Events</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 animate-box">
					<div class="events-entry">
						<span class="date"><?php echo $Upcoming_Events_1[1] ?></span>
						<h3><a href="#"><?php echo $Upcoming_Events_1[0] ?></a></h3>
						<p><?php echo substr($Upcoming_Events_1[2],0,200) ?>.</p>
						<a href="#">Read More <i class="icon-arrow-right3"></i></a>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="events-entry">
						<span class="date"><?php echo $Upcoming_Events_2[1] ?></span>
						<h3><a href="#"><?php echo $Upcoming_Events_2[0] ?></a></h3>
						<p><?php echo substr($Upcoming_Events_2[2],0,200) ?>.</p>
						<a href="#">Read More <i class="icon-arrow-right3"></i></a>
					</div>
				</div>
				<div class="col-md-4 animate-box">
					<div class="events-entry">
						<span class="date"><?php echo $Upcoming_Events_3[1] ?></span>
						<h3><a href="#"><?php echo $Upcoming_Events_3[0] ?></a></h3>
						<p><?php echo substr($Upcoming_Events_3[2],0,200) ?>.</p>
						<a href="#">Read More <i class="icon-arrow-right3"></i></a>
					</div>
				</div>
			</div>
		</div>
		
	</div><!-- END container-wrap -->
	<!-- <marquee behavior="" direction="">whifjawhdfuaj;hiofjsiofgjrsiejijpijiyouy'oiyy'i'yoiy'uoy'uo</marquee> -->
<?php
	include('webFooter.php')
?>

