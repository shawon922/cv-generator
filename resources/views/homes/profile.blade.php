@extends((\Auth::user()) ? 'layouts.admin' : 'layouts.master')


@section('title')
	{{ $page_title }}
@stop

@section('content')
	@if (Session::has('success'))
		<div class="alert alert-success">
	        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

	        <h2>{{ Session::get('success') }}</h2>
	    </div>
	@endif

	<div class="row">
		<div class="col-lg-12">
			<h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>            
		</div>
	</div>
	<div class="row">
		<!-- profile-widget -->
		<div class="col-lg-12">
				<div class="profile-widget profile-widget-info">
					<div class="panel-body">
						<div class="col-lg-3 col-sm-3">
							<h4>{{ Auth::user()->first_name.' '.Auth::user()->last_name}}</h4>               
							<div class="follow-ava">
									<img src="/img/users/{{ Auth::user()->profile ? Auth::user()->profile->profile_picture : '' }}" alt="">
							</div>
							
						</div>
						<div class="col-lg-4 col-sm-4 follow-info">
							<p> {{ Auth::user()->profile ? Auth::user()->profile->about_me : '' }} </p>
							<p>@jenifersmith</p>
							<p><i class="fa fa-twitter">jenifertweet</i></p>
							<h6>
								<span><i class="icon_clock_alt"></i>11:05 AM</span>
								<span><i class="icon_calendar"></i>25.10.13</span>
								<span><i class="icon_pin_alt"></i>NY</span>
							</h6>
						</div>
						{{-- <div class="col-lg-2 col-sm-6 follow-info weather-category">
							<ul>
								<li class="active">
										
									<i class="fa fa-comments fa-2x"> </i><br>
									
									Contrary to popular belief, Lorem Ipsum is not simply
								</li>
									 
							</ul>
						</div>
						<div class="col-lg-2 col-sm-6 follow-info weather-category">
							<ul>
								<li class="active">
										
									<i class="fa fa-bell fa-2x"> </i><br>
									
									Contrary to popular belief, Lorem Ipsum is not simply 
								</li>
									 
							</ul>
						</div>
						<div class="col-lg-2 col-sm-6 follow-info weather-category">
							<ul>
								<li class="active">
										
									<i class="fa fa-tachometer fa-2x"> </i><br>
									
									Contrary to popular belief, Lorem Ipsum is not simply
								</li>
									 
							</ul>
						</div> --}}
					</div>
				</div>
			</div>
		</div>
		<!-- page start-->
		<div class="row">
			<div class="col-lg-12">
			<section class="panel">
				<header class="panel-heading tab-bg-info">
					<ul class="nav nav-tabs">                          
						<li class="active">
							<a data-toggle="tab" href="#profile">
								<i class="icon-user"></i>
								Profile
							</a>
						</li>
						<li class="">
							<a data-toggle="tab" href="#edit-profile">
								<i class="icon-envelope"></i>
								Edit Profile
							</a>
						</li>
					</ul>
				</header>
				<div class="panel-body">
					<div class="tab-content">                          
						<!-- profile -->
						<div id="profile" class="tab-pane active">
							<section class="panel">
								<div class="bio-graph-heading">
									{{ Auth::user()->profile ? Auth::user()->profile->about_me : '' }}
								</div>
								<div class="panel-body bio-graph-info">
									<h1>Bio Graph</h1>
									<div class="row">
										<div class="bio-row">
											<p><span>First Name </span>: {{ Auth::user()->first_name }} </p>
										</div>
										<div class="bio-row">
											<p><span>Last Name </span>: {{ Auth::user()->last_name }}</p>
										</div>                                              
										<div class="bio-row">
											<p><span>Birthday</span>: 
												@if (Auth::user()->profile)
													{{ Auth::user()->profile->date_of_birth != '0000-00-00' ? Auth::user()->profile->date_of_birth : '' }} 
												@endif
											</p>
										</div>
										<div class="bio-row">
											<p><span>Country </span>: {{ Auth::user()->profile ? Auth::user()->profile->country : '' }} </p>
										</div>
										<div class="bio-row">
											<p><span>Occupation </span>: UI Designer</p>
										</div>
										<div class="bio-row">
											<p><span>Email </span>: {{ Auth::user()->email }}</p>
										</div>
										<div class="bio-row">
											<p><span>Mobile </span>: (+6283) 456 789</p>
										</div>
										<div class="bio-row">
											<p><span>Phone </span>:  (+021) 956 789123</p>
										</div>
									</div>
								</div>
							</section>
							<section>
								<div class="row">                                              
								</div>
							</section>
						</div>
						<!-- edit-profile -->
						<div id="edit-profile" class="tab-pane">
							@include('homes.edit_profile')
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
@stop