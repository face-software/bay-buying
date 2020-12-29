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
									<li data-tab="tab-1" class="current"><a href="javascript:void(0);" title="">Sign up</a></li>				
								</ul>			
								<div class="sign_in_sec current" id="tab-1">
									<div class="dff-tab current" id="tab-3">
									<form method="post" action="{{route('add.buying.house')}}">
																			@csrf
											<div class="row">
												<div class="col-lg-12 no-pdd">
													 @if ($errors->has('first_name'))
                    										<span class="text-danger" style="font-size: 12px;">{{ $errors->first('first_name') }}</span>
               												 @endif
													<div class="sn-field mt-1">
														<input type="text" name="first_name" placeholder="First Name" class=" form-control @error('first_name') is-invalid @enderror" value="{{old('first_name')}}">
														<i class="la la-user"></i>
													</div>
													  
												</div>
												<div class="col-lg-12 no-pdd">
														 @if ($errors->has('last_name'))
                    										<span class="text-danger" style="font-size: 12px;">{{ $errors->first('last_name') }}</span>
               												 @endif
													<div class="sn-field mt-1">
														<input type="text" name="last_name" placeholder="Last Name" class="form-control @error('last_name') is-invalid @enderror" value="{{old('last_name')}}">
														<i class="la la-user"></i>
													</div>
												
												</div>
												<div class="col-lg-12 no-pdd">
													 @if ($errors->has('email'))
                    										<span class="text-danger" style="font-size: 12px;">{{ $errors->first('email') }}</span>
               												 @endif
													<div class="sn-field mt-1">
														<input type="text" name="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}">
														<i class="fa fa-envelope"></i>
														
													</div>
													
												</div>
												<div class="col-lg-12 no-pdd">
													@if ($errors->has('address'))
                    										<span class="text-danger" style="font-size: 12px;">{{ $errors->first('address') }}</span>
               												 @endif
													<div class="sn-field mt-1">
														<input type="text" name="address" placeholder="Address" class="form-control @error('address') is-invalid @enderror" value="{{old('address')}}">
														<i class="fa fa-map-marker"></i>
														
													</div>
													 
												</div>

												<div class="col-lg-12 no-pdd">
													 @if ($errors->has('country'))
                    										<span class="text-danger" style="font-size: 12px;">{{ $errors->first('country') }}</span>
               												 @endif
													<div class="sn-field mt-1">
														<input type="text" name="country" placeholder="Country" class="form-control @error('country') is-invalid @enderror" value="{{old('country')}}">
														<i class="la la-globe"></i>
														
													</div>
													
												</div>
											<!-- 	<div class="col-lg-12 no-pdd">
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
												</div> -->
												<div class="col-lg-12 no-pdd">
														@if ($errors->has('mobile'))
                    										<span class="text-danger" style="font-size: 12px;">{{ $errors->first('mobile') }}</span>
               												 @endif
													<div class="sn-field mt-1">
														<input type="text" name="mobile" placeholder="Phone" class="form-control @error('mobile') is-invalid @enderror" value="{{old('mobile')}}">
														<i class="fa fa-mobile"></i>
														 
													</div>
												
												</div>
												<div class="col-lg-12 no-pdd">
													 @if ($errors->has('password'))
                    										<span class="text-danger" style="font-size: 12px;">{{ $errors->first('password') }}</span>
               												 @endif
													<div class="sn-field mt-1">
														<input type="password" name="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}">
														<i class="la la-lock"></i>
														
													</div>
													
												</div>
												<div class="col-lg-12 no-pdd">
													 @if ($errors->has('confirm_password'))
                    										<span class="text-danger" style="font-size: 12px;">{{ $errors->first('confirm_password') }}</span>
               												 @endif
													<div class="sn-field mt-1">
														<input type="password" name="confirm_password" placeholder="Confirm Password" class="form-control @error('confirm_password') is-invalid @enderror" value="{{old('confirm_password')}}">
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
														</div><!--fgt-sec end-->
													</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<button type="submit" value="submit">Get Started</button>
												</div>
											</div>
										</form>
									</div><!--dff-tab end-->
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
										<!-- 			</div>
												</div>
												<div class="col-lg-12 no-pdd">
													<button type="submit" value="submit">Get Started</button>
												</div>
											</div>
										</form>
									</div> --><!--dff-tab end-->
								</div>		
							</div><!--login-sec end-->
						</div>
					</div>		
				</div><!--signin-pop end-->
			</div><!--signin-popup end-->
		</div><!--sign-in-page end-->
	</div><!--theme-layout end-->
@endsection