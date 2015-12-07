@extends((\Auth::user()) ? 'layouts.admin' : 'layouts.master')


@section('title')
	{{ $page_title }}
@stop

@section('content')
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
						<div class="col-lg-2 col-sm-2">
							<h4>{{ Auth::user()->first_name.' '.Auth::user()->last_name}}</h4>               
							<div class="follow-ava">
									<img src="img/mail-avatar.jpg" alt="">
							</div>
							<h6>Administrator</h6>
						</div>
						<div class="col-lg-4 col-sm-4 follow-info">
							<p>Hello I’m Jenifer Smith, a leading expert in interactive and creative design.</p>
							<p>@jenifersmith</p>
							<p><i class="fa fa-twitter">jenifertweet</i></p>
							<h6>
								<span><i class="icon_clock_alt"></i>11:05 AM</span>
								<span><i class="icon_calendar"></i>25.10.13</span>
								<span><i class="icon_pin_alt"></i>NY</span>
							</h6>
						</div>
						<div class="col-lg-2 col-sm-6 follow-info weather-category">
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
						</div>
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
													Hello I’m Jenifer Smith, a leading expert in interactive and creative design specializing in the mobile medium. My graduation from Massey University with a Bachelor of Design majoring in visual communication.
								</div>
								<div class="panel-body bio-graph-info">
									<h1>Bio Graph</h1>
									<div class="row">
										<div class="bio-row">
											<p><span>First Name </span>: {{ Auth::user()->first_name }} </p>
										</div>
										<div class="bio-row">
											<p><span>Last Name </span>: {{ Auth::user()->last_name}}</p>
										</div>                                              
										<div class="bio-row">
											<p><span>Birthday</span>: 27 August 1987</p>
										</div>
										<div class="bio-row">
											<p><span>Country </span>: United</p>
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
							<section class="panel">                                          
								<div class="panel-body bio-graph-info">
									<h1> Profile Info</h1>
									{{--!! Form::open(array('url' => URL::to('/editProfile'), 'method' => 'put', 'files'=> true, 'class' => 'form-horizontal', 'role' => 'form')) !!--}}

									{!! Form::model($profile, ['method' => 'patch', 'url' => URL::to('/profile'), 'class' => 'form-horizontal']) !!}
										<div class="form-group">
											{!! Form::label('first_name', 'First Name', array('class' => 'col-lg-2 control-label')) !!}
											<div class="col-lg-6">
												{!! Form::text('first_name', null, array('class' => 'form-control')) !!}
											</div>
										</div>
										
										<div class="form-group">
											{!! Form::label('last_name', 'Last Name', array('class' => 'col-lg-2 control-label')) !!}
											<div class="col-lg-6">
												{!! Form::text('last_name', null, array('class' => 'form-control')) !!}
											</div>
										</div>
										
										<div class="form-group">
											{!! Form::label('date_of_birth', 'Date of Birth', array('class' => 'col-lg-2 control-label')) !!}
											<div class="col-lg-6">
												{!! Form::input('date', 'date_of_birth', null, array('class' => 'form-control')) !!}
											</div>
										</div>
										
										<div class="form-group">
											{!! Form::label('religion', 'Religion', array('class' => 'col-lg-2 control-label')) !!}
											<div class="col-lg-6">
												{!! Form::text('religion', null, array('class' => 'form-control')) !!}
											</div>
										</div>

										<div class="form-group">
											{!! Form::label('country', 'Country', array('class' => 'col-lg-2 control-label')) !!}
											<div class="col-lg-6">
												{!! Form::text('country', null, array('class' => 'form-control')) !!}
											</div>
										</div>

										<div class="form-group">
											{!! Form::label('profile_picture', 'Profile Picture', array('class' => 'col-lg-2 control-label')) !!}
											<div class="col-lg-6">
												{!! Form::file('profile_picture', null, array('class' => 'form-control')) !!}
											</div>
										</div>

										<div class="form-group">
											{!! Form::label('father_name', 'Father Name', array('class' => 'col-lg-2 control-label')) !!}
											<div class="col-lg-6">
												{!! Form::input('text', 'father_name', null, array('class' => 'form-control')) !!}
											</div>
										</div>

										<div class="form-group">
											{!! Form::label('mother_name', 'Mother Name', array('class' => 'col-lg-2 control-label')) !!}
											<div class="col-lg-6">
												{!! Form::input('text', 'mother_name', null, array('class' => 'form-control')) !!}
											</div>
										</div>

										<div class="form-group">
											{!! Form::label('present_address', 'Present Address', array('class' => 'col-lg-2 control-label')) !!}
											<div class="col-lg-6">
												{!! Form::textarea('present_address', null, array('class' => 'form-control', 'rows' => 5)) !!}
											</div>
										</div>

										<div class="form-group">
											{!! Form::label('permanent_address', 'Permanent Address', array('class' => 'col-lg-2 control-label')) !!}
											<div class="col-lg-6">
												{!! Form::textarea('permanent_address', null, array('class' => 'form-control', 'rows' => 5)) !!}
											</div>
										</div>

										<div class="form-group">
											{!! Form::label('career_objective', 'Career Objective', array('class' => 'col-lg-2 control-label')) !!}
											<div class="col-lg-6">
												{!! Form::textarea('career_objective', null, array('class' => 'form-control', 'rows' => 8)) !!}
											</div>
										</div>

										<div class="form-group">
											{!! Form::label('about_me', 'About Me', array('class' => 'col-lg-2 control-label')) !!}
											<div class="col-lg-6">
												{!! Form::textarea('about_me', null, array('class' => 'form-control', 'rows' => 5)) !!}
											</div>
										</div>

										<div class="form-group">
											<div class="col-lg-offset-2 col-lg-10">
												<button type="submit" class="btn btn-primary">Save</button>
												<button type="button" class="btn btn-danger">Cancel</button>
											</div>
										</div>
									{!! Form::close() !!}
								</div>
							</section>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
@stop