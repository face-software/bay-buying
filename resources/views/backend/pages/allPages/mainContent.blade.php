@extends('backend.pages.master')
@section('content')
<main>
	<div class="main-section">
		<div class="container">
			<div class="main-section-data">
				<div class="row">
					<div class="col-lg-3 col-md-4 pd-left-none no-pd">
						@if(Auth::user()->user_type!=1)
							<x-leftsidebar/><!--main-left-sidebar end-->
						@else
							<x-profileleftsidebar/>
						@endif
					</div>
					<div class="col-lg-6 col-md-8 no-pd">
						<div class="post-popup pst-pj">
			<div class="post-project">
				<h3>Post a project</h3>
				<div class="post-project-fields">
					<form>
						<div class="row">
							<div class="col-lg-12">
								<input type="text" name="title" placeholder="Title">
							</div>
							<div class="col-lg-12">
								<div class="inp-field">
									<select>
										<option>Category</option>
										<option>Category 1</option>
										<option>Category 2</option>
										<option>Category 3</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<input type="text" name="skills" placeholder="Skills">
							</div>
							<div class="col-lg-12">
								<div class="price-sec">
									<div class="price-br">
										<input type="text" name="price1" placeholder="Price">
										<i class="la la-dollar"></i>
									</div>
									<span>To</span>
									<div class="price-br">
										<input type="text" name="price1" placeholder="Price">
										<i class="la la-dollar"></i>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<textarea name="description" placeholder="Description"></textarea>
							</div>
							<div class="col-lg-12">
								<ul>
									<li><button class="active" type="submit" value="post">Post</button></li>
									<li><a href="#" title="">Cancel</a></li>
								</ul>
							</div>
						</div>
					</form>
				</div><!--post-project-fields end-->
				<a href="#" title=""><i class="la la-times-circle-o"></i></a>
			</div><!--post-project end-->
		</div><!--post-project-popup end-->

		<div class="post-popup job_post">
			<div class="post-project">
				<h3>Post a job</h3>
				<div class="post-project-fields">
					<form>
						<div class="row">
							<div class="col-lg-12">
								<input type="text" name="title" placeholder="Title">
							</div>
							<div class="col-lg-12">
								<div class="inp-field">
									<select>
										<option>Category</option>
										<option>Category 1</option>
										<option>Category 2</option>
										<option>Category 3</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<input type="text" name="skills" placeholder="Skills">
							</div>
							<div class="col-lg-6">
								<div class="price-br">
									<input type="text" name="price1" placeholder="Price">
									<i class="la la-dollar"></i>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="inp-field">
									<select>
										<option>Full Time</option>
										<option>Half time</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<textarea name="description" placeholder="Description"></textarea>
							</div>
							<div class="col-lg-12">
								<ul>
									<li><button class="active" type="submit" value="post">Post</button></li>
									<li><a href="#" title="">Cancel</a></li>
								</ul>
							</div>
						</div>
					</form>
				</div><!--post-project-fields end-->
				<a href="#" title=""><i class="la la-times-circle-o"></i></a>
			</div><!--post-project end-->
		</div><!--post-project-popup end-->



		<div class="chatbox-list">
			<div class="chatbox">
				<div class="chat-mg">
					<a href="#" title=""><img src="{{asset('assets')}}/images/resources/usr-img1.png" alt=""></a>
					<span>2</span>
				</div>
				<div class="conversation-box">
					<div class="con-title mg-3">
						<div class="chat-user-info">
							<img src="{{asset('assets')}}/images/resources/us-img1.png" alt="">
							<h3>John Doe <span class="status-info"></span></h3>
						</div>
						<div class="st-icons">
							<a href="#" title=""><i class="la la-cog"></i></a>
							<a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
							<a href="#" title="" class="close-chat"><i class="la la-close"></i></a>
						</div>
					</div>
					<div class="chat-hist mCustomScrollbar" data-mcs-theme="dark">
						<div class="chat-msg">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
							<span>Sat, Aug 23, 1:10 PM</span>
						</div>
						<div class="date-nd">
							<span>Sunday, August 24</span>
						</div>
						<div class="chat-msg st2">
							<p>Cras ultricies ligula.</p>
							<span>5 minutes ago</span>
						</div>
						<div class="chat-msg">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
							<span>Sat, Aug 23, 1:10 PM</span>
						</div>
					</div><!--chat-list end-->
					<div class="typing-msg">
						<form>
							<textarea placeholder="Type a message here"></textarea>
							<button type="submit"><i class="fa fa-send"></i></button>
						</form>
						<ul class="ft-options">
							<li><a href="#" title=""><i class="la la-smile-o"></i></a></li>
							<li><a href="#" title=""><i class="la la-camera"></i></a></li>
							<li><a href="#" title=""><i class="fa fa-paperclip"></i></a></li>
						</ul>
					</div><!--typing-msg end-->
				</div><!--chat-history end-->
			</div>
			<div class="chatbox">
				<div class="chat-mg">
					<a href="#" title=""><img src="{{asset('assets')}}/images/resources/usr-img2.png" alt=""></a>
				</div>
				<div class="conversation-box">
					<div class="con-title mg-3">
						<div class="chat-user-info">
							<img src="{{asset('assets')}}/images/resources/us-img1.png" alt="">
							<h3>John Doe <span class="status-info"></span></h3>
						</div>
						<div class="st-icons">
							<a href="#" title=""><i class="la la-cog"></i></a>
							<a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
							<a href="#" title="" class="close-chat"><i class="la la-close"></i></a>
						</div>
					</div>
					<div class="chat-hist mCustomScrollbar" data-mcs-theme="dark">
						<div class="chat-msg">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
							<span>Sat, Aug 23, 1:10 PM</span>
						</div>
						<div class="date-nd">
							<span>Sunday, August 24</span>
						</div>
						<div class="chat-msg st2">
							<p>Cras ultricies ligula.</p>
							<span>5 minutes ago</span>
						</div>
						<div class="chat-msg">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
							<span>Sat, Aug 23, 1:10 PM</span>
						</div>
					</div><!--chat-list end-->
					<div class="typing-msg">
						<form>
							<textarea placeholder="Type a message here"></textarea>
							<button type="submit"><i class="fa fa-send"></i></button>
						</form>
						<ul class="ft-options">
							<li><a href="#" title=""><i class="la la-smile-o"></i></a></li>
							<li><a href="#" title=""><i class="la la-camera"></i></a></li>
							<li><a href="#" title=""><i class="fa fa-paperclip"></i></a></li>
						</ul>
					</div><!--typing-msg end-->
				</div><!--chat-history end-->
			</div>
			<div class="chatbox">
				<div class="chat-mg bx">
					<a href="#" title=""><img src="{{asset('assets')}}/images/chat.png" alt=""></a>
					<span>2</span>
				</div>
				<div class="conversation-box">
					<div class="con-title">
						<h3>Messages</h3>
						<a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
					</div>
					<div class="chat-list">
						<div class="conv-list active">
							<div class="usrr-pic">
								<img src="{{asset('assets')}}/images/resources/usy1.png" alt="">
								<span class="active-status activee"></span>
							</div>
							<div class="usy-info">
								<h3>John Doe</h3>
								<span>Lorem ipsum dolor <img src="{{asset('assets')}}/images/smley.png" alt=""></span>
							</div>
							<div class="ct-time">
								<span>1:55 PM</span>
							</div>
							<span class="msg-numbers">2</span>
						</div>
						<div class="conv-list">
							<div class="usrr-pic">
								<img src="{{asset('assets')}}/images/resources/usy2.png" alt="">
							</div>
							<div class="usy-info">
								<h3>John Doe</h3>
								<span>Lorem ipsum dolor <img src="{{asset('assets')}}/images/smley.png" alt=""></span>
							</div>
							<div class="ct-time">
								<span>11:39 PM</span>
							</div>
						</div>
						<div class="conv-list">
							<div class="usrr-pic">
								<img src="{{asset('assets')}}/images/resources/usy3.png" alt="">
							</div>
							<div class="usy-info">
								<h3>John Doe</h3>
								<span>Lorem ipsum dolor <img src="{{asset('assets')}}/images/smley.png" alt=""></span>
							</div>
							<div class="ct-time">
								<span>0.28 AM</span>
							</div>
						</div>
					</div><!--chat-list end-->
				</div><!--conversation-box end-->
			</div>
		</div><!--chatbox-list end-->
<div class="main-ws-sec">
	<div class="post-topbar">
		<div class="user-picy">
			<img src="{{asset('assets')}}/images/resources/user-pic.png" alt="">
		</div>
		<div class="post-st">
			<ul>
				<li><a class="post_project" href="#" title="">Post a Project</a></li>
				<li><a class="post-jb active" href="#" title="">Post a Job</a></li>
			</ul>
		</div><!--post-st end-->
	</div><!--post-topbar end-->
	<div class="posts-section">
		<div class="post-bar">
			<div class="post_topbar">
				<div class="usy-dt">
					<img src="{{asset('assets')}}/images/resources/us-pic.png" alt="">
					<div class="usy-name">
						<h3>John Doe</h3>
						<span><img src="{{asset('assets')}}/images/clock.png" alt="">3 min ago</span>
					</div>
					</div>
				<div class="ed-opts">
					<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
					<ul class="ed-options">
						<li><a href="#" title="">Edit Post</a></li>
						<li><a href="#" title="">Unsaved</a></li>
						<li><a href="#" title="">Unbid</a></li>
						<li><a href="#" title="">Close</a></li>
						<li><a href="#" title="">Hide</a></li>
					</ul>
				</div>
			</div>
			<div class="epi-sec">
				<ul class="descp">
					<li><img src="{{asset('assets')}}/images/icon8.png" alt=""><span>Epic Coder</span></li>
					<li><img src="{{asset('assets')}}/images/icon9.png" alt=""><span>India</span></li>
				</ul>
				<ul class="bk-links">
					<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
					<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
				</ul>
			</div>
			<div class="job_descp">
				<h3>Senior Wordpress Developer</h3>
				<ul class="job-dt">
					<li><a href="#" title="">Full Time</a></li>
					<li><span>$30 / hr</span></li>
				</ul>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
				<ul class="skill-tags">
					<li><a href="#" title="">HTML</a></li>
					<li><a href="#" title="">PHP</a></li>
					<li><a href="#" title="">CSS</a></li>
					<li><a href="#" title="">Javascript</a></li>
					<li><a href="#" title="">Wordpress</a></li> 	
				</ul>
			</div>
			<div class="job-status-bar">
				<ul class="like-com">
					<li>
						<a href="#"><i class="fas fa-heart"></i> Like</a>
						<img src="{{asset('assets')}}/images/liked-img.png" alt="">
						<span>25</span>
					</li> 
					<li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
				</ul>
				<a href="#"><i class="fas fa-eye"></i>Views 50</a>
			</div>
		</div><!--post-bar end-->
		<div class="top-profiles">
			<div class="pf-hd">
				<h3>Top Profiles</h3>
				<i class="la la-ellipsis-v"></i>
			</div>
			<div class="profiles-slider">
				<div class="user-profy">
					<img src="{{asset('assets')}}/images/resources/user1.png" alt="">
					<h3>John Doe</h3>
					<span>Graphic Designer</span>
					<ul>
						<li><a href="#" title="" class="followw">Follow</a></li>
						<li><a href="#" title="" class="envlp"><img src="{{asset('assets')}}/images/envelop.png" alt=""></a></li>
						<li><a href="#" title="" class="hire">hire</a></li>
					</ul>
					<a href="#" title="">View Profile</a>
				</div><!--user-profy end-->
				<div class="user-profy">
					<img src="{{asset('assets')}}/images/resources/user2.png" alt="">
					<h3>John Doe</h3>
					<span>Graphic Designer</span>
					<ul>
						<li><a href="#" title="" class="followw">Follow</a></li>
						<li><a href="#" title="" class="envlp"><img src="{{asset('assets')}}/images/envelop.png" alt=""></a></li>
						<li><a href="#" title="" class="hire">hire</a></li>
					</ul>
					<a href="#" title="">View Profile</a>
				</div><!--user-profy end-->
				<div class="user-profy">
					<img src="{{asset('assets')}}/images/resources/user3.png" alt="">
					<h3>John Doe</h3>
					<span>Graphic Designer</span>
					<ul>
						<li><a href="#" title="" class="followw">Follow</a></li>
						<li><a href="#" title="" class="envlp"><img src="{{asset('assets')}}/images/envelop.png" alt=""></a></li>
						<li><a href="#" title="" class="hire">hire</a></li>
					</ul>
					<a href="#" title="">View Profile</a>
				</div><!--user-profy end-->
				<div class="user-profy">
					<img src="{{asset('assets')}}/images/resources/user1.png" alt="">
					<h3>John Doe</h3>
					<span>Graphic Designer</span>
					<ul>
						<li><a href="#" title="" class="followw">Follow</a></li>
						<li><a href="#" title="" class="envlp"><img src="{{asset('assets')}}/images/envelop.png" alt=""></a></li>
						<li><a href="#" title="" class="hire">hire</a></li>
					</ul>
					<a href="#" title="">View Profile</a>
				</div><!--user-profy end-->
				<div class="user-profy">
					<img src="{{asset('assets')}}/images/resources/user2.png" alt="">
					<h3>John Doe</h3>
					<span>Graphic Designer</span>
					<ul>
						<li><a href="#" title="" class="followw">Follow</a></li>
						<li><a href="#" title="" class="envlp"><img src="{{asset('assets')}}/images/envelop.png" alt=""></a></li>
						<li><a href="#" title="" class="hire">hire</a></li>
					</ul>
					<a href="#" title="">View Profile</a>
				</div><!--user-profy end-->
				<div class="user-profy">
					<img src="{{asset('assets')}}/images/resources/user3.png" alt="">
					<h3>John Doe</h3>
					<span>Graphic Designer</span>
					<ul>
						<li><a href="#" title="" class="followw">Follow</a></li>
						<li><a href="#" title="" class="envlp"><img src="{{asset('assets')}}/images/envelop.png" alt=""></a></li>
						<li><a href="#" title="" class="hire">hire</a></li>
					</ul>
					<a href="#" title="">View Profile</a>
				</div><!--user-profy end-->
			</div><!--profiles-slider end-->
		</div><!--top-profiles end-->
		<div class="post-bar">
			<div class="post_topbar">
				<div class="usy-dt">
					<img src="{{asset('assets')}}/images/resources/us-pic.png" alt="">
					<div class="usy-name">
						<h3>John Doe</h3>
						<span><img src="{{asset('assets')}}/images/clock.png" alt="">3 min ago</span>
					</div>
				</div>
				<div class="ed-opts">
					<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
					<ul class="ed-options">
						<li><a href="#" title="">Edit Post</a></li>
						<li><a href="#" title="">Unsaved</a></li>
						<li><a href="#" title="">Unbid</a></li>
						<li><a href="#" title="">Close</a></li>
						<li><a href="#" title="">Hide</a></li>
					</ul>
				</div>
			</div>
			<div class="epi-sec">
				<ul class="descp">
					<li><img src="{{asset('assets')}}/images/icon8.png" alt=""><span>Epic Coder</span></li>
					<li><img src="{{asset('assets')}}/images/icon9.png" alt=""><span>India</span></li>
				</ul>
				<ul class="bk-links">
					<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
					<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
					<li><a href="#" title="" class="bid_now">Bid Now</a></li>
				</ul>
			</div>
			<div class="job_descp">
				<h3>Senior Wordpress Developer</h3>
				<ul class="job-dt">
					<li><a href="#" title="">Full Time</a></li>
					<li><span>$30 / hr</span></li>
				</ul>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
				<ul class="skill-tags">
					<li><a href="#" title="">HTML</a></li>
					<li><a href="#" title="">PHP</a></li>
					<li><a href="#" title="">CSS</a></li>
					<li><a href="#" title="">Javascript</a></li>
					<li><a href="#" title="">Wordpress</a></li> 	
				</ul>
			</div>
			<div class="job-status-bar">
				<ul class="like-com">
					<li>
						<a href="#"><i class="fas fa-heart"></i> Like</a>
						<img src="{{asset('assets')}}/images/liked-img.png" alt="">
						<span>25</span>
					</li> 
					<li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
				</ul>
				<a href="#"><i class="fas fa-eye"></i>Views 50</a>
			</div>
		</div><!--post-bar end-->
		<div class="posty">
			<div class="post-bar no-margin">
				<div class="post_topbar">
					<div class="usy-dt">
						<img src="{{asset('assets')}}/images/resources/us-pc2.png" alt="">
						<div class="usy-name">
							<h3>John Doe</h3>
							<span><img src="{{asset('assets')}}/images/clock.png" alt="">3 min ago</span>
						</div>
					</div>
					<div class="ed-opts">
						<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
						<ul class="ed-options">
							<li><a href="#" title="">Edit Post</a></li>
							<li><a href="#" title="">Unsaved</a></li>
							<li><a href="#" title="">Unbid</a></li>
							<li><a href="#" title="">Close</a></li>
							<li><a href="#" title="">Hide</a></li>
						</ul>
					</div>
				</div>
				<div class="epi-sec">
					<ul class="descp">
						<li><img src="{{asset('assets')}}/images/icon8.png" alt=""><span>Epic Coder</span></li>
						<li><img src="{{asset('assets')}}/images/icon9.png" alt=""><span>India</span></li>
					</ul>
					<ul class="bk-links">
						<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
						<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
					</ul>
				</div>
				<div class="job_descp">
					<h3>Senior Wordpress Developer</h3>
					<ul class="job-dt">
						<li><a href="#" title="">Full Time</a></li>
						<li><span>$30 / hr</span></li>
					</ul>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
					<ul class="skill-tags">
						<li><a href="#" title="">HTML</a></li>
						<li><a href="#" title="">PHP</a></li>
						<li><a href="#" title="">CSS</a></li>
						<li><a href="#" title="">Javascript</a></li>
						<li><a href="#" title="">Wordpress</a></li> 	
					</ul>
				</div>
				<div class="job-status-bar">
					<ul class="like-com">
						<li>
							<a href="#"><i class="fas fa-heart"></i> Like</a>
							<img src="{{asset('assets')}}/images/liked-img.png" alt="">
							<span>25</span>
						</li> 
						<li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
					</ul>
					<a href="#"><i class="fas fa-eye"></i>Views 50</a>
				</div>
			</div><!--post-bar end-->
			<div class="comment-section">
				<a href="#" class="plus-ic">
					<i class="la la-plus"></i>
				</a>
				<div class="comment-sec">
					<ul>
						<li>
							<div class="comment-list">
								<div class="bg-img">
									<img src="{{asset('assets')}}/images/resources/bg-img1.png" alt="">
								</div>
								<div class="comment">
									<h3>John Doe</h3>
									<span><img src="{{asset('assets')}}/images/clock.png" alt=""> 3 min ago</span>
									<p>Lorem ipsum dolor sit amet, </p>
									<a href="#" title="" class="active"><i class="fa fa-reply-all"></i>Reply</a>
								</div>
							</div><!--comment-list end-->
							<ul>
								<li>
									<div class="comment-list">
										<div class="bg-img">
											<img src="{{asset('assets')}}/images/resources/bg-img2.png" alt="">
										</div>
										<div class="comment">
											<h3>John Doe</h3>
											<span><img src="images/clock.png" alt=""> 3 min ago</span>
											<p>Hi John </p>
											<a href="#" title=""><i class="fa fa-reply-all"></i>Reply</a>
										</div>
									</div><!--comment-list end-->
								</li>
							</ul>
						</li>
						<li>
							<div class="comment-list">
								<div class="bg-img">
									<img src="{{asset('assets')}}/images/resources/bg-img3.png" alt="">
								</div>
								<div class="comment">
									<h3>John Doe</h3>
									<span><img src="{{asset('assets')}}/images/clock.png" alt=""> 3 min ago</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at.</p>
									<a href="#" title=""><i class="fa fa-reply-all"></i>Reply</a>
								</div>
							</div><!--comment-list end-->
						</li>
					</ul>
				</div><!--comment-sec end-->
				<div class="post-comment">
					<div class="cm_img">
						<img src="{{asset('assets')}}/images/resources/bg-img4.png" alt="">
					</div>
					<div class="comment_box">
						<form>
							<input type="text" placeholder="Post a comment">
							<button type="submit">Send</button>
						</form>
					</div>
				</div><!--post-comment end-->
			</div><!--comment-section end-->
		</div><!--posty end-->
		<div class="process-comm">
			<div class="spinner">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div><!--process-comm end-->
	</div><!--posts-section end-->
</div><!--main-ws-sec end-->
					</div>
					<div class="col-lg-3 pd-right-none no-pd">
						@if(Auth::user()->user_type!=1)
							<x-rightsidebar/><!--main-left-sidebar end-->
						@else
							<x-profilerightsidebar/>
						@endif

					</div>
				</div>
			</div><!-- main-section-data end-->
		</div> 
	</div>
</main>




		
@endsection