<!DOCTYPE html>
<html>


<head>

        <!-- Standard Meta -->
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Site Properties -->
        <title>Rooms - Sativa</title>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon.png">

        <!-- Google Fonts -->
       	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic" rel="stylesheet">
       	<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">

        <!-- CSS -->
        <link rel="stylesheet" href="css/uikit.min.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/tiny-date-picker.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/media-query.css" />

    </head>

    <body id="impx-body">

		<!-- HEADER -->
		<header id="impx-header">
			<div>
				<div class="impx-menu-wrapper style2" data-uk-sticky="top: .impx-page-heading; animation: uk-animation-slide-top">

					<!-- Mobile Nav Start -->
					<div id="mobile-nav" data-uk-offcanvas="mode: push; overlay: true">
				        <div class="uk-offcanvas-bar">

				            <ul class="uk-nav uk-nav-default">
				                <li class="uk-parent">
				                	<a href="index.html">Home</a>
				                	<ul class="uk-nav-sub">
				                		<li><a href="index.html">Homepage 1</a></li>
				                		<li><a href="index2.html">Homepage 2</a></li>
				                		<li><a href="index3.html">Homepage 3</a></li>
				                	</ul>
				                </li>
				                <li class="uk-parent uk-active">
						        	<a href="rooms1.html" class="uk-navbar-nav-subtitle">Rooms</a>
						        	<ul class="uk-nav-sub">
				                		<li><a href="rooms1.html">Rooms Style 1</a></li>
				                		<li><a href="rooms2.html">Rooms Style 2</a></li>
				                		<li><a href="rooms3.html">Rooms Style 3</a></li>
				                		<li><a href="room-detail.html">Room Detail 1</a></li>
				                		<li><a href="room-detail2.html">Room Detail 2</a></li>
				                	</ul>
				                </li>
				                <li><a href="restaurant.html">Restaurant</a></li>
				                <li><a href="spa.html">Spa</a></li>
				                <li><a href="activities.html">Activities</a></li>
				                <li class="uk-parent">
				                	<a href="#">Pages</a>
				                	<ul class="uk-nav-sub">
					                	<li><a href="about.html">About Us</a></li>
										<li><a href="testimonial.html">Testimonial</a></li>
										<li><a href="blog.html">Blog</a></li>
										<li><a href="single-post.html">Single Post</a></li>
										<li><a href="gallery.html">Gallery</a></li>
										<li><a href="element.html">Element</a></li>
									</ul>
				                </li>
				                <li><a href="contact.html">Contact</a></li>
				            </ul>

				        </div>
				    </div>
				    <a href="#mobile-nav" class="uk-hidden@xl uk-hidden@l uk-hidden@m mobile-nav" data-uk-toggle="target: #mobile-nav"><i class="fa fa-bars"></i>Menu</a>
		            <!-- Mobile Nav End -->

		            <!-- Top Header -->
					<div class="impx-top-header style2">
						<div class="uk-container uk-container-expand">
							<div class="uk-grid">
								<!-- header phone -->
								<div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
									<div class="impx-top-phone">
										<p><i class="fa fa-phone"></i> Phone : +62 123456789</p>
									</div>
								</div><!-- header phone end-->
								<!-- header social media -->
								<div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
									<div class="impx-top-social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook-f"></i>Facebook</a></li>
											<li><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
											<li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
										</ul>
									</div>
								</div><!-- header social media end -->
							</div>
						</div>
					</div>
					<!-- Top Header End -->

					@include('Front.include.menu')
				</div>
			</div>

		</header>
		<!-- HEADER END -->

		<!-- PAGE HEADING -->
		<div class="impx-page-heading uk-position-relative rooms">
			<div class="impx-overlay dark"></div>
			<div class="uk-container">
				<div class="uk-width-1-1">
					<div class="uk-flex uk-flex-left">
						<div class="uk-light uk-position-relative uk-text-left page-title">
							<h1 class="uk-margin-remove">Rooms</h1><!-- page title -->
							<p class="impx-text-large uk-margin-remove">Browse &amp; Choose Your Choice</p><!-- page subtitle -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- PAGE HEADING END -->


		<!-- SERVICES -->
		<div class="impx-content style3 uk-padding bg-color-gray pattern-1 uk-padding-remove-horizontal">
			<div class="uk-container uk-container-expand">
				<div data-uk-grid class="uk-position-relative uk-position-z-index">
					<div class="uk-width-expand">
						<!-- service items -->
						<ul class="uk-child-width-1-6@xl uk-child-width-1-6@l uk-child-width-1-3@m  uk-child-width-1-2@s data-uk-grid fac-list dark" data-uk-grid>
						    <li class="uk-text-center"><!-- service item #1 -->
						    	<i class="fa fa-cutlery fa-2x impx-text-aqua"></i>
						    	<h6 class="uk-margin-remove-bottom uk-margin-small-top">In-house Restaurant</h6>
						    	<p class="uk-margin-remove-bottom uk-margin-small-top">Ergo hoc quidem apparet agendum esse natos. Quam tu ponis in verbis ego</p>
						    </li><!-- service item #1 end -->
						    <li class="uk-text-center"><!-- service item #2 -->
						    	<i class="fa fa-paw fa-2x impx-text-aqua"></i>
						    	<h6 class="uk-margin-remove-bottom uk-margin-small-top">Outdoor</h6>
						    	<p class="uk-margin-remove-bottom uk-margin-small-top">Ergo hoc quidem apparet agendum esse natos. Quam tu ponis in verbis ego</p>
						    </li><!-- service item #2 end -->
						    <li class="uk-text-center"><!-- service item #3 -->
						    	<i class="fa fa-asterisk fa-2x impx-text-aqua"></i>
						    	<h6 class="uk-margin-remove-bottom uk-margin-small-top">Spa</h6>
						    	<p class="uk-margin-remove-bottom uk-margin-small-top">Ergo hoc quidem apparet agendum esse natos. Quam tu ponis in verbis ego</p>
						    </li><!-- service item #3 end -->
						    <li class="uk-text-center"><!-- service item #4 -->
						    	<i class="fa fa-heart-o fa-2x impx-text-aqua"></i>
						    	<h6 class="uk-margin-remove-bottom uk-margin-small-top">Gym Studio</h6>
						    	<p class="uk-margin-remove-bottom uk-margin-small-top">Ergo hoc quidem apparet agendum esse natos. Quam tu ponis in verbis ego</p>
						    </li><!-- service item #4 end -->
						    <li class="uk-text-center"><!-- service item #5 -->
						    	<i class="fa fa-child fa-2x impx-text-aqua"></i>
						    	<h6 class="uk-margin-remove-bottom uk-margin-small-top">Kids Playground</h6>
						    	<p class="uk-margin-remove-bottom uk-margin-small-top">Ergo hoc quidem apparet agendum esse natos. Quam tu ponis in verbis ego</p>
						    </li><!-- service item #5 end -->
						    <li class="uk-text-center"><!-- service item #6 -->
						    	<i class="fa fa-hand-o-right fa-2x impx-text-aqua"></i>
						    	<h6 class="uk-margin-remove-bottom uk-margin-small-top">Golf</h6>
						    	<p class="uk-margin-remove-bottom uk-margin-small-top">Ergo hoc quidem apparet agendum esse natos. Quam tu ponis in verbis ego</p>
						    </li><!-- service item #6 end -->
						</ul>
						<!-- service items end -->
					</div>
				</div>
			</div>
		</div>
		<!-- SERVICES END -->


		<!-- ROOMS LIST -->
		<div class="uk-padding uk-padding-remove-bottom uk-padding-remove-horizontal">
			<div class="uk-container">

				<div class="uk-position-relative uk-visible-toggle uk-margin-medium-bottom">
					<!-- room items -->
			        <ul class="uk-child-width-1-3@xl uk-child-width-1-3@l uk-child-width-1-2@m uk-child-width-1-2@s impx-rooms style3 uk-margin-small-top uk-margin-medium-bottom data-uk-grid" data-uk-grid>
						<li><!-- room item #1 -->
							<a href="room-detail.html" class="uk-inline-clip uk-transition-toggle">
								<div class="uk-card uk-card-default uk-box-shadow-large uk-box-shadow-hover-xlarge impx-service-card bg-color-aqua">
						        	<div class="uk-card-media-top">
						        		<div class="uk-position-relative">
							                <img src="images/rooms/room-1.jpg" alt="">
							                <div class="impx-overlay light overlay-squared padding-xwide"></div>
							            </div>
						                <div class="uk-card-body impx-padding-small uk-position-relative uk-position-z-index">
						                	<h4 class="uk-card-title uk-margin-remove-bottom impx-text-white">Single Room</h4>
						                	<div class="uk-card-badge uk-label bg-color-gold impx-text-white small">start from $33</div>
							            </div>
						            </div>
						            <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary impx-overlay aqua-darkest">
						            	<p class="impx-text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Si verbum sequimur, primum longius verbum praepositum quam bonum</p>
	                                    <ul class="uk-list room-fac impx-text-white">
											<li><span class="impx-text-white" data-uk-icon="icon: check; ratio: 1;"></span> Beatus in maximarum timore</li>
											<li><span class="impx-text-white" data-uk-icon="icon: check; ratio: 1;"></span> Oculis Compensabatur</li>
											<li><span class="impx-text-white" data-uk-icon="icon: check; ratio: 1;"></span> Dolorisnos veriusque nihil</li>
										</ul>
						        	</div>
					        	</div>
					        </a>
						</li><!-- room item #1 end -->
						<li><!-- room item #2 -->
							<a href="room-detail.html" class="uk-inline-clip uk-transition-toggle">
								<div class="uk-card uk-card-default uk-box-shadow-large uk-box-shadow-hover-xlarge impx-service-card bg-color-aqua">
						        	<div class="uk-card-media-top">
						        		<div class="uk-position-relative">
							                <img src="images/rooms/room-5.jpg" alt="">
							                <div class="impx-overlay light overlay-squared padding-xwide"></div>
							            </div>
						                <div class="uk-card-body impx-padding-small uk-position-relative uk-position-z-index">
						                	<h4 class="uk-card-title uk-margin-remove-bottom impx-text-white">Single Room</h4>
						                	<div class="uk-card-badge uk-label bg-color-gold impx-text-white small">start from $33</div>
							            </div>
						            </div>
						            <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary impx-overlay aqua-darkest">
						            	<p class="impx-text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Si verbum sequimur, primum longius verbum praepositum quam bonum</p>
	                                    <ul class="uk-list room-fac impx-text-white">
											<li><span class="impx-text-white" data-uk-icon="icon: check; ratio: 1;"></span> Beatus in maximarum timore</li>
											<li><span class="impx-text-white" data-uk-icon="icon: check; ratio: 1;"></span> Oculis Compensabatur</li>
											<li><span class="impx-text-white" data-uk-icon="icon: check; ratio: 1;"></span> Dolorisnos veriusque nihil</li>
										</ul>
						        	</div>
						        </div>
					        </a>
						</li><!-- room item #2 end -->
						<li><!-- room item #3 -->
							<a href="room-detail.html" class="uk-inline-clip uk-transition-toggle">
								<div class="uk-card uk-card-default uk-box-shadow-large uk-box-shadow-hover-xlarge impx-service-card bg-color-aqua">
						        	<div class="uk-card-media-top uk-light">
						        		<div class="uk-position-relative">
							                <img src="images/rooms/room-3.jpg" alt="">
							                <div class="impx-overlay light overlay-squared padding-xwide"></div>
							            </div>
						                <div class="uk-card-body impx-padding-small uk-position-relative uk-position-z-index">
						                	<h4 class="uk-card-title uk-margin-remove-bottom impx-text-white">Single Room</h4>
						                	<div class="uk-card-badge uk-label bg-color-gold impx-text-white small">start from $33</div>
							            </div>
						            </div>
						            <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary impx-overlay aqua-darkest">
						            	<p class="impx-text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Si verbum sequimur, primum longius verbum praepositum quam bonum</p>
	                                    <ul class="uk-list room-fac impx-text-white">
											<li><span class="impx-text-white" data-uk-icon="icon: check; ratio: 1;"></span> Beatus in maximarum timore</li>
											<li><span class="impx-text-white" data-uk-icon="icon: check; ratio: 1;"></span> Oculis Compensabatur</li>
											<li><span class="impx-text-white" data-uk-icon="icon: check; ratio: 1;"></span> Dolorisnos veriusque nihil</li>
										</ul>
						        	</div>
						        </div>
					        </a>
						</li><!-- room item #3 end -->
						<li><!-- room item #4 -->
							<a href="room-detail.html" class="uk-inline-clip uk-transition-toggle">
								<div class="uk-card uk-card-default uk-box-shadow-large uk-box-shadow-hover-xlarge impx-service-card bg-color-aqua">
						        	<div class="uk-card-media-top uk-light">
						        		<div class="uk-position-relative">
							                <img src="images/rooms/room-4.jpg" alt="">
							                <div class="impx-overlay light overlay-squared padding-xwide"></div>
							            </div>
						                <div class="uk-card-body impx-padding-small uk-position-relative uk-position-z-index">
						                	<h4 class="uk-card-title uk-margin-remove-bottom impx-text-white">Single Room</h4>
						                	<div class="uk-card-badge uk-label bg-color-gold impx-text-white small">start from $33</div>
							            </div>
						            </div>
						            <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary impx-overlay aqua-darkest">
						            	<p class="impx-text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Si verbum sequimur, primum longius verbum praepositum quam bonum</p>
	                                    <ul class="uk-list room-fac impx-text-white">
											<li><span class="impx-text-white" data-uk-icon="icon: check; ratio: 1;"></span> Beatus in maximarum timore</li>
											<li><span class="impx-text-white" data-uk-icon="icon: check; ratio: 1;"></span> Oculis Compensabatur</li>
											<li><span class="impx-text-white" data-uk-icon="icon: check; ratio: 1;"></span> Dolorisnos veriusque nihil</li>
										</ul>
						        	</div>
						        </div>
					        </a>
						</li><!-- room item #4 end -->
						<li><!-- room item #5 -->
							<a href="room-detail.html" class="uk-inline-clip uk-transition-toggle">
								<div class="uk-card uk-card-default uk-box-shadow-large uk-box-shadow-hover-xlarge impx-service-card bg-color-aqua">
						        	<div class="uk-card-media-top uk-light">
						        		<div class="uk-position-relative">
							                <img src="images/rooms/room-2.jpg" alt="">
							                <div class="impx-overlay light overlay-squared padding-xwide"></div>
							            </div>
						                <div class="uk-card-body impx-padding-small uk-position-relative uk-position-z-index">
						                	<h4 class="uk-card-title uk-margin-remove-bottom impx-text-white">Single Room</h4>
						                	<div class="uk-card-badge uk-label bg-color-gold impx-text-white small">start from $33</div>
							            </div>
						            </div>
						            <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary impx-overlay aqua-darkest">
						            	<p class="impx-text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Si verbum sequimur, primum longius verbum praepositum quam bonum</p>
	                                    <ul class="uk-list room-fac impx-text-white">
											<li><span class="impx-text-white" data-uk-icon="icon: check; ratio: 1;"></span> Beatus in maximarum timore</li>
											<li><span class="impx-text-white" data-uk-icon="icon: check; ratio: 1;"></span> Oculis Compensabatur</li>
											<li><span class="impx-text-white" data-uk-icon="icon: check; ratio: 1;"></span> Dolorisnos veriusque nihil</li>
										</ul>
						        	</div>
						        </div>
					        </a>
						</li><!-- room item #5 end -->
						<li><!-- room item #6 -->
							<a href="room-detail.html" class="uk-inline-clip uk-transition-toggle">
								<div class="uk-card uk-card-default uk-box-shadow-large uk-box-shadow-hover-xlarge impx-service-card bg-color-aqua">
						        	<div class="uk-card-media-top uk-light">
						        		<div class="uk-position-relative">
							                <img src="images/rooms/room-6.jpg" alt="">
							                <div class="impx-overlay light overlay-squared padding-xwide"></div>
							            </div>
						                <div class="uk-card-body impx-padding-small uk-position-relative uk-position-z-index">
						                	<h4 class="uk-card-title uk-margin-remove-bottom impx-text-white">Single Room</h4>
						                	<div class="uk-card-badge uk-label bg-color-gold impx-text-white small">start from $33</div>
							            </div>
						            </div>
						            <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary impx-overlay aqua-darkest">
						            	<p class="impx-text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Si verbum sequimur, primum longius verbum praepositum quam bonum</p>
	                                    <ul class="uk-list room-fac impx-text-white">
											<li><span class="impx-text-white" data-uk-icon="icon: check; ratio: 1;"></span> Beatus in maximarum timore</li>
											<li><span class="impx-text-white" data-uk-icon="icon: check; ratio: 1;"></span> Oculis Compensabatur</li>
											<li><span class="impx-text-white" data-uk-icon="icon: check; ratio: 1;"></span> Dolorisnos veriusque nihil</li>
										</ul>
						        	</div>
						        </div>
					        </a>
						</li><!-- room item #6 end -->
					</ul>
					<!-- room items end -->
		        </div>

		        <!-- rooms paging -->
		        <ul class="uk-pagination uk-flex-center impx-pagination uk-margin-remove-top uk-margin-medium-bottom">
				    <li><a href="#"><span data-uk-pagination-previous></span></a></li>
				    <li class="uk-active"><span>1</span></li>
				    <li><a href="#">2</a></li>
				    <li><a href="#">3</a></li>
				    <li><a href="#"><span data-uk-pagination-next></span></a></li>
				</ul>
				<!-- rooms paging end -->

			</div>
		</div>
		<!-- ROOMS LIST -->

		<!-- BOOKING FORM -->
		<div class="uk-padding bg-color-aqua pattern-1">
			<div class="uk-container">

				<div class="uk-flex uk-flex-center" data-uk-grid>
					<div class="uk-width-1-1">
						<div class="impx-hp-booking-form hp2 no-margin">
							<h6 class="uk-heading-line uk-text-center impx-text-white uk-text-uppercase"><span>Booking Form</span></h6>
							<form class="uk-grid-margin-small uk-child-width-1-6@xl uk-child-width-1-6@l uk-child-width-1-6@m uk-child-width-1-3@s" data-uk-grid>
								<div class="uk-form-controls">
								    <div class="uk-inline">
								    	<label class="uk-form-label">Email</label>
								    	<span class="uk-form-icon" data-uk-icon="icon: mail"></span>
								        <input class="uk-input booking-email uk-border-rounded" type="text" placeholder="your e-mail">
								    </div>
							    </div>
							    <div class="uk-form-controls">
								    <div class="uk-inline">
								    	<label class="uk-form-label">Arrival</label>
								    	<span class="uk-form-icon" data-uk-icon="icon: calendar"></span>
								        <input class="uk-input booking-arrival uk-border-rounded" type="text" placeholder="m/dd/yyyy">
								    </div>
								</div>
							    <div class="uk-form-controls">
								    <div class="uk-inline">
								    	<label class="uk-form-label">Departure</label>
								    	<span class="uk-form-icon" data-uk-icon="icon: calendar"></span>
								        <input class="uk-input booking-departure uk-border-rounded" type="text" placeholder="m/dd/yyyy">
								    </div>
							    </div>
							    <div class="uk-form-controls uk-position-relative">
							    	<label class="uk-form-label" for="form-guest-select">Guest</label>
							    	<span class="uk-form-icon select-icon" data-uk-icon="icon: users"></span>
						            <select class="uk-select uk-border-rounded" id="form-guest-select">
						                <option value="">Please select...</option>
						                <option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
						            </select>
							    </div>
							   <div class="uk-form-controls uk-position-relative">
							    	<label class="uk-form-label" for="form-rooms-select">Rooms</label>
							    	<span class="uk-form-icon select-icon" data-uk-icon="icon: album"></span>
						            <select class="uk-select uk-border-rounded" id="form-rooms-select">
						                <option value="">Please select...</option>
						                <option value="room_1">Single</option>
										<option value="room_2">Double</option>
										<option value="room_3">Primier</option>
										<option value="room_4">Deluxe</option>
						            </select>
							    </div>
							    <div>
							    	<label class="uk-form-label empty-label">&nbsp;</label>
							        <button class="uk-button uk-width-1-1">Book Now!</button>
							    </div>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- BOOKING FORM END -->

		<!-- FOOTER -->
		<footer id="impx-footer" class="uk-padding uk-padding-remove-bottom uk-padding-remove-horizontal">
			<div class="uk-container">
				<div class="uk-flex uk-flex-center data-uk-grid">
					<div class="uk-width-1-2@xl uk-width-1-2@l uk-width-2-3@m">
						<div class="impx-footer-logo uk-align-center uk-text-center">
							<!-- Footer Logo -->
							<img src="images/logo.png" alt="" class="">
							<!-- Footer Note -->
							<p class="uk-margin-bottom">Erit enim mecum, si tecum erit. Re mihi non aeque satisfacit, et quidem locis dissimile homini. Intrandum est igitur in rerum naturam et penitus quid ea postulet.</p>
							<!-- Site Copyright -->
							<p class="impx-copyright"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
						</div>
					</div>
				</div>
			</div>
			<!-- Scroll to Top -->
			<a href="#top" class="to-top fa fa-long-arrow-up" data-uk-scroll></a>
			<!-- Scroll to Top End -->
		</footer>
		<!-- FOOTER END -->

    	<!-- Javascript -->
    	<script src="js/jquery.js"></script>
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBGb3xrNtz335X4G2KfoOXb-XuIyHAzlVo"></script>
        <script src="js/jquery.gmap.min.js"></script>
        <script src="js/tiny-date-picker.min.js"></script>
        <script src="js/jquery.parallax.min.js"></script>
        <script src="js/date-config.js"></script>
        <script src="js/template-config.js"></script>
    </body>


</html>
