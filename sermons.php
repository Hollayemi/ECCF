<?php
	$sermon = "tru";
	include('webHeader.php')
?>		<div id="fh5co-sermon">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Our Sermons</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			
			<div class="row">
			<?php 
			for($a = (count($Fetch_pic)-1); $a >=0; $a--){
				$sermonShowTex             = fopen('desc/service-'.$Fetch_pic[$a].'.txt', "r");
				$sermonShowText            = fgets($sermonShowTex);
				$mainText		           = explode('==',$sermonShowText);
				echo '
				<div class="col-md-4  animate-box">
					<div class="sermon-entry">
						<div style="display:flex" style="height:100px !important;width:100px">
							<div class="sermon" >
								<img src="webImages/service-'.$Fetch_pic[$a].'.png"height=100px width=100px>
								<div class="play" style="position:absolute;background-color:red;top:0px;height:50px;text-align:center;">
									<a class="popup-vimeo" href="https://vimeo.com/channels/staffpicks/93951774" style="width:20px;height:20px"><i class="icon-play3"></i></a>
								</div>
							</div>
							<div >
								<h3>'.$mainText[0].'</h3>
								<h4>'.$mainText[2].' ( '.$mainText[3].' )</h4>
								<h4>'.$mainText[1].'
							</div>
						</div>
					</div>
				</div>	
				';	
					
			}
			?>
				
		</div>
		</div>
		<!-- <div id="fh5co-counter" class="fh5co-counters fh5co-light-grey">
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
	</div><!-- END container-wrap -->

	<?php
	include('webFooter.php')
?>