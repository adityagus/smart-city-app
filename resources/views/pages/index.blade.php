@extends('layouts.main')

{{-- @section('title')
    Landing Page
@endsection --}}

@section('content')
    		<!-- HEADER : begin -->
		<header id="header">
			<div class="container">
				<div class="header-inner clearfix">

					<!-- HEADER BRANDING : begin -->
					<div class="header-branding">
						<a href="index.html"><img src="{{ url('frontend/dummies/logo scb.png') }}" alt="Smartcitybalikpapan"></a>
					</div>
					<!-- HEADER BRANDING : end -->

					<!-- HEADER NAVBAR : begin -->
					<div class="header-navbar">

						<!-- HEADER SEARCH : begin -->
						<div class="header-search">
							<form class="default-form" action="index.html">

								<!-- SEARCH INPUT : begin -->
								<div class="search-input">
									<i class="ico fa fa-search"></i>
									<i class="close fa fa-times"></i>
									<input type="text">
								</div>
								<!-- SEARCH INPUT : end -->

								<!-- SEARCH ADVANCED : begin -->
								<div class="header-form search-advanced">
									<div class="search-advanced-inner">

										<!-- ARRIVAL DATE, DEPARTURE DATE : begin -->
										<p class="form-row clearfix">
											<span class="calendar-input input-left" title="Arrival">
												<input type="text" name="arrival" placeholder="Arrival" data-dateformat="m/d/y">
												<i class="fa fa-calendar"></i>
											</span>
											<span class="calendar-input input-right" title="Departure">
												<input type="text" name="departure" placeholder="Departure" data-dateformat="m/d/y">
												<i class="fa fa-calendar"></i>
											</span>
										</p>
										<!-- ARRIVAL DATE, DEPARTURE DATE : end -->

										<!-- NUMBER OF ADULTS AN CHILDREN : begin -->
										<p class="form-row clearfix">
											<span class="select-box input-left" title="Adults">
												<select name="adults" data-placeholder="Adults">
													<option>Adults</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
											</span>
											<span class="select-box input-right" title="Children">
												<select name="children" data-placeholder="Children">
													<option>Children</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
											</span>
										</p>
										<!-- NUMBER OF ADULTS AN CHILDREN : end -->

										<!-- TYPE : begin -->
										<p class="form-row textalign-center radio-inputs">
											<span class="radio-input">
												<input id="type_swap" type="radio" name="type" value="swap" checked="checked">
												<label for="type_swap">Swap</label>
											</span>
											<span class="radio-input">
												<input id="type_book" type="radio" name="type" value="book">
												<label for="type_book">Book</label>
											</span>
											<span class="radio-input">
												<input id="type_rent" type="radio" name="type" value="rent">
												<label for="type_rent">Rent</label>
											</span>
										</p>
										<!-- TYPE : end -->

										<hr class="form-divider">
										<p class="form-row">
											<button class="submit-btn button"><i class="fa fa-search"></i> Search</button>
										</p>

									</div>
								</div>
								<!-- SEARCH ADVANCED : end -->

							</form>
						</div>
						<!-- HEADER SEARCH : end -->

						<!-- HEADER MENU : begin -->
						<div class="header-menu">
							<button class="header-btn">Menu <i class="fa fa-angle-down"></i></button>
							<nav class="header-nav">
								<ul>
									<li class="has-submenu">
										<a href="index.html">Home</a>
										<ul class="sub-menu">
											<li><a href="home-2.html">Home 2</a></li>
											<li><a href="home-3.html">Home 3</a></li>
											<li class="has-submenu">
												<a href="index.html">Dummy Item</a>
												<ul class="sub-menu">
													<li><a href="index.html">Dummy 1</a></li>
													<li><a href="index.html">Dummy 2</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li class="has-submenu">
										<a href="properties-listing-grid.html">Property Listing</a>
										<ul class="sub-menu">
											<li><a href="properties-listing-grid.html">Grid Layout</a></li>
											<li><a href="properties-listing-list.html">List Layout</a></li>
										</ul>
									</li>
									<li class="has-submenu">
										<a href="property-details-swap.html">Property Detail</a>
										<ul class="sub-menu">
											<li><a href="property-details-swap.html">Detail (Swap)</a></li>
											<li><a href="property-details-book.html">Detail (Book)</a></li>
											<li><a href="property-details-rent.html">Detail (Rent)</a></li>
										</ul>
									</li>
									<li><a href="shortcodes.html">Shortcodes</a></li>
									<li><a href="about-us.html">About Us</a></li>
									<li><a href="contact-us.html">Contact Us</a></li>
									<li><a href="privacy-policy.html">Privacy Policy</a></li>
									<li><a href="terms-conditions.html">Terms &amp; Conditions</a></li>
								</ul>
							</nav>
						</div>
						<!-- HEADER MENU : end -->

						<!-- HEADER TOOLS : begin -->
						<div class="header-tools">

							<!-- HEADER LANGUAGE : begin -->
							<div class="header-language">
								<button class="header-btn">EN <i class="fa fa-angle-down"></i></button>
								<nav class="header-nav">
									<ul class="custom-list">
										<li class="active"><a href="#">EN</a></li>
										<li><a href="#">DE</a></li>
										<li><a href="#">FR</a></li>
										<li><a href="#">IT</a></li>
									</ul>
								</nav>
							</div>
							<!-- HEADER LANGUAGE : end -->

							<!-- HEADER REGISTER : begin -->
							<div class="header-register">
								<button class="register-toggle header-btn"><i class="fa fa-plus-circle"></i> Register</button>
								<div class="header-form">
									<form action="/register"  method='post' class="default-form">
                    @csrf
										<p class="alert-message warning"><i class="ico fa fa-exclamation-circle"></i> All fields are required! <i class="fa fa-times close"></i></p>
										<p class="form-row ">
											<input class="required" type="text" placeholder="Name" name="name" class="is-invalid" value="{{ old('name') }}">
										</p>
										<p class="form-row ">
											<input class="required" type="text" placeholder="Username" name="username" class="is-invalid" value="{{ old('username') }}">
										</p>
										<p class="form-row">
											<input class="required email" type="text" placeholder="Email" name="email" value="">
										</p>
										<p class="form-row">
											<input class="required" type="password" placeholder="Password" name="password">
										</p>
										<p class="form-row">
											<input class="required" type="password" placeholder="Repeat Password" name="password-repeat">
										</p>
										<p class="form-row">
											<button class="submit-btn button"><i class="fa fa-plus-circle"></i> Register</button>
										</p>
									</form>
								</div>
							</div>
							<!-- HEADER REGISTER : end -->

							<!-- HEADER LOGIN : begin -->
							<div class="header-login">
								<button class="login-toggle header-btn"><i class="fa fa-power-off"></i> Login</button>
								<div class="header-form">
									<form action="index.html" class="default-form">
										<p class="alert-message warning"><i class="ico fa fa-exclamation-circle"></i> All fields are required! <i class="fa fa-times close"></i></p>
										<p class="form-row">
											<input class="required email" type="text" placeholder="Email">
										</p>
										<p class="form-row">
											<input class="required" type="password" placeholder="Password">
										</p>
										<p class="form-row">
											<button class="submit-btn button"><i class="fa fa-power-off"></i> Login</button>
										</p>
										<p class="form-row forgot-password">
											<a href="#">Forgot Password?</a>
										</p>
									</form>
								</div>
							</div>
							<!-- HEADER LOGIN : end -->

							<!-- HEADER ADD OFFER : begin -->
							<span class="header-add-offer"><a href="#" class="button"><i class="fa fa-plus"></i> Add Offer</a></span>
							<!-- HEADER ADD OFFER : end -->

						</div>
						<!-- HEADER TOOLS : end -->

					</div>
					<!-- HEADER NAVBAR : end -->

					<!-- SEARCH TOGGLE : begin -->
					<button class="search-toggle button"><i class="fa fa-search"></i></button>
					<!-- SEARCH TOGGLE : end -->

					<!-- NAVBAR TOGGLE : begin -->
					<button class="navbar-toggle button"><i class="fa fa-bars"></i></button>
					<!-- NAVBAR TOGGLE : end -->

				</div>
			</div>
		</header>
		<!-- HEADER : end -->

		<!-- BANNER : begin -->
		<div id="banner">

			<!-- BANNER BG : begin -->
			<div class="banner-bg">
				<div class="banner-bg-item"><img src="{{ url('frontend/dummies/banner_bg_01.jpg') }}" alt=""></div>
				<div class="banner-bg-item"><img src="{{ url('frontend/dummies/banner_bg_02.jpg') }}" alt=""></div>
				<div class="banner-bg-item"><img src="{{ url('frontend/dummies/banner_bg_03.jpg') }}" alt=""></div>
			</div>
			<!-- BANNER BG : end -->

			<!-- BANNER SEARCH : begin -->
			<div class="banner-search">
				<div class="container">
          <div class="row">
            <h1 class="" style="text-align: center; margin-top:-6cm">Halo</h1>
          </div>
					<div class="banner-search-inner">
						<ul class="custom-list tab-title-list clearfix">
							<li class="tab-title active"><a href="#swap">Swap</a></li>
							<li class="tab-title"><a href="#book">Book</a></li>
							<li class="tab-title"><a href="#rent">Rent</a></li>
						</ul>
						<ul class="custom-list tab-content-list">

							<!-- SWAP : begin -->
							<li class="tab-content active">
								<form class="default-form" action="index.html">

									<!-- SEARCH INPUT : begin -->
									<span class="search-input">
										<input type="text" placeholder="Where do you want to swap?">
									</span>
									<!-- SEARCH INPUT : end -->

									<!-- ARRIVAL DATE : begin -->
									<span class="calendar-input input-left" title="Arrival">
										<input type="text" name="arrival" placeholder="Arrival" data-dateformat="m/d/y">
										<i class="fa fa-calendar"></i>
									</span>
									<!-- ARRIVAL DATE : end -->

									<!-- DEPARTURE DATE : begin -->
									<span class="calendar-input input-right" title="Departure">
										<input type="text" name="departure" placeholder="Departure" data-dateformat="m/d/y">
										<i class="fa fa-calendar"></i>
									</span>
									<!-- DEPARTURE DATE : end -->

									<!-- ADULTS : begin -->
									<span class="select-box" title="Adults">
										<select name="adults" data-placeholder="Adults">
											<option>Adults</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</span>
									<!-- ADULTS : end -->

									<!-- CHILDREN : begin -->
									<span class="select-box" title="Children">
										<select name="children" data-placeholder="Children">
											<option>Children</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</span>
									<!-- CHILDREN : end -->

									<!-- SUBMIT : begin -->
									<span class="submit-btn">
										<button class="button"><i class="fa fa-search"></i> Search</button>
									</span>
									<!-- SUBMIT : end -->

								</form>
							</li>
							<!-- SWAP : end -->

							<!-- BOOK : begin -->
							<li class="tab-content">
								<form class="default-form" action="index.html">

									<!-- SEARCH INPUT : begin -->
									<span class="search-input">
										<input type="text" placeholder="Where do you want to book?">
									</span>
									<!-- SEARCH INPUT : end -->

									<!-- ARRIVAL DATE : begin -->
									<span class="calendar-input input-left" title="Arrival">
										<input type="text" name="arrival" placeholder="Arrival" data-dateformat="m/d/y">
										<i class="fa fa-calendar"></i>
									</span>
									<!-- ARRIVAL DATE : end -->

									<!-- DEPARTURE DATE : begin -->
									<span class="calendar-input input-right" title="Departure">
										<input type="text" name="departure" placeholder="Departure" data-dateformat="m/d/y">
										<i class="fa fa-calendar"></i>
									</span>
									<!-- DEPARTURE DATE : end -->

									<!-- ADULTS : begin -->
									<span class="select-box" title="Adults">
										<select name="adults" data-placeholder="Adults">
											<option>Adults</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</span>
									<!-- ADULTS : end -->

									<!-- CHILDREN : begin -->
									<span class="select-box" title="Children">
										<select name="children" data-placeholder="Children">
											<option>Children</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</span>
									<!-- CHILDREN : end -->

									<!-- SUBMIT : begin -->
									<span class="submit-btn">
										<button class="button"><i class="fa fa-search"></i> Search</button>
									</span>
									<!-- SUBMIT : end -->

								</form>
							</li>
							<!-- BOOK : end -->

							<!-- RENT : begin -->
							<li class="tab-content">
								<form class="default-form" action="index.html">

									<!-- SEARCH INPUT : begin -->
									<span class="search-input">
										<input type="text" placeholder="Where do you want to rent?">
									</span>
									<!-- SEARCH INPUT : end -->

									<!-- ARRIVAL DATE : begin -->
									<span class="calendar-input input-left" title="Arrival">
										<input type="text" name="arrival" placeholder="Arrival" data-dateformat="m/d/y">
										<i class="fa fa-calendar"></i>
									</span>
									<!-- ARRIVAL DATE : end -->

									<!-- DEPARTURE DATE : begin -->
									<span class="calendar-input input-right" title="Departure">
										<input type="text" name="departure" placeholder="Departure" data-dateformat="m/d/y">
										<i class="fa fa-calendar"></i>
									</span>
									<!-- DEPARTURE DATE : end -->

									<!-- ADULTS : begin -->
									<span class="select-box" title="Adults">
										<select name="adults" data-placeholder="Adults">
											<option>Adults</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</span>
									<!-- ADULTS : end -->

									<!-- CHILDREN : begin -->
									<span class="select-box" title="Children">
										<select name="children" data-placeholder="Children">
											<option>Children</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
										</select>
									</span>
									<!-- CHILDREN : end -->

									<!-- SUBMIT : begin -->
									<span class="submit-btn">
										<button class="button"><i class="fa fa-search"></i> Search</button>
									</span>
									<!-- SUBMIT : end -->

								</form>
							</li>
							<!-- RENT : end -->

						</ul>
					</div>
				</div>
			</div>
			<!-- BANNER SEARCH : end -->

		</div>
		<!-- BANNER : end -->

		<!-- CORE : begin -->
		<div id="core">

			<!-- CONTENT SECTION - SERVICES : begin -->
			<section class="content-section services">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">

							<!-- SERVICE 1 : begin -->
							<div class="service-container">
								<p class="service-icon"><i class="fa fa-refresh"></i></p>
								<h3 class="service-title">Swap House</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in.</p>
								<p><a href="#" class="button"><i class="fa fa-refresh"></i> Get Started!</a></p>
							</div>
							<!-- SERVICE 1 : end -->

						</div>
						<div class="col-sm-4">

							<!-- SERVICE 2 : begin -->
							<div class="service-container">
								<p class="service-icon"><i class="fa fa-book"></i></p>
								<h3 class="service-title">Book a Stay</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in.</p>
								<p><a href="#" class="button"><i class="fa fa-book"></i> Get Started!</a></p>
							</div>
							<!-- SERVICE 2 : end -->

						</div>
						<div class="col-sm-4">

							<!-- SERVICE 3 : begin -->
							<div class="service-container">
								<p class="service-icon"><i class="fa fa-money"></i></p>
								<h3 class="service-title">Rent</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in.</p>
								<p><a href="#" class="button"><i class="fa fa-money"></i> Get Started!</a></p>
							</div>
							<!-- SERVICE 3 : end -->

						</div>
					</div>
				</div>
			</section>
			<!-- CONTENT SECTION - SERVICES : end -->

			<!-- BROWSE : begin -->
			<section id="browse">
				<div class="container">
					<h2>Browse</h2>
					<div class="browse-inner">
						<div class="tabs-container browse-tabs-container">
							<ul class="custom-list tab-title-list">
								<li class="tab-title active"><a href="#featured-properties">Featured Properties</a></li>
								<li class="tab-title"><a href="#top-destinations">Top Destinations</a></li>
								<li class="tab-title"><a href="#our-members">Our Members</a></li>
							</ul>
							<ul class="custom-list tab-content-list browse-contents">
								<li class="tab-content active">

									<!-- BROWSE PROPERTIES : begin -->
									<div class="browse-properties">

										<ul class="custom-list tab-title-list">
											<li class="tab-title active"><a href="#featured-properties-swap" class="button">Swap</a></li>
											<li class="tab-title"><a href="#featured-properties-book" class="button">Book</a></li>
											<li class="tab-title"><a href="#featured-properties-rent" class="button">Rent</a></li>
										</ul>
										<ul class="custom-list tab-content-list">
											<li class="tab-content active"><img src="{{ url('frontend/dummies/map_01.jpg') }}" alt=""></li>
											<li class="tab-content"><img src="{{ url('frontend/dummies/map_02.jpg') }}" alt=""></li>
											<li class="tab-content"><img src="{{ url('frontend/dummies/map_03.jpg') }}" alt=""></li>
										</ul>

									</div>
									<!-- BROWSE PROPERTIES : end -->

								</li>
								<li class="tab-content">

									<!-- BROWSE DESTINATIONS : begin -->
									<div class="browse-destinations">

										<div class="row">
											<div class="col-sm-4">

												<!-- TOP DESTINATION 1 : begin -->
												<div class="top-destination">
													<img class="destination-thumb" src="{{ url("frontend/dummies/top_destination_01.jpg") }}" alt="">
													<div class="top-destination-inner">
														<h3>Bali</h3>
														<a href="#" class="button"><i class="fa fa-list-ul"></i> Browse</a>
													</div>
												</div>
												<!-- TOP DESTINATION 1 : end -->

											</div>
											<div class="col-sm-4">

												<!-- TOP DESTINATION 2 : begin -->
												<div class="top-destination">
													<img class="destination-thumb" src="{{ url("frontend/dummies/top_destination_02.jpg") }}" alt="">
													<div class="top-destination-inner">
														<h3>Raja Ampat</h3>
														<a href="#" class="button"><i class="fa fa-list-ul"></i> Browse</a>
													</div>
												</div>
												<!-- TOP DESTINATION 2 : end -->

											</div>
											<div class="col-sm-4">

												<!-- TOP DESTINATION 3 : begin -->
												<div class="top-destination">
													<img class="destination-thumb" src="{{ url("frontend/dummies/top_destination_03.jpg") }}" alt="">
													<div class="top-destination-inner">
														<h3>Labuan</h3>
														<a href="#" class="button"><i class="fa fa-list-ul"></i> Browse</a>
													</div>
												</div>
												<!-- TOP DESTINATION 3 : end -->

											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">

												<!-- TOP DESTINATION 4 : begin -->
												<div class="top-destination">
													<img class="destination-thumb" src="{{ url("frontend/dummies/top_destination_04.jpg") }}" alt="">
													<div class="top-destination-inner">
														<h3>Balikpapan</h3>
														<a href="#" class="button"><i class="fa fa-list-ul"></i> Browse</a>
													</div>
												</div>
												<!-- TOP DESTINATION 4 : end -->

											</div>
											<div class="col-sm-4">

												<!-- TOP DESTINATION 5 : begin -->
												<div class="top-destination">
													<img class="destination-thumb" src="{{ url("frontend/dummies/top_destination_05.jpg") }}" alt="">
													<div class="top-destination-inner">
														<h3>Malang</h3>
														<a href="#" class="button"><i class="fa fa-list-ul"></i> Browse</a>
													</div>
												</div>
												<!-- TOP DESTINATION 5 : end -->

											</div>
											<div class="col-sm-4">

												<!-- TOP DESTINATION 6 : begin -->
												<div class="top-destination">
													<img class="destination-thumb" src="{{ url("frontend/dummies/top_destination_06.jpg") }}" alt="">
													<div class="top-destination-inner">
														<h3>Papua</h3>
														<a href="#" class="button"><i class="fa fa-list-ul"></i> Browse</a>
													</div>
												</div>
												<!-- TOP DESTINATION 6 : end -->

											</div>
										</div>

									</div>
									<!-- BROWSE DESTINATIONS : end -->

								</li>
								<li class="tab-content">

									<!-- BROWSE MEMBERS : begin -->
									<div class="browse-members">

										<!-- BROWSE MEMBERS HEADER : begin -->
										<div class="browse-members-header clearfix">

											<!-- SEARCH : begin -->
											<div class="browse-members-search">
												<form action="index.html" class="default-form">
													<input type="text">
													<button><i class="fa fa-search"></i></button>
												</form>
											</div>
											<!-- SEARCH : end -->

											<!-- PAGINATION : begin -->
											<div class="browse-members-pagination">
												<form action="index.html" class="default-form">
													<span class="select-box">
														<select name="adults">
															<option value="1">Page 1</option>
															<option value="2">Page 2</option>
															<option value="3">Page 3</option>
															<option value="4">Page 4</option>
															<option value="5">Page 5</option>
														</select>
													</span>
												</form>
											</div>
											<!-- PAGINATION : end -->

										</div>
										<!-- BROWSE MEMBERS HEADER : end -->

										<!-- BROWSE MEMBERS LIST : begin -->
										<ul class="custom-list browse-members-list clearfix">

											<!-- MEMBER 1 : begin -->
											<li class="member first-in-row">
												<a href="#" class="member-portrait"><img src="dummies/portrait_04_160.jpg" alt=""></a>
												<h4 class="member-name"><a href="#">John Smith</a></h4>
												<h5 class="member-place">New York</h5>
											</li>
											<!-- MEMBER 1 : end -->

											<!-- MEMBER 2 : begin -->
											<li class="member">
												<a href="#" class="member-portrait"><img src="dummies/portrait_05_160.jpg" alt=""></a>
												<h4 class="member-name"><a href="#">John Smith</a></h4>
												<h5 class="member-place">New York</h5>
											</li>
											<!-- MEMBER 2 : end -->

											<!-- MEMBER 3 : begin -->
											<li class="member">
												<a href="#" class="member-portrait"><img src="dummies/portrait_06_160.jpg" alt=""></a>
												<h4 class="member-name"><a href="#">Jane Smith</a></h4>
												<h5 class="member-place">New York</h5>
											</li>
											<!-- MEMBER 3 : end -->

											<!-- MEMBER 4 : begin -->
											<li class="member">
												<a href="#" class="member-portrait"><img src="dummies/portrait_07_160.jpg" alt=""></a>
												<h4 class="member-name"><a href="#">John Smith</a></h4>
												<h5 class="member-place">New York</h5>
											</li>
											<!-- MEMBER 4 : end -->

											<!-- MEMBER 5 : begin -->
											<li class="member first-in-row-medium">
												<a href="#" class="member-portrait"><img src="dummies/portrait_08_160.jpg" alt=""></a>
												<h4 class="member-name"><a href="#">Jane Smith</a></h4>
												<h5 class="member-place">New York</h5>
											</li>
											<!-- MEMBER 5 : end -->

											<!-- MEMBER 6 : begin -->
											<li class="member">
												<a href="#" class="member-portrait"><img src="dummies/portrait_09_160.jpg" alt=""></a>
												<h4 class="member-name"><a href="#">Jane Smith</a></h4>
												<h5 class="member-place">New York</h5>
											</li>
											<!-- MEMBER 6 : end -->

											<!-- MEMBER 7 : begin -->
											<li class="member first-in-row">
												<a href="#" class="member-portrait"><img src="dummies/portrait_10_160.jpg" alt=""></a>
												<h4 class="member-name"><a href="#">John &amp; Jane</a></h4>
												<h5 class="member-place">New York</h5>
											</li>
											<!-- MEMBER 7 : end -->

											<!-- MEMBER 8 : begin -->
											<li class="member">
												<a href="#" class="member-portrait"><img src="dummies/portrait_11_160.jpg" alt=""></a>
												<h4 class="member-name"><a href="#">Felix &amp; Maria</a></h4>
												<h5 class="member-place">New York</h5>
											</li>
											<!-- MEMBER 8 : end -->

											<!-- MEMBER 9 : begin -->
											<li class="member first-in-row-medium">
												<a href="#" class="member-portrait"><img src="dummies/portrait_12_160.jpg" alt=""></a>
												<h4 class="member-name"><a href="#">John Smith</a></h4>
												<h5 class="member-place">New York</h5>
											</li>
											<!-- MEMBER 9 : end -->

											<!-- MEMBER 10 : begin -->
											<li class="member">
												<a href="#" class="member-portrait"><img src="dummies/portrait_13_160.jpg" alt=""></a>
												<h4 class="member-name"><a href="#">John &amp; Jane</a></h4>
												<h5 class="member-place">New York</h5>
											</li>
											<!-- MEMBER 10 : end -->

											<!-- MEMBER 11 : begin -->
											<li class="member">
												<a href="#" class="member-portrait"><img src="dummies/portrait_14_160.jpg" alt=""></a>
												<h4 class="member-name"><a href="#">Jane Smith</a></h4>
												<h5 class="member-place">New York</h5>
											</li>
											<!-- MEMBER 11 : end -->

											<!-- MEMBER 12 : begin -->
											<li class="member">
												<a href="#" class="member-portrait"><img src="dummies/portrait_15_160.jpg" alt=""></a>
												<h4 class="member-name"><a href="#">Jane Smith</a></h4>
												<h5 class="member-place">New York</h5>
											</li>
											<!-- MEMBER 12 : end -->

										</ul>
										<!-- BROWSE MEMBERS LIST : end -->

									</div>
									<!-- BROWSE MEMBERS : end -->

								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<!-- BROWSE : end -->

			<!-- CONTENT SECTION: begin -->
			<section class="content-section">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">

							<h2>About casa</h2>
							<p>Casa was made to make your travelling around the world more exciting and less expensive!</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue, suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus. Phasellus pharetra nulla ac diam.</p>
							<p class="cta-button">
								<a href="#" class="button"><i class="fa fa-heart"></i> Get Started!</a>
							</p>

						</div>
						<div class="col-sm-6">

							<p><img src="dummies/content_img_01.jpg" alt=""></p>

						</div>
					</div>
				</div>
			</section>
			<!-- CONTENT SECTION : end -->

		</div>
		<!-- CORE : end -->

@endsection