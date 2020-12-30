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
								
								<h3>Forgot Your Password?</h3>
								<h4>Please enter your registered email and we will send you a link to reset your password.</h4>
								<br>
								<br>
								<form method="post" action="">
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
										<div class="col-lg-12 no-pdd" style="text-align: center;">
											<button type="submit" value="submit">Send Link</button>
										</div>
									</div>
								</form>
							 	<div class="login-resources">
									<!-- <h4>Login Via Social Account</h4> - -->
									<ul>
										<!-- <a href="" title="" class="btn btn-danger"><i class=""></i>Sign Up</a> -->
										<a href="{{route('user.login')}}" title="" class="btn btn-info"><i class=""></i>Sign In</a>
									</ul>
							 </div> <!--login-resources end
							</div>sign_in_sec end-->
	
						</div><!--login-sec end-->
					</div>
				</div>		
			</div><!--signin-pop end-->
		</div><!--signin-popup end-->
	</div><!--sign-in-page end-->


</div><!--theme-layout end-->
@endsection