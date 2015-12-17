<section class="panel">                                          
	<div class="panel-body bio-graph-info">
		<h1> Profile Info</h1>
		{{--!! Form::open(array('url' => URL::to('/editProfile'), 'method' => 'put', 'files'=> true, 'class' => 'form-horizontal', 'role' => 'form')) !!--}}

		{!! Form::model($profile, ['method' => 'patch', 'url' => URL::to('/profile'), 'class' => 'form-horizontal', 'files' => true]) !!}
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
				{!! Form::label('mobile', 'Mobile No.', array('class' => 'col-lg-2 control-label')) !!}
				<div class="col-lg-6">
					{!! Form::input('date', 'mobile', null, array('class' => 'form-control')) !!}
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('phone', 'Telephone No.', array('class' => 'col-lg-2 control-label')) !!}
				<div class="col-lg-6">
					{!! Form::input('date', 'phone', null, array('class' => 'form-control')) !!}
				</div>
			</div>

			<div class="form-group">
				{!! Form::label('skype', 'Skype Id', array('class' => 'col-lg-2 control-label')) !!}
				<div class="col-lg-6">
					{!! Form::input('date', 'skype', null, array('class' => 'form-control')) !!}
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