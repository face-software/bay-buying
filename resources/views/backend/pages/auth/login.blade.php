@extends('backend.pages.allPages.frontMaster')
@section('content')


	<div class="wrapper">		
		<header>
	<div class="container">
		<div class="header-data">
			<div class="logo">
				<a href="index.html" title=""><img src="{{asset('assets')}}/images/logo.png" alt=""></a>
			</div><!--logo end-->
		<!-- 	<div class="search-bar">
				<form>
					<input type="text" name="search" placeholder="Search...">
					<button type="submit"><i class="la la-search"></i></button>
				</form>
			</div> --><!--search-bar end-->
<!-- <nav>
				<ul> -->
					<!-- <li>
						<a href="index.html" title="">
							<span><img src="images/icon1.png" alt=""></span>
							Home
						</a>
					</li>
					<li>
						<a href="companies.html" title="">
							<span><img src="images/icon2.png" alt=""></span>
							Companies
						</a>
						<ul>
							<li><a href="companies.html" title="">Companies</a></li>
							<li><a href="company-profile.html" title="">Company Profile</a></li>
						</ul>
					</li>
					<li>
						<a href="projects.html" title="">
							<span><img src="images/icon3.png" alt=""></span>
							Projects
						</a>
					</li>
					<li>
						<a href="profiles.html" title="">
							<span><img src="images/icon4.png" alt=""></span>
							Profiles
						</a>
						<ul>
							<li><a href="user-profile.html" title="">User Profile</a></li>
							<li><a href="my-profile-feed.html" title="">my-profile-feed</a></li>
						</ul>
					</li> -->
				<!-- 	<li>
						<a href="jobs.html" title="">
							<span><img src="images/icon5.png" alt=""></span>
							Sign In
						</a>
					</li> -->
<!-- 					<li>
						<a href="#" title="" class="not-box-openm">
							<span><img src="images/icon6.png" alt=""></span>
							Messages
						</a>
						<div class="notification-box msg" id="message">
							<div class="nt-title">
								<h4>Setting</h4>
								<a href="#" title="">Clear all</a>
							</div>
							<div class="nott-list">
								<div class="notfication-details">
					  				<div class="noty-user-img">
					  					<img src="images/resources/ny-img1.png" alt="">
					  				</div>
					  				<div class="notification-info">
					  					<h3><a href="messages.html" title="">Jassica William</a> </h3>
					  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
					  					<span>2 min ago</span>
					  				</div>
				  				</div>
				  				<div class="notfication-details">
					  				<div class="noty-user-img">
					  					<img src="images/resources/ny-img2.png" alt="">
					  				</div>
					  				<div class="notification-info">
					  					<h3><a href="messages.html" title="">Jassica William</a></h3>
					  					<p>Lorem ipsum dolor sit amet.</p>
					  					<span>2 min ago</span>
					  				</div>
				  				</div>
				  				<div class="notfication-details">
					  				<div class="noty-user-img">
					  					<img src="images/resources/ny-img3.png" alt="">
					  				</div>
					  				<div class="notification-info">
					  					<h3><a href="messages.html" title="">Jassica William</a></h3>
					  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
					  					<span>2 min ago</span>
					  				</div>
				  				</div>
				  				<div class="view-all-nots">
				  					<a href="messages.html" title="">View All Messsages</a>
				  				</div>
							</div>
						</div>
					</li> -->
		<!-- 		<li>
						<a href="#" title="" class="not-box-open">
							<span><img src="images/icon7.png" alt=""></span>
							Notification
						</a> -->
				<!-- 		<div class="notification-box noti" id="notification">
							<div class="nt-title">
								<h4>Setting</h4>
								<a href="#" title="">Clear all</a>
							</div>
							<div class="nott-list">
								<div class="notfication-details">
					  				<div class="noty-user-img">
					  					<img src="images/resources/ny-img1.png" alt="">
					  				</div>
					  				<div class="notification-info">
					  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
					  					<span>2 min ago</span>
					  				</div>
				  				</div>
				  				<div class="notfication-details">
					  				<div class="noty-user-img">
					  					<img src="images/resources/ny-img2.png" alt="">
					  				</div>
					  				<div class="notification-info">
					  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
					  					<span>2 min ago</span>
					  				</div>
				  				</div>
				  				<div class="notfication-details">
					  				<div class="noty-user-img">
					  					<img src="images/resources/ny-img3.png" alt="">
					  				</div>
					  				<div class="notification-info">
					  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
					  					<span>2 min ago</span>
					  				</div>
				  				</div>
				  				<div class="notfication-details">
					  				<div class="noty-user-img">
					  					<img src="images/resources/ny-img2.png" alt="">
					  				</div>
					  				<div class="notification-info">
					  					<h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
					  					<span>2 min ago</span>
					  				</div>
				  				</div>
				  				<div class="view-all-nots">
				  					<a href="#" title="">View All Notification</a>
				  				</div>
							</div>
						</div> -->
			<!-- 		</li>
				</ul>
			</nav>  -->
			<!--nav end-->
		<!-- 	<div class="menu-btn">
				<a href="#" title=""><i class="fa fa-bars"></i></a>
			</div> -->
				<div class="user-account">
				<div class="user-login">
					<!-- <img src="images/resources/user.png" alt=""> -->
					<a href="{{route('user.login')}}" title=""><i class="fa fa-sign-in" aria-hidden="true">  Sign In </i></a>					
				</div>
			</div>

			<div class="user-account">
				<div class="user-info">
					<!-- <img src="images/resources/user.png" alt=""> -->
					<a href="javascript:void(0);" title=""><i class="fa fa-user-plus" aria-hidden="true">  Sign Up <i class="la la-sort-down"></i></i></a>
					
				</div>
				<div class="user-account-settingss">
		<!-- 			<h3>Online Status</h3>
					<ul class="on-off-status">
						<li>
							<div class="fgt-sec">
								<input type="radio" name="cc" id="c5">
								<label for="c5">
									<span></span>
								</label>
								<small>Online</small>
							</div>
						</li>
						<li>
							<div class="fgt-sec">
								<input type="radio" name="cc" id="c6">
								<label for="c6">
									<span></span>
								</label>
								<small>Offline</small>
							</div>
						</li>
					</ul> -->
				<!-- 	<h3>Custom Status</h3>
					<div class="search_form">
						<form>
							<input type="text" name="search">
							<button type="submit">Ok</button>
						</form>
					</div> --><!--search_form end-->
					<h3>Sign Up As</h3>
					<ul class="us-links">
					<!-- 	<li><a href="profile-account-setting.html" title="">Buyer</a></li> -->
						<li><a href="sign-up.html" title="">Buyer</a></li>
						<li><a href="buyinghouse-sign-up.html" title="">Buying House</a></li>
						<li><a href="supplier-sign-up.html" title="">Supplier</a></li>
						<li><a href="manufacturer-sign-up.html" title="">Manufacturer</a></li>
					</ul>
					<!-- <h3 class="tc"><a href="sign-in.html" title="">Logout</a></h3> -->
				</div><!--user-account-settingss end-->
			</div>
		</div><!--header-data end-->
	</div>
</header>
		<div class="sign-in-page">
			<div class="signin-popup">
				<div class="signin-pop">
					<div class="row">
						<div class="col-lg-6">
							<div class="cmp-info">
								<div class="cm-logo">
									<img src="{{asset('assets')}}/images/cm-logo.png" alt="">
									<p>Workwise,  is a global freelancing platform and social networking where businesses and independent professionals connect and collaborate remotely</p>
								</div><!--cm-logo end-->	
								<img src="{{asset('assets')}}/images/cm-main-img.png" alt="">			
							</div><!--cmp-info end-->
						</div>
						<div class="col-lg-6">
							<div class="login-sec">
								<ul class="sign-control">
									<li data-tab="tab-1" class="current"><a href="javascript:void(0);" title="">Buyer</a></li>
									<li data-tab="tab-2"><a href="javascript:void(0);" title="">Supplier</a></li>
									<li data-tab="tab-3"><a href="javascript:void(0);" title="">Buying House</a></li>
									<li data-tab="tab-4"><a href="javascript:void(0);" title="">Manufacturer</a></li>				
									<!-- <li data-tab="tab-2"><a href="#" title="">Sign up</a></li>	 -->			
								</ul>			
								<div class="sign_in_sec current" id="tab-1">
									
									<h3>Sign in As Buyer</h3>
									<form>
										<div class="row">
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="text" name="username" placeholder="Username">
													<i class="la la-user"></i>
												</div><!--sn-field end-->
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="password" name="password" placeholder="Password">
													<i class="la la-lock"></i>
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="checky-sec">
												<!-- 	<div class="fgt-sec">
														<input type="checkbox" name="cc" id="c1">
														<label for="c1">
															<span></span>
														</label>
														<small>Remember me</small>
													</div> --><!--fgt-sec end-->
													<a href="#" title="">Forgot Password?</a>
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
												<button type="submit" value="submit">Sign in</button>
											</div>
										</div>
									</form>
								<!-- 	<div class="login-resources">
										<h4>Login Via Social Account</h4>
										<ul>
											<li><a href="#" title="" class="fb"><i class="fa fa-facebook"></i>Login Via Facebook</a></li>
											<li><a href="#" title="" class="tw"><i class="fa fa-twitter"></i>Login Via Twitter</a></li>
										</ul>
									</div> --><!--login-resources end-->
								</div><!--sign_in_sec end-->
								


								<div class="sign_in_sec" id="tab-2">
									
									<h3>Sign in As Supplier</h3>
									<form>
										<div class="row">
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="text" name="username" placeholder="Username">
													<i class="la la-user"></i>
												</div><!--sn-field end-->
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="password" name="password" placeholder="Password">
													<i class="la la-lock"></i>
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="checky-sec">
												<!-- 	<div class="fgt-sec">
														<input type="checkbox" name="cc" id="c1">
														<label for="c1">
															<span></span>
														</label>
														<small>Remember me</small>
													</div> --><!--fgt-sec end-->
													<a href="#" title="">Forgot Password?</a>
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
												<button type="submit" value="submit">Sign in</button>
											</div>
										</div>
									</form>
								</div>

								<div class="sign_in_sec" id="tab-3">
									
									<h3>Sign in As Buying House</h3>
									<form>
										<div class="row">
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="text" name="username" placeholder="Username">
													<i class="la la-user"></i>
												</div><!--sn-field end-->
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="password" name="password" placeholder="Password">
													<i class="la la-lock"></i>
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="checky-sec">
													<a href="#" title="">Forgot Password?</a>
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
												<button type="submit" value="submit">Sign in</button>
											</div>
										</div>
									</form>
								</div>

									<div class="sign_in_sec" id="tab-4">
									
									<h3>Sign in As Manufacturer</h3>
									<form>
										<div class="row">
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="text" name="username" placeholder="Username">
													<i class="la la-user"></i>
												</div><!--sn-field end-->
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="sn-field">
													<input type="password" name="password" placeholder="Password">
													<i class="la la-lock"></i>
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
												<div class="checky-sec">
												<!-- 	<div class="fgt-sec">
														<input type="checkbox" name="cc" id="c1">
														<label for="c1">
															<span></span>
														</label>
														<small>Remember me</small>
													</div> --><!--fgt-sec end-->
													<a href="#" title="">Forgot Password?</a>
												</div>
											</div>
											<div class="col-lg-12 no-pdd">
												<button type="submit" value="submit">Sign in</button>
											</div>
										</div>
									</form>
								<!-- 	<div class="login-resources">
										<h4>Login Via Social Account</h4>
										<ul>
											<li><a href="#" title="" class="fb"><i class="fa fa-facebook"></i>Login Via Facebook</a></li>
											<li><a href="#" title="" class="tw"><i class="fa fa-twitter"></i>Login Via Twitter</a></li>
										</ul>
									</div> --><!--login-resources end-->
								</div>
						<!-- 		<div class="sign_in_sec" id="tab-2">
									<div class="signup-tab">
										<i class="fa fa-long-arrow-left"></i>
										<h2>johndoe@example.com</h2>
										<ul>
											<li data-tab="tab-3" class="current"><a href="#" title="">User</a></li>
											<li data-tab="tab-4"><a href="#" title="">Company</a></li>
										</ul>
									</div> --><!--signup-tab end-->	
									<!-- <div class="dff-tab current" id="tab-3">
										<form>
											<div class="row">
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="name" placeholder="Full Name">
														<i class="la la-user"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="country" placeholder="Country">
														<i class="la la-globe"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<select>
															<option>Category</option>
															<option>Category 1</option>
															<option>Category 2</option>
															<option>Category 3</option>
															<option>Category 4</option>
														</select>
														<i class="la la-dropbox"></i>
														<span><i class="fa fa-ellipsis-h"></i></span>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="password" placeholder="Password">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="repeat-password" placeholder="Repeat Password">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="checky-sec st2">
														<div class="fgt-sec">
															<input type="checkbox" name="cc" id="c2">
															<label for="c2">
																<span></span>
															</label>
															<small>Yes, I understand and agree to the workwise Terms & Conditions.</small>
														</div> --><!--fgt-sec end-->
											<!-- 		</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<button type="submit" value="submit">Get Started</button>
												</div>
											</div>
										</form> -->
									<!-- </div> --><!--dff-tab end-->
									<!-- <div class="dff-tab" id="tab-4">
										<form>
											<div class="row">
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="company-name" placeholder="Company Name">
														<i class="la la-building"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="text" name="country" placeholder="Country">
														<i class="la la-globe"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="password" placeholder="Password">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="sn-field">
														<input type="password" name="repeat-password" placeholder="Repeat Password">
														<i class="la la-lock"></i>
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<div class="checky-sec st2">
														<div class="fgt-sec">
															<input type="checkbox" name="cc" id="c3">
															<label for="c3">
																<span></span>
															</label>
															<small>Yes, I understand and agree to the workwise Terms & Conditions.</small>
														</div> --><!--fgt-sec end-->
								<!-- 					</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<button type="submit" value="submit">Get Started</button>
												</div>
											</div>
										</form>
									</div>
								</div> -->		
							</div><!--login-sec end-->
						</div>
					</div>		
				</div><!--signin-pop end-->
			</div><!--signin-popup end-->
		</div><!--sign-in-page end-->


	</div><!--theme-layout end-->
@endsection