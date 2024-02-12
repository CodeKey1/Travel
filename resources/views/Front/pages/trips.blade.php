<!DOCTYPE html>
<html>



<head>

        <!-- Standard Meta -->
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Site Properties -->
        <title>Room Detail - Sativa</title>
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
		<div class="impx-page-heading uk-position-relative room-detail">
			<div class="impx-overlay dark"></div>
			<div class="uk-container">
				<div class="uk-width-1-1">
					<div class="uk-flex uk-flex-left">
						<div class="uk-light uk-position-relative uk-text-left page-title">
							<h1 class="uk-margin-remove">Trip Detail</h1><!-- page title -->
							<p class="impx-text-large uk-margin-remove">Browse &amp; Choose Your Choice</p><!-- page subtitle -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- PAGE HEADING END -->

		<!-- CONTENT -->
		<div class="uk-padding impx-padding-top-medium uk-padding-remove-horizontal">
			<div class="uk-container">
				<div data-uk-grid>

					<div class="uk-width-3-4@xl uk-width-3-4@l uk-width-3-4@m uk-width-1-1@s uk-margin-small-top">
						<!-- slider -->
						<div class="impx-room-slider">
							<div class="uk-position-relative" data-uk-slideshow="animation: fade">
							    <ul class="uk-slideshow-items">
							        <li>
							            <img src="images/rooms/room-detail-1.jpg" alt="" data-uk-cover>
							            <div class="impx-overlay"></div>
							        </li>
							        <li>
							            <img src="images/rooms/room-detail-2.jpg" alt="" data-uk-cover>
							            <div class="impx-overlay"></div>
							        </li>
							        <li>
							            <img src="images/rooms/room-detail-3.jpg" alt="" data-uk-cover>
							            <div class="impx-overlay"></div>
							        </li>
							        <li>
							            <img src="images/rooms/room-detail-4.jpg" alt="" data-uk-cover>
							            <div class="impx-overlay"></div>
							        </li>
							        <li>
							            <img src="images/rooms/room-detail-5.jpg" alt="" data-uk-cover>
							            <div class="impx-overlay"></div>
							        </li>
							    </ul>

							    <!-- slider thumb nav -->
							    <div class="uk-position-bottom-center uk-position-medium">
							        <ul class="uk-thumbnav">
							            <li data-uk-slideshow-item="0"><a href="#"><img src="images/rooms/room-detail-1.jpg" width="100" alt=""></a></li>
							            <li data-uk-slideshow-item="1"><a href="#"><img src="images/rooms/room-detail-2.jpg" width="100" alt=""></a></li>
							            <li data-uk-slideshow-item="2"><a href="#"><img src="images/rooms/room-detail-3.jpg" width="100" alt=""></a></li>
							            <li data-uk-slideshow-item="3"><a href="#"><img src="images/rooms/room-detail-4.jpg" width="100" alt=""></a></li>
							            <li data-uk-slideshow-item="4"><a href="#"><img src="images/rooms/room-detail-5.jpg" width="100" alt=""></a></li>
							        </ul>
							    </div>
							    <!-- slider thumb nav end -->

							</div>
						</div>
						<!-- slider end -->

						<!-- description -->
						<h4>Room Description</h4>
						<p class="impx-text-large uk-margin-medium-bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Omnes enim iucundum motum, quo sensus hilaretur. Duo enim genera quae erant, fecit tria. Audax negotium, impudens, translatum philosophos nostros esset cum.</p>

						<!-- tabs button -->
						<ul data-uk-tab class="uk-text-bold uk-tab impx-room-tabs">
						    <li><a href="#">Overview</a></li>
						    <li><a href="#">Trip Outline</a></li>
						    <li><a href="#">Trip Include</a></li>
						    <li><a href="#">Reviews</a></li>
						    <li><a href="#">Booking</a></li>
						    <li><a href="#">FAQ</a></li>
						</ul>
						<!-- tabs button end -->

						<!-- tabs content -->
						<ul class="uk-switcher impx-room-tabs-content bg-color-white uk-box-shadow-medium">
						    <li><!-- tab content #1 -->
						    	<h5>Additional Description</h5>
						    	<p class="uk-margin-medium-bottom">Unum est sine dolore esse, alterum cum voluptate. Non risu potius quam oratione eiciendum? Mihi enim satis est, ipsis non satis. turpitudinis et comprobatione honestatis? Quae cum essent dicta, discessimus. Omnes enim iucundum motum, quo sensus hilaretur. Quamquam te quidem video minime esse deterritum Nos paucis ad haec additis finem faciamus.</p>

								<div data-uk-grid>
									<div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-2@s">
										<h6>More Description</h6>
										<p>Nihil opus est exemplis hoc facere longius. Quid de Platone aut de Democrito loquar? Voluptatem cum summum bonum diceret, primum in eo ipso parum vidit, deinde hoc quoque alienum; Quo modo autem optimum, si bonum nullum est?</p>
									</div>
									<div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-2@s">
										<h6>More Facilities</h6>
										<ul class="uk-list uk-list-bullet impx-list">
											<li>Nihil opus est exemplis hoc facere longius</li>
											<li>Voluptatem cum summum bonum diceret</li>
											<li>Quo modo autem optimum, si bonum</li>
											<li>Beatus autem esse in maximarum</li>
										</ul>
									</div>
								</div>
						    </li><!-- tab content #1 end -->
						    <li><!-- tab content #2 (review and comment) -->
						    	<div class="impx-reviews-section">

									<h4 class="uk-margin-medium-bottom">Reviews &amp; Comments</h4>

									<ul class="uk-comment-list">
									    <li>
									        <article class="uk-comment">
									            <header class="uk-comment-header uk-position-relative">
									                <div class="uk-grid-medium uk-flex-middle" data-uk-grid>
									                    <div class="uk-width-auto">
									                        <img class="uk-comment-avatar" src="images/peoples/testi-people1.jpg" width="80" height="80" alt="">
									                    </div>
									                    <div class="uk-width-expand">
									                        <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Author</a></h4>
									                        <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top uk-margin-small-bottom">
												                <li>
												                	<select id="review-rating1">
																		<option value="1">1</option>
																		<option value="2">2</option>
																		<option value="3">3</option>
																		<option value="4">4</option>
																		<option value="5">5</option>
																	</select>
												                </li>
												            </ul>
									                    </div>
									                </div>
									            </header>
									            <div class="uk-comment-body">
									                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctu.</p>
									            </div>
									        </article>
									    </li>
									    <li>
							                <article class="uk-comment">
							                    <header class="uk-comment-header uk-position-relative">
							                        <div class="uk-grid-medium uk-flex-middle" data-uk-grid>
							                            <div class="uk-width-auto">
							                                <img class="uk-comment-avatar" src="images/peoples/testi-people2.jpg" width="80" height="80" alt="">
							                            </div>
							                            <div class="uk-width-expand">
							                                <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Author</a></h4>
							                                <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top uk-margin-small-bottom">
												                <li>
												                	<select id="review-rating2">
																		<option value="1">1</option>
																		<option value="2">2</option>
																		<option value="3">3</option>
																		<option value="4">4</option>
																		<option value="5">5</option>
																	</select>
												                </li>
												            </ul>
							                            </div>
							                        </div>
							                    </header>
							                    <div class="uk-comment-body">
							                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
							                    </div>
							                </article>
							            </li>
							            <li>
							                <article class="uk-comment">
							                    <header class="uk-comment-header uk-position-relative">
							                        <div class="uk-grid-medium uk-flex-middle" data-uk-grid>
							                            <div class="uk-width-auto">
							                                <img class="uk-comment-avatar" src="images/peoples/testi-people3.jpg" width="80" height="80" alt="">
							                            </div>
							                            <div class="uk-width-expand">
							                                <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">Author</a></h4>
							                                <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top uk-margin-small-bottom">
												                <li>
												                	<select id="review-rating3">
																		<option value="1">1</option>
																		<option value="2">2</option>
																		<option value="3">3</option>
																		<option value="4">4</option>
																		<option value="5">5</option>
																	</select>
												                </li>
												            </ul>
							                            </div>
							                        </div>
							                    </header>
							                    <div class="uk-comment-body">
							                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
							                    </div>
							                </article>
							            </li>
									</ul>

								</div>

								<div class="review-form">
									<h4>Add Your Review</h4>
									<form>
									    <fieldset class="uk-fieldset">

									        <div class="uk-margin">
									            <input class="uk-input" type="text" placeholder="Name">
									        </div>
									        <div class="uk-margin">
									            <input class="uk-input" type="text" placeholder="Email">
									        </div>

									        <div class="uk-margin">
									        	<label class="uk-form-label" for="review-rating-opt">Rating</label>
									            <select id="review-rating-opt">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
									        </div>

									        <div class="uk-margin">
									            <textarea class="uk-textarea" rows="5" placeholder="Textarea"></textarea>
									        </div>
									        <div class="uk-margin">
									            <button class="uk-button impx-button aqua">Submit</button>
									        </div>
									    </fieldset>
									</form>
								</div>
						    </li><!-- tab content #2 end -->
						    <li><!-- tab content #3 (booking form) -->
						    	<h5>Booking Form</h5>
						    	<div class="impx-hp-booking-form side-form normal uk-margin-bottom">
									<form class="">
										<div class="uk-margin">
											<div class="uk-form-controls">
											    <div class="uk-inline">
											    	<label class="uk-form-label">Email</label>
											    	<span class="uk-form-icon" data-uk-icon="icon: mail"></span>
											        <input class="uk-input booking-email uk-border-rounded" type="text" placeholder="your e-mail">
											    </div>
										    </div>
									    </div>
									    <div class="uk-margin">
										    <div class="uk-form-controls">
											    <div class="uk-inline">
											    	<label class="uk-form-label">Arrival</label>
											    	<span class="uk-form-icon" data-uk-icon="icon: calendar"></span>
											        <input class="uk-input booking-arrival uk-border-rounded" type="text" placeholder="m/dd/yyyy">
											    </div>
											</div>
										</div>
										<div class="uk-margin">
										    <div class="uk-form-controls">
											    <div class="uk-inline">
											    	<label class="uk-form-label">Departure</label>
											    	<span class="uk-form-icon" data-uk-icon="icon: calendar"></span>
											        <input class="uk-input booking-departure uk-border-rounded" type="text" placeholder="m/dd/yyyy">
											    </div>
										    </div>
										</div>
										<div class="uk-margin">
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
										</div>
										<div class="uk-margin">
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
										</div>
									    <div>
									    	<label class="uk-form-label empty-label">&nbsp;</label>
									        <button class="uk-button uk-width-1-1">Book Now!</button>
									    </div>
									</form>
								</div>
						    </li><!-- tab content #3 end -->
						</ul>
						<!-- tabs content end -->

						<!-- related rooms -->
						<div class="impx-other-rooms uk-margin-medium-top">
							<h4 class="uk-margin-bottom uk-heading-line"><span>Other Rooms</span></h4>
							<ul class="uk-child-width-1-3@xl uk-child-width-1-3@l uk-child-width-1-3@m uk-child-width-1-3@s impx-rooms style3 bottom uk-margin-bottom data-uk-grid" data-uk-grid>
								<li><!-- related room item #1 -->
									<a href="room-detail.html" class="uk-inline-clip uk-transition-toggle">
										<div class="uk-card uk-card-default uk-box-shadow-large uk-box-shadow-hover-xlarge impx-service-card other-item bg-color-aqua">
								        	<div class="uk-card-media-top">
								        		<div class="uk-position-relative">
									                <img src="images/rooms/room-1.jpg" alt="">
									                <div class="impx-overlay light overlay-squared padding-xwide"></div>
									            </div>
								                <div class="uk-card-body impx-padding-small uk-position-relative uk-position-z-index">
								                	<h6 class="uk-card-title uk-margin-remove-bottom impx-text-white">Single Room</h6>
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
								</li><!-- related room item #1 end -->
								<li><!-- related room item #2 -->
									<a href="room-detail.html" class="uk-inline-clip uk-transition-toggle">
										<div class="uk-card uk-card-default uk-box-shadow-large uk-box-shadow-hover-xlarge impx-service-card other-item bg-color-aqua">
								        	<div class="uk-card-media-top">
								        		<div class="uk-position-relative">
									                <img src="images/rooms/room-5.jpg" alt="">
									                <div class="impx-overlay light overlay-squared padding-xwide"></div>
									            </div>
								                <div class="uk-card-body impx-padding-small uk-position-relative uk-position-z-index">
								                	<h6 class="uk-card-title uk-margin-remove-bottom impx-text-white">Double Room</h6>
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
								</li><!-- related room item #2 end -->
								<li><!-- related room item #3 -->
									<a href="room-detail.html" class="uk-inline-clip uk-transition-toggle">
										<div class="uk-card uk-card-default uk-box-shadow-large uk-box-shadow-hover-xlarge impx-service-card other-item bg-color-aqua">
								        	<div class="uk-card-media-top uk-light">
								        		<div class="uk-position-relative">
									                <img src="images/rooms/room-3.jpg" alt="">
									                <div class="impx-overlay light overlay-squared padding-xwide"></div>
									            </div>
								                <div class="uk-card-body impx-padding-small uk-position-relative uk-position-z-index">
								                	<h6 class="uk-card-title uk-margin-remove-bottom impx-text-white">Deluxe Room</h6>
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
								</li><!-- related room item #3 end -->
							</ul>
						</div>
						<!-- related rooms end -->
					</div>

					<!-- facilities -->
					<div class="uk-width-1-4@xl uk-width-1-4@l uk-width-1-4@m uk-width-1-1@s">
						<h5 class="uk-text-center uk-heading-line uk-margin-bottom"><span>Our Facilities</span></h5>
						<ul class="uk-child-width-1-1@xl uk-child-width-1-1@l uk-child-width-1-1@m uk-child-width-1-2@s" data-uk-grid>
						    <li class="uk-text-center uk-margin-small-top"><!-- facilitiy item #1 -->
						    	<div class="uk-card uk-card-default uk-card-body impx-padding-medium">
							    	<i class="fa fa-wifi fa-2x impx-text-aqua"></i>
							    	<h6 class="uk-margin-remove-bottom uk-margin-small-top">Free Wi-fi</h6>
							    	<p class="uk-margin-remove-bottom uk-margin-small-top">Ergo hoc quidem apparet agendum esse natos. Quam tu ponis in verbis ego</p>
						    	</div>
						    </li><!-- facilitiy item #1 end -->
						    <li class="uk-text-center"><!-- facilitiy item #2 -->
						    	<div class="uk-card uk-card-default uk-card-body impx-padding-medium">
							    	<i class="fa fa-bathtub fa-2x impx-text-aqua"></i>
							    	<h6 class="uk-margin-remove-bottom uk-margin-small-top">Bathtub</h6>
							    	<p class="uk-margin-remove-bottom uk-margin-small-top">Ergo hoc quidem apparet agendum esse natos. Quam tu ponis in verbis ego</p>
						    	</div>
						    </li><!-- facilitiy item #2 end -->
						    <li class="uk-text-center"><!-- facilitiy item #3 -->
						    	<div class="uk-card uk-card-default uk-card-body impx-padding-medium">
							    	<i class="fa fa-tv fa-2x impx-text-aqua"></i>
							    	<h6 class="uk-margin-remove-bottom uk-margin-small-top">Widescreen TV</h6>
							    	<p class="uk-margin-remove-bottom uk-margin-small-top">Ergo hoc quidem apparet agendum esse natos. Quam tu ponis in verbis ego</p>
							    </div>
						    </li><!-- facilitiy item #3 end -->
						    <li class="uk-text-center"><!-- facilitiy item #4 -->
						    	<div class="uk-card uk-card-default uk-card-body impx-padding-medium">
							    	<i class="fa fa-heart-o fa-2x impx-text-aqua"></i>
							    	<h6 class="uk-margin-remove-bottom uk-margin-small-top">Gym Studio</h6>
							    	<p class="uk-margin-remove-bottom uk-margin-small-top">Ergo hoc quidem apparet agendum esse natos. Quam tu ponis in verbis ego</p>
							    </div>
						    </li><!-- facilitiy item #4 end -->
						    <li class="uk-text-center"><!-- facilitiy item #5 -->
						    	<div class="uk-card uk-card-default uk-card-body impx-padding-medium">
							    	<i class="fa fa-child fa-2x impx-text-aqua"></i>
							    	<h6 class="uk-margin-remove-bottom uk-margin-small-top">Kids Playground</h6>
							    	<p class="uk-margin-remove-bottom uk-margin-small-top">Ergo hoc quidem apparet agendum esse natos. Quam tu ponis in verbis ego</p>
							    </div>
						    </li><!-- facilitiy item #5 end -->
						    <li class="uk-text-center"><!-- facilitiy item #6 -->
						    	<div class="uk-card uk-card-default uk-card-body impx-padding-medium">
							    	<i class="fa fa-coffee fa-2x impx-text-aqua"></i>
							    	<h6 class="uk-margin-remove-bottom uk-margin-small-top">Mini Cafe</h6>
							    	<p class="uk-margin-remove-bottom uk-margin-small-top">Ergo hoc quidem apparet agendum esse natos. Quam tu ponis in verbis ego</p>
							    </div>
						    </li><!-- facilitiy item #6 end -->
						</ul>
					</div>
					<!-- facilities end -->

				</div>
			</div>
		</div>
		<!-- CONTENT END -->

		<!-- CONTACT INFO -->
		<div class="pre-footer-contact uk-padding bg-img2 uk-position-relative ">
			<div class="impx-overlay dark"></div>
			<div class="uk-container">

				<div data-uk-grid class="uk-padding-remove-bottom uk-position-relative">
					<div class="uk-light uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-3@s"><!-- address -->
						<h5 class="uk-heading-line uk-margin-remove-bottom"><span>Address</span></h5>
						<p class="impx-text-large uk-margin-top">Jln. Raya Kemerderkaan RI No. 17<br/>Indonesia Raya</p>
					</div>
					<div class="uk-light uk-width-1-4@xl uk-width-1-4@l uk-width-1-4@m uk-width-1-3@s"><!-- phone -->
						<h5 class="uk-heading-line uk-margin-bottom"><span>Phone</span></h5>
						<p class="impx-text-large uk-margin-remove">+62 123456789<br/>+62 987456123</p>
					</div>
					<div class="uk-light uk-width-1-4@xl uk-width-1-4@l uk-width-1-4@m uk-width-1-3@s"><!-- email -->
						<h5 class="uk-heading-line uk-margin-bottom"><span>Email</span></h5>
						<a href="mailt:#" class="impx-text-large">cs@sativa-html.com</a><br/>
						<a href="mailt:#" class="impx-text-large">info@sativa-html.com</a>
					</div>
				</div>

			</div>
		</div>
		<!-- CONTACT INFO END -->


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
        <script src="js/jquery.parallax.min.js"></script>
        <script src="js/tiny-date-picker.min.js"></script>
        <script src="js/date-config.js"></script>
        <script src="js/jquery.barrating.js"></script>
        <script src="js/rating-config.js"></script>
        <script src="js/template-config.js"></script>
    </body>


</html>
