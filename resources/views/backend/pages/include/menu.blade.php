<header>
	<div class="container">
		<div class="header-data">
			<div class="logo">
				<a href="{{url('/')}}" title=""><img src="{{asset('assets')}}/images/logo.png" alt=""></a>
			</div>
			@if(empty(Auth::user()->id))	
				<div class="user-account">
				<div class="user-login">
					<a href="{{route('login')}}" title=""><i class="fa fa-sign-in" aria-hidden="true">  Sign In </i></a>					
				</div>
			</div>

			<div class="user-account">
				<div class="user-info">
					<a href="javascript:void(0);" title=""><i class="fa fa-user-plus" aria-hidden="true">  Sign Up <i class="la la-sort-down"></i></i></a>
				</div>
				<div class="user-account-settingss">
		
					<h3>Sign Up As</h3>
					<ul class="us-links">
					<!-- 	<li><a href="profile-account-setting.html" title="">Buyer</a></li> -->
						<li><a href="{{route('buyer.reg')}}" title="">Buyer</a></li>
						<li><a href="{{route('buying.reg')}}" title="">Buying House</a></li>
						<li><a href="{{route('supplier.reg')}}" title="">Supplier</a></li>
						<li><a href="{{route('manufacturer.reg')}}" title="">Manufacturer</a></li>
					</ul>
				</div><!--user-account-settingss end-->
			</div>
			@else
			<div class="user-account">
				<div class="user-login">
<<<<<<< HEAD
					<a href="{{url('/home')}}" title=""><i class="fa fa-user" aria-hidden="true"> My Account</i></a>
				<!-- 	<a href="{{url('/profile')}}" title=""><i class="fa fa-user" aria-hidden="true"> My Profile</i></a> -->


=======
					<a href="{{url('/feed')}}" title=""><i class="fa fa-user" aria-hidden="true"> My Account</i></a>					
>>>>>>> d171c2839e2f9b3d8282d4a92ab73e468d022e7c
				</div>
			</div>
				@endif
		</div><!--header-data end-->
	</div>
</header><!--header end-->