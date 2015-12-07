@extends('layouts.master')

@section('title')
	{{ $page_title }}
@stop

@section('content')
	<div class="row jumbotron">

	</div>

	<div class="row">
		<div class="col-md-6 col-md-offset-3">

			@include('errors.list')

			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">

					{!! Form::open(['class' => 'form-horizontal']) !!}

						<div class="form-group">
							{!! Form::label('first_name', 'First Name', array('class' => 'col-sm-4 control-label')) !!}
							<div class="col-sm-8">
								{!! Form::text('first_name', null, array('class' => 'form-control')) !!}
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('last_name', 'Last Name', array('class' => 'col-sm-4 control-label')) !!}
							<div class="col-sm-8">
								{!! Form::text('last_name', null, array('class' => 'form-control')) !!}
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('username', 'Username', array('class' => 'col-sm-4 control-label')) !!}
							<div class="col-sm-8">
								{!! Form::text('username', null, array('class' => 'form-control')) !!}
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('email', 'Email', array('class' => 'col-sm-4 control-label')) !!}
							<div class="col-sm-8">
								{!! Form::email('email', null, array('class' => 'form-control')) !!}
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('password', 'Password', array('class' => 'col-sm-4 control-label')) !!}
							<div class="col-sm-8">
								{!! Form::password('password', array('class' => 'form-control')) !!}
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('password_confirmation', 'Confirm Password', array('class' => 'col-sm-4 control-label')) !!}
							<div class="col-sm-8">
								{!! Form::password('password_confirmation', array('class' => 'form-control')) !!}
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-4 col-sm-8">
								{!! Form::submit('Register', array('class' => 'btn btn-primary')) !!}
							</div>
						</div>

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@stop