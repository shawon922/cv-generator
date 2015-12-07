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
				<div class="panel-heading">Sign In</div>
				<div class="panel-body">

					{!! Form::open(['class' => 'form-horizontal']) !!}

						<div class="form-group">
							{!! Form::label('username', 'Username', array('class' => 'col-sm-4 control-label')) !!}
							<div class="col-sm-8">
								{!! Form::text('username', null, array('class' => 'form-control')) !!}
							</div>
						</div>

						<div class="form-group">
							{!! Form::label('password', 'Password', array('class' => 'col-sm-4 control-label')) !!}
							<div class="col-sm-8">
								{!! Form::password('password', array('class' => 'form-control')) !!}
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-4 col-sm-8">
								{!! Form::submit('Sign In', array('class' => 'btn btn-primary')) !!}
							</div>
						</div>

					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@stop