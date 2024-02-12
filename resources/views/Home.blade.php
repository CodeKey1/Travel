@include('Front.include.head')

<body class="impx-body" id="top">

    @include('Front.include.header')

    @include('Front.include.slides')

    		<!-- SERVICES LIST & BOOKING FORM -->
		<div class="impx-content impx-services style2 bg-color-aqua pattern-1">
			<div class="uk-container">

				<div class="uk-margin-medium-bottom impx-margin-bottom-small" data-uk-grid>

					<!-- Services List -->
					<div class="uk-width-expand impx-services-list uk-margin-bottom impx-margin-bottom-small">
						<h3 class="uk-heading-line uk-text-center uk-light uk-margin-bottom impx-text-white"><span>Complete Your Booking in 3 Easy Steps</span></h3>
                        <ul class="uk-child-width-1-3@xl uk-child-width-1-3@l uk-child-width-1-3@m uk-child-width-1-2@s impx-features-hl uk-grid-medium uk-grid-match uk-margin-top impx-margin-top-small" data-uk-grid>
                            <li><!-- Reason Item #1 -->
                                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium color1 impx-feature-item uk-position-relative">
                                    <h6 class="uk-margin-remove-top uk-margin-bottom impx-text-white">Best Value for Family</h6>
                                    <p class="uk-margin-remove  impx-text-lighter">Cur igitur, cum de re conveniat, melius nos veriusque quam Stoici mallem aut expetendam.</p>
                                    <span data-uk-icon="icon: users; ratio: 8" class="feature-icon"></span>
                                </div>
                            </li><!-- Reason Item #1 End -->
                            <li><!-- Reason Item #2 -->
                                 <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium color2 impx-feature-item uk-position-relative">
                                    <h6 class="uk-margin-remove-top uk-margin-bottom impx-text-white">Services Priority</h6>
                                    <p class="uk-margin-remove impx-text-lighter">Cur igitur, cum de re conveniat, melius nos veriusque quam Stoici mallem aut expetendam.</p>
                                    <span data-uk-icon="icon: bell; ratio: 8" class="feature-icon"></span>
                                </div>
                            </li><!-- Reason Item #2 End -->
                            <li><!-- Reason Item #3 -->
                                <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium color3 impx-feature-item uk-position-relative">
                                    <h6 class="uk-margin-remove-top uk-margin-bottom impx-text-white">Best Facilities</h6>
                                    <p class="uk-margin-remove impx-text-lighter">Cur igitur, cum de re conveniat, melius nos veriusque quam Stoici mallem aut expetendam.</p>
                                    <span data-uk-icon="icon: star; ratio: 8" class="feature-icon"></span>
                                </div>
                            </li><!-- Reason Item #3 End -->
                        </ul>
					</div>
					<!-- Services List End -->

				</div>

				<!-- Booking Form -->
				<div class="uk-margin-medium-bottom uk-margin-medium-top">
					<div class="impx-hp-booking-form impx-margin-top-small">
						<h6 class="uk-heading-line uk-text-center uk-margin-small-bottom impx-text-white"><span>Booking Form</span></h6>
						<form class="uk-child-width-1-6@xl uk-child-width-1-6@l uk-child-width-1-6@m uk-child-width-1-3@s uk-grid-medium" data-uk-grid>
							<div class="uk-form-controls">
							    <div class="uk-inline">
							    	<label class="uk-form-label  impx-text-white">Email</label>
							    	<span class="uk-form-icon" data-uk-icon="icon: mail"></span>
							        <input class="uk-input booking-email uk-border-rounded uk-width-1-1" type="text" placeholder="your e-mail">
							    </div>
						    </div>
						    <div class="uk-form-controls">
							    <div class="uk-inline">
							    	<label class="uk-form-label impx-text-white">Arrival</label>
							    	<span class="uk-form-icon" data-uk-icon="icon: calendar"></span>
							        <input class="uk-input booking-arrival uk-border-rounded" type="text" placeholder="m/dd/yyyy">
							    </div>
							</div>
						    <div class="uk-form-controls">
							    <div class="uk-inline">
							    	<label class="uk-form-label impx-text-white">Departure</label>
							    	<span class="uk-form-icon" data-uk-icon="icon: calendar"></span>
							        <input class="uk-input booking-departure uk-border-rounded" type="text" placeholder="m/dd/yyyy">
							    </div>
						    </div>
						    <div class="uk-form-controls uk-position-relative">
						    	<label class="uk-form-label impx-text-white" for="form-guest-select">Guest</label>
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
						    	<label class="uk-form-label impx-text-white" for="form-rooms-select">Rooms</label>
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
						    	<label class="uk-form-label empty-label" >&nbsp;</label>
						        <button class="uk-button uk-width-1-1">Book Now!</button>
						    </div>
						</form>
					</div>
				</div>
				<!-- Booking Form End -->

				<!-- Intro Text -->
				<div class="uk-flex uk-flex-center uk-position-relative uk-position-z-index" data-uk-grid>
					<div class="uk-width-2-3@xl uk-width-2-3@l uk-width-1-1@m uk-width-1-1@s">
						<div class="impx-intro uk-text-center uk-light uk-margin-remove-bottom">
							<h2 class="uk-margin-remove-vertical uk-margin-remove-bottom">Choose the Best Rooms &amp; Make Reservation </h2>
							<p class="impx-text-large uk-margin-remove-bottom uk-margin-small-top">Etenim semper illud extra arte comprehenditur utebare non numquam.</p>
						</div>
					</div>
				</div>
				<!-- Intro Text End -->

			</div>
		</div>
		<!-- SERVICES LIST & BOOKING FORM END -->

		<!-- ROOMS LIST -->
		<div class="uk-position-relative impx-section-rooms bg1 uk-position-relative uk-background-fixed uk-background-center-center uk-height-1-1">
			<div class="impx-overlay"></div>

			<div class="uk-container">
		    	<div class="uk-position-relative uk-visible-toggle">
			        <ul class="uk-child-width-1-2@xl uk-child-width-1-2@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-collapse uk-box-shadow-large uk-grid-match impx-rooms-grid"  data-uk-grid>
			        	<li><!-- Room Item #1 -->
			            	<div class="impx-room-item medium">
			            		<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s" data-uk-grid>
			            			<div class="uk-card-media-left uk-cover-container uk-position-relative">
			            				<canvas width="290" height="180"></canvas>
								        <img src="images/rooms/room-square-1.jpg" alt="" data-uk-cover>
								        <div class="impx-overlay light overlay-squared padding-xwide"></div>
								    </div>
							        <div class="uk-card-body uk-position-relative impx-padding-medium">
							        	<div class="uk-card-header uk-padding-remove-horizontal">
							                <h4 class="uk-card-title uk-margin-remove-bottom">Single Room</h4>
							                <p class="uk-text-meta uk-margin-remove-top">Subtitle Goes Here</p>
									    </div>
							        	<span class="uk-card-badge uk-label bg-color-aqua">from $50/night</span>
							            <ul class="uk-list room-fac">
											<li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Beatus in maximarum timore</li>
											<li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Oculis Compensabatur</li>
											<li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Dolorisnos veriusque nihil</li>
										</ul>
										 <div class="uk-card-footer uk-padding-remove-horizontal uk-padding-remove-bottom">
									        <a href="room-detail.html" class="uk-button uk-button-text impx-text-aqua">Read more &raquo;</a>
									    </div>
							        </div>
								</div>
							</div>
						</li><!-- Room Item #1 End -->
						<li><!-- Room Item #2 -->
							<div class="impx-room-item medium">
								<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s" data-uk-grid>
								    <div class="uk-card-media-left uk-cover-container uk-position-relative">
								    	<canvas width="290" height="180"></canvas>
								        <img src="images/rooms/room-square-5.jpg" alt="" data-uk-cover>
								        <div class="impx-overlay light overlay-squared padding-xwide"></div>
								    </div>
							        <div class="uk-card-body uk-position-relative impx-padding-medium">
							        	<div class="uk-card-header uk-padding-remove-horizontal">
							                <h4 class="uk-card-title uk-margin-remove-bottom">Double Room</h4>
							                <p class="uk-text-meta uk-margin-remove-top">Subtitle Goes Here</p>
									    </div>
							        	<span class="uk-card-badge uk-label bg-color-aqua">from $80/night</span>
							            <ul class="uk-list room-fac">
											<li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Beatus in maximarum timore</li>
											<li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Oculis Compensabatur</li>
											<li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Dolorisnos veriusque nihil</li>
										</ul>
										<div class="uk-card-footer uk-padding-remove-horizontal uk-padding-remove-bottom">
									        <a href="room-detail.html" class="uk-button uk-button-text impx-text-aqua">Read more &raquo;</a>
									    </div>
							        </div>
								</div>
							</div>
						</li><!-- Room Item #2 End -->
						<li><!-- Room Item #3 -->
							<div class="impx-room-item medium">
								<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s" data-uk-grid>
								    <div class="uk-card-body uk-position-relative impx-padding-medium">
							        	<div class="uk-card-header uk-padding-remove-horizontal">
							                <h4 class="uk-card-title uk-margin-remove-bottom">Premiere Room</h4>
							                <p class="uk-text-meta uk-margin-remove-top">Subtitle Goes Here</p>
									    </div>
							        	<span class="uk-card-badge uk-label bg-color-aqua">from $100/night</span>
							            <ul class="uk-list room-fac">
											<li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Beatus in maximarum timore</li>
											<li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Oculis Compensabatur</li>
											<li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Dolorisnos veriusque nihil</li>
										</ul>
										<div class="uk-card-footer uk-padding-remove-horizontal uk-padding-remove-bottom">
									        <a href="room-detail.html" class="uk-button uk-button-text impx-text-aqua">Read more &raquo;</a>
									    </div>
							        </div>
							        <div class="uk-card-media-right uk-cover-container uk-position-relative">
							        	<canvas width="290" height="180"></canvas>
								        <img src="images/rooms/room-square-3.jpg" alt="" data-uk-cover>
								        <div class="impx-overlay light overlay-squared padding-xwide"></div>
								    </div>
								</div>
							</div>
						</li><!-- Room Item #3 End -->
						<li><!-- Room Item #4 -->
							<div class="impx-room-item medium">
								<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s" data-uk-grid>
									<div class="uk-card-body uk-position-relative impx-padding-medium">
							        	<div class="uk-card-header uk-padding-remove-horizontal">
							                <h4 class="uk-card-title uk-margin-remove-bottom">Deluxe Room</h4>
							                <p class="uk-text-meta uk-margin-remove-top">Subtitle Goes Here</p>
									    </div>
							        	<span class="uk-card-badge uk-label bg-color-aqua">from $150/night</span>
							            <ul class="uk-list room-fac">
											<li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Beatus in maximarum timore</li>
											<li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Oculis Compensabatur</li>
											<li><span class="impx-text-aqua" data-uk-icon="icon: check; ratio: 1;"></span> Dolorisnos veriusque nihil</li>
										</ul>
										<div class="uk-card-footer uk-padding-remove-horizontal uk-padding-remove-bottom">
									        <a href="room-detail.html" class="uk-button uk-button-text impx-text-aqua">Read more &raquo;</a>
									    </div>
							        </div>
								    <div class="uk-card-media-right uk-cover-container uk-position-relative">
								    	<canvas width="290" height="180"></canvas>
								        <img src="images/rooms/room-square-4.jpg" alt="" data-uk-cover>
								        <div class="impx-overlay light overlay-squared padding-xwide"></div>
								    </div>
								</div>
							</div>
						</li><!-- Room Item #4 End -->
			        </ul>
		        </div>
			</div>

		</div>
		<!-- ROOMS LIST END -->

		<!-- WHY CHOOSE US? -->
		<div class="uk-padding-large uk-padding-remove-horizontal uk-position-relative bg-img3 impx-features">
			<div class="uk-container">

				<div class="uk-width-3-4@xl uk-width-3-4@l uk-width-1-1@m uk-width-1-1@s uk-margin-medium-top uk-position-relative uk-height-1-1 impx-features-content" data-uk-grid>

					<!-- Intro Text -->
					<div class="impx-intro uk-text-left">
						<h2 class="uk-margin-remove-bottom uk-margin-small-top">Why Choose Us?</h2>
						<p class="uk-margin-remove uk-text-uppercase">You can additional subtitle Here.</p>
					</div>
					<!-- Intro Text End -->
					<ul class="uk-child-width-1-3@xl uk-child-width-1-3@l uk-child-width-1-3@m uk-child-width-1-2@s impx-features-hl uk-grid-medium uk-grid-match uk-margin-top impx-margin-top-small" data-uk-grid>
						<li><!-- Reason Item #1 -->
					        <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium color1 impx-feature-item uk-position-relative">
					        	<h6 class="uk-margin-remove-top uk-margin-bottom impx-text-white">Best Value for Family</h6>
								<p class="uk-margin-remove  impx-text-lighter">Cur igitur, cum de re conveniat, melius nos veriusque quam Stoici mallem aut expetendam.</p>
								<span data-uk-icon="icon: users; ratio: 8" class="feature-icon"></span>
					        </div>
						</li><!-- Reason Item #1 End -->
						<li><!-- Reason Item #2 -->
							 <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium color2 impx-feature-item uk-position-relative">
								<h6 class="uk-margin-remove-top uk-margin-bottom impx-text-white">Services Priority</h6>
								<p class="uk-margin-remove impx-text-lighter">Cur igitur, cum de re conveniat, melius nos veriusque quam Stoici mallem aut expetendam.</p>
								<span data-uk-icon="icon: bell; ratio: 8" class="feature-icon"></span>
							</div>
						</li><!-- Reason Item #2 End -->
						<li><!-- Reason Item #3 -->
							<div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium color3 impx-feature-item uk-position-relative">
								<h6 class="uk-margin-remove-top uk-margin-bottom impx-text-white">Best Facilities</h6>
								<p class="uk-margin-remove impx-text-lighter">Cur igitur, cum de re conveniat, melius nos veriusque quam Stoici mallem aut expetendam.</p>
								<span data-uk-icon="icon: star; ratio: 8" class="feature-icon"></span>
							</div>
						</li><!-- Reason Item #3 End -->
						<li><!-- Reason Item #4 -->
							 <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium color4 impx-feature-item uk-position-relative">
								<h6 class="uk-margin-remove-top uk-margin-bottom impx-text-white">Satisfation Guarantee</h6>
								<p class="uk-margin-remove impx-text-lighter">Cur igitur, cum de re conveniat, melius nos veriusque quam Stoici mallem aut expetendam.</p>
								<span data-uk-icon="icon: heart; ratio: 8" class="feature-icon"></span>
							</div>
						</li><!-- Reason Item #4 End -->
						<li><!-- Reason Item #5 -->
							 <div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium color5 impx-feature-item uk-position-relative">
								<h6 class="uk-margin-remove-top uk-margin-bottom impx-text-white">Beatiful Panorama</h6>
								<p class="uk-margin-remove impx-text-lighter">Cur igitur, cum de re conveniat, melius nos veriusque quam Stoici mallem aut expetendam.</p>
								<span data-uk-icon="icon: image; ratio: 8" class="feature-icon"></span>
							</div>
						</li><!-- Reason Item #5 End -->
						<li><!-- Reason Item #6 -->
							<div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium color6 impx-feature-item uk-position-relative">
								<h6 class="uk-margin-remove-top uk-margin-bottom impx-text-white">Enjoy Your Time</h6>
								<p class="uk-margin-remove impx-text-lighter">Cur igitur, cum de re conveniat, melius nos veriusque quam Stoici mallem aut expetendam.</p>
								<span data-uk-icon="icon: happy; ratio: 8" class="feature-icon"></span>
							</div>
						</li><!-- Reason Item #6 End -->
					</ul>

				</div>

			</div>
		</div>
		<!-- WHY CHOOSE US? END -->

		<!-- PRICING PLANS -->
		<div class="uk-padding uk-padding-remove-horizontal impx-section-pricing">
			<div class="uk-container">
				<div class="uk-flex uk-flex-center uk-margin-medium-bottom impx-margin-bottom-small">
					<!-- Pricing Intro -->
					<div class="uk-width-2-3@xl uk-width-2-3@l uk-width-2-3@m uk-width-1-1@s uk-text-center hp-offer-intro">
						<h2 class="uk-margin-small-bottom">Our Special Offers</h2>
						<p class="impx-text-large uk-margin-remove-top uk-margin-small-bottom">Eiuro, inquit adridens, iniquum, hac quidem de re Conferam tecum, Hanc quoque iucunditatem, si vis, <span class="uk-label uk-label-danger uk-text-bold bg-color-gold">$299 for 3 Nights</span> transfer in animum; Sed quanta sit alias?</p>
					</div>
					<!-- Pricing Intro End -->
				</div>

				<div class="uk-flex uk-flex-center uk-margin-bottom">
					<div class="uk-width-5-6@xl uk-width-5-6@l uk-width-5-6@m uk-width-1-1@s impx-pricing-list" data-uk-grid>

						<ul class="uk-child-width-1-3@xl uk-child-width-1-3@l uk-child-width-1-3@m uk-child-width-1-3@s uk-grid-collapse impx-promo-pricing-list" data-uk-grid>
							<li class="uk-position-relative"><!-- Pricing Item #1-->
								<div class="impx-promo-pricing uk-box-shadow-large uk-light">
									<div class="uk-position-relative">
										<img src="images/pricing-img-1.jpg" alt="">
										<div class="impx-overlay light"></div>
									</div>
									<div class="uk-position-relative uk-padding bg-color-gold">
							            <h4 class="uk-heading-line uk-margin-small-bottom"><span>Silver</span></h4>
							            <span class="uk-label uk-label-success impx-text-gold uk-text-bold">$299 for 3 Nights</span>
										<ul class="uk-list">
											<li><i class="fa fa-bed"></i> Quae qui non vident, nihil</li>
											<li><i class="fa fa-coffee"></i> praeclare inter se cohaerere</li>
											<li><i class="fa fa-group"></i> Tenesne igitur, inquam</li>
										</ul>
										<a href="#" class="uk-button impx-button small impx-button-outline small-border">View Detail <i class="fa fa-arrow-right"></i></a>
							        </div>
						        </div>
							</li><!-- Pricing Item #1 End -->
							<li class="uk-position-relative uk-position-z-index"><!-- Pricing Item #2 -->
								<div class="impx-promo-pricing uk-box-shadow-xlarge uk-light featured">
									<div class="uk-position-relative">
									<img src="images/pricing-img-2.jpg" alt="">
										<div class="impx-overlay light"></div>
									</div>
									<div class="uk-position-relative uk-padding bg-color-aqua">
							            <h3 class="uk-heading-line uk-margin-small-bottom"><span>Gold</span></h3>
							            <span class="uk-label uk-label-success impx-text-aqua uk-text-bold">$399 for 3 Nights</span>
										<ul class="uk-list uk-list-large">
											<li><i class="fa fa-bed"></i> Quae qui non vident, nihil</li>
											<li><i class="fa fa-coffee"></i> praeclare inter se cohaerere</li>
											<li><i class="fa fa-group"></i> Tenesne igitur, inquam</li>
										</ul>
										<a href="#" class="uk-button impx-button small impx-button-outline small-border">View Detail <i class="fa fa-arrow-right"></i></a>
							        </div>
						        </div>
							</li><!-- Pricing Item #2 End -->
							<li class="uk-position-relative"><!-- Pricing Item #3 -->
								<div class="impx-promo-pricing uk-box-shadow-large uk-light">
									<div class="uk-position-relative">
										<img src="images/pricing-img-4.jpg" alt="">
										<div class="impx-overlay light"></div>
									</div>
									<div class="uk-position-relative uk-padding bg-color-gold">
							            <h4 class="uk-heading-line uk-margin-small-bottom"><span>Diamond</span></h4>
							            <span class="uk-label uk-label-success impx-text-gold uk-text-bold">$499 for 3 Nights</span>
										<ul class="uk-list">
											<li><i class="fa fa-bed"></i> Quae qui non vident, nihil</li>
											<li><i class="fa fa-coffee"></i> praeclare inter se cohaerere</li>
											<li><i class="fa fa-group"></i> Tenesne igitur, inquam</li>
										</ul>
										<a href="#" class="uk-button impx-button small impx-button-outline small-border">View Detail <i class="fa fa-arrow-right"></i></a>
							        </div>
						        </div>
							</li><!-- Pricing Item #3 End -->
						</ul>

					</div>
				</div>
			</div>
		</div>
		<!-- PRICING PLANS END -->

		<!-- TESTIMONIALS CAROUSEL -->
		<div class="uk-padding uk-padding-remove-horizontal uk-position-relative impx-section-testimonial uk-background-fixed uk-background-center-center uk-height-1-1">
			<div class="impx-overlay"></div>
			<div class="uk-container">

				<div class="uk-flex uk-flex-right uk-margin-bottom">

					<div class="uk-width-3-5@xl uk-width-3-5@l uk-width-4-5@m">

						<div class="impx-intro uk-text-right uk-light uk-position-relative">
    						<h2 class="uk-margin-small-bottom">Testimonials</h2>
    						<p class="impx-text-large uk-margin-remove-top uk-margin-medium-bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Si id dicis, vicimus. Sed ad illum redeo. Quia nec honesto quic quam honestius nec turpi turpius.</p>
    					</div>

						<!-- Testimonials List -->
						<div class="impx-testimonial-list">
							<div  data-uk-slider="{autoplay: true, finite: true}">
								<div class="uk-position-relative uk-visible-toggle uk-light">
								    <ul class="uk-slider-items uk-child-width-1-1" data-uk-grid>
								        <li class="uk-padding uk-padding-remove-vertical"><!-- Testimonial List Item 1 -->
											<div class="impx-testimonial-item impx-contrast">
												<div class="impx-testi-container">
													<div class="impx-testi-text">
														<blockquote>
															<p>Hinc ceteri particulas arripere conati suam quisque videro voluit afferre sententiam. Erit enim mecum, si tecum erit conantur! nostrum! Incendi igitur eos, qui audiunt, vides  prima si dederis, danda sunt omnia</p>
														</blockquote>
													</div>
													<div class="uk-text-center">
														<div class="impx-testi-name"><p>Mrs. Smith Yan</p></div>
														<div class="impx-company-name"><p class="bg-color-gold">Book Author</p></div>
													</div>
				    							</div>
												<div class="impx-testi-image"><img src="images/peoples/testi-people1.jpg" alt="People 1" /></div>
											</div>
			    						</li><!-- Testimonial List Item 1 End -->
			    						<li class="uk-padding uk-padding-remove-vertical"><!-- Testimonial List Item 2 -->
											<div class="impx-testimonial-item impx-contrast">
												<div class="impx-testi-container">
													<div class="impx-testi-text">
														<blockquote>
															<p>Hinc ceteri particulas arripere conati suam quisque videro voluit afferre sententiam. Erit enim mecum, si tecum erit conantur! nostrum! Incendi igitur eos, qui audiunt, vides  prima si dederis, danda sunt omnia</p>
														</blockquote>
													</div>
													<div class="uk-text-center">
														<div class="impx-testi-name"><p>Mrs. Smith Yan</p></div>
														<div class="impx-company-name"><p class="bg-color-gold">Book Author</p></div>
													</div>
				    							</div>
												<div class="impx-testi-image"><img src="images/peoples/testi-people2.jpg" alt="People 1"   /></div>
											</div>
			    						</li><!-- Testimonial List Item 2 End -->
			    						<li class="uk-padding uk-padding-remove-vertical"><!-- Testimonial List Item 3 -->
											<div class="impx-testimonial-item impx-contrast">
												<div class="impx-testi-container">
													<div class="impx-testi-text">
														<blockquote>
															<p>Hinc ceteri particulas arripere conati suam quisque videro voluit afferre sententiam. Erit enim mecum, si tecum erit conantur! nostrum! Incendi igitur eos, qui audiunt, vides  prima si dederis, danda sunt omnia</p>
														</blockquote>
													</div>
													<div class="uk-text-center">
														<div class="impx-testi-name"><p>Mrs. Smith Yan</p></div>
														<div class="impx-company-name"><p class="bg-color-gold">Book Author</p></div>
													</div>
				    							</div>
												<div class="impx-testi-image"><img src="images/peoples/testi-people3.jpg" alt="People 1"   /></div>
											</div>
			    						</li><!-- Testimonial List Item 3 End -->
			    						<li class="uk-padding uk-padding-remove-vertical"><!-- Testimonial List Item 4 -->
											<div class="impx-testimonial-item impx-contrast">
												<div class="impx-testi-container">
													<div class="impx-testi-text">
														<blockquote>
															<p>Hinc ceteri particulas arripere conati suam quisque videro voluit afferre sententiam. Erit enim mecum, si tecum erit conantur! nostrum! Incendi igitur eos, qui audiunt, vides  prima si dederis, danda sunt omnia</p>
														</blockquote>
													</div>
													<div class="uk-text-center">
														<div class="impx-testi-name"><p>Mrs. Smith Yan</p></div>
														<div class="impx-company-name"><p class="bg-color-gold">Book Author</p></div>
													</div>
				    							</div>
												<div class="impx-testi-image"><img src="images/peoples/testi-people4.jpg" alt="People 1"   /></div>
											</div>
			    						</li><!-- Testimonial List Item 4 End -->
									</ul>

									<!-- Testimonial Nav -->
									<a class="uk-position-center-left  uk-hidden-hover" href="#" data-uk-slidenav-previous data-uk-slider-item="previous"></a>
        							<a class="uk-position-center-right uk-hidden-hover" href="#" data-uk-slidenav-next data-uk-slider-item="next"></a>
        							<!-- Testimonial Nav End -->

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- TESTIMONIALS CAROUSEL END -->

		<!-- CONTACT SECTION -->
		<div class="impx-contact">
			<div id="impx-gmap"></div>

			<div class="impx-overlay aqua-darkest  uk-padding uk-padding-remove-bottom uk-padding-remove-horizontal">
				<div class="uk-container">

					<div class="uk-width-2-3@xl uk-width-2-3@l uk-width-2-3@m uk-width-1-1@s uk-margin-medium-bottom">
						<!-- Location -->
						<h4 class="impx-text-white">Our Location</h4>
						<p class="impx-text-large impx-text-light">Oculorum, inquit Plato, est in nobis sensus acerrimus, quibus sapientiam non cernimus non semper inquam At enim sequor utilitatem praetermissum in Stoicis?</p>
						<!-- Location End -->
					</div>

					<div data-uk-grid class="uk-padding-remove-bottom"><!-- Address -->
						<div class="uk-light uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
							<h5 class="uk-heading-line uk-margin-remove-bottom impx-text-white"><span>Address</span></h5>
							<p class="impx-text-large uk-margin-top impx-text-light">Jln. Raya Kemerderkaan RI No. 17<br/>Indonesia Raya</p>
						</div><!-- Address End-->
						<div class="uk-light uk-width-1-4@xl uk-width-1-4@l uk-width-1-4@m uk-width-1-1@s"><!-- Phone -->
							<h5 class="uk-heading-line uk-margin-bottom impx-text-white"><span>Phone</span></h5>
							<p class="impx-text-large uk-margin-remove impx-text-light">+62 123456789<br/>+62 987456123</p>
						</div><!-- Phone End -->
						<div class="uk-light uk-width-1-4@xl uk-width-1-4@l uk-width-1-4@m uk-width-1-1@s"><!-- Email -->
							<h5 class="uk-heading-line uk-margin-bottom  impx-text-white"><span>Email</span></h5>
							<a href="mailt:#" class="impx-text-large impx-text-light">cs@sativa-html.com</a><br/>
							<a href="mailt:#" class="impx-text-large impx-text-light">info@sativa-html.com</a>
						</div><!-- Email End -->
					</div>

				</div>
			</div>
		</div>
		<!-- CONTACT SECTION END -->

    @include('Front.include.footer')

    @include('Front.include.script')


</html>
