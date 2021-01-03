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
                                
                                <h3>Reset Your Password?</h3>
                                <form method="post" action="{{ route('password.update') }}">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <div class="row">
                                        <div class="col-lg-12 no-pdd">
                                            <div class="sn-field">
                                                 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
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
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                                                <i class="la la-lock"></i>
                                            </div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>la la-lock
                                            </span>
                                        @enderror
                                        </div>
                                        <br>
                                          <div class="col-lg-12 no-pdd" >
                                            <div class="sn-field">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                                <i class="la la-lock"></i>
                                            </div>
                                        @error('password')
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
                               <!--login-resources end
                            </div>sign_in_sec end-->
    
                        </div><!--login-sec end-->
                    </div>
                </div>      
            </div><!--signin-pop end-->
        </div><!--signin-popup end-->
    </div><!--sign-in-page end-->


</div><!--theme-layout end-->
@endsection