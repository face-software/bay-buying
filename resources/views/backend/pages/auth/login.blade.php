@extends('backend.pages.allPages.frontMaster')
@section('content')
<div class="wrapper">		
	@include('backend.pages.include.menu')
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
								<form method="post" action="{{ route('login') }}">
									@csrf
									<div class="row">
										<div class="col-lg-12 no-pdd">
											<div class="sn-field">
												<input id="email" type="email" name="email" placeholder="Email Address"  class="form-control @error('email') is-invalid @enderror" autocomplete="email" autofocus>
												<i class="la la-user"></i>
											</div><!--sn-field end-->
											 @error('email')
			                                    <span class="invalid-feedback" role="alert">
			                                        <strong>{{ $message }}</strong>
			                                    </span>
			                                @enderror
										</div>
										<div class="col-lg-12 no-pdd">
											<div class="sn-field">
												<input type="password" name="password" placeholder="Password"  class="form-control @error('password') is-invalid @enderror" autocomplete="password" autofocus>
												<i class="la la-lock"></i>
											</div>
											@error('password')
		                                    	<span class="invalid-feedback" role="alert">
		                                        	<strong>{{ $message }}</strong>
		                                    	</span>
	                                		@enderror
										</div>
										<div class="col-lg-12 no-pdd">
											<div class="checky-sec">
											<!-- 	<div class="fgt-sec">
													<input type="checkbox" name="cc" id="c1" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
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
								<form method="post" action="{{ route('login') }}">
									<div class="row">
										<div class="col-lg-12 no-pdd">
											<div class="sn-field">
												<input type="text" name="email" placeholder="Email Address.." class="@error('email') is-invalid @enderror">
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