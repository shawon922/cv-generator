@extends((\Auth::user()) ? 'layouts.admin' : 'layouts.master')


@section('title')
	{{ $page_title }}
@stop

@section('content')
    
@stop