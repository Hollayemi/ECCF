<div class="container-wrap">
		<footer id="fh5co-footer" role="contentinfo">
			<div class="col-md-4 text-center">
				<h3>Adekunle Ajasin University Akungba Akoko</h3>
			</div>
			<div class="col-md-4 text-center">
				<h2><a href="#">ECCF</a></h2>
			</div>
			<div class="col-md-4 text-center">
				<p>
					<ul class="fh5co-social-icons">
						<li><a href="#"><i class="icon-twitter2"></i></a></li>
						<li><a href="#"><i class="icon-facebook2"></i></a></li>
						<li><a href="#"><i class="icon-dribbble2"></i></a></li>
					</ul>
				</p>
			</div>
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; <?php echo date('Y')?> ECCF. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="#" target="_blank">stephanyemmitty</a></small>
					</p>
				</div>
			</div>
		</footer>
	</div><!-- END container-wrap -->
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<script>
		var mainEditBoxClick = document.querySelector('.mainEditBox');
		// window.addEventListener('mouseup', function(e){
		// 	if(e.target != document.querySelector('.body') && e.target.parentNode != document.querySelector('.body') ){
		// 		console.log("pap");
		// 		mainEditBoxClick.style.display="none"
		// 	}
		// });

		document.querySelector('.clickEdit').addEventListener('click', function(){
			mainEditBoxClick.style.width = "600px";
			mainEditBoxClick.style.display = "block";
			mainEditBoxClick.style.height = "700px";
			mainEditBoxClick.style.marginTop = "55px";
			mainEditBoxClick.style.visibility = "visible";
			mainEditBoxClick.style.opacity = "1";
		})
		function userpic(input){
				
                var blabSer2 = document.getElementById('myblabService');
                var blabSer = document.getElementById('secServiceblab');
                if (input.files && input.files[0]) {
                    document.querySelector('.mySaCme2').style.display="none"
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
	</script>
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
	<script src="js/myjs.js"></script>
	<!-- gallery -->
	<script src="lightbox/js/lightbox.min.js"></script>

	</body>
</html>

