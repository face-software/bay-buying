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
									
							<div class="sign_in_sec current  mt-50" id="tab-1">
								
								<h3>Sign in</h3>
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
												<a href="{{route('password.request')}}" title="">Forgot Password?</a>
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
	
						</div><!--login-sec end-->
					</div>
				</div>		
			</div><!--signin-pop end-->
		</div><!--signin-popup end-->
	</div><!--sign-in-page end-->


</div><!--theme-layout end-->
@endsection