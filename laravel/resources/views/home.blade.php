@extends('layout')

@section('title')
	Home
@stop

@section('head')
	<script type="text/javascript">
		$(document).ready(function() {
			$(".list-group-item").click(function() {
				window.location = "appeal/" + $(this).attr("id");
			});
		});
	</script>
@stop

@section('breadcrumbs')
@stop

@section('content')
<div class="container">
    <div class="col-md-12 row">
		@include('home.subsection', ['title' => 'New Appeals',			'data' => $appeals->where('status', 'NEW')])
		@include('home.subsection', ['title' => 'Backlog',				'data' => $appeals->where('status', 'STATUS_NEW')])
		@include('home.subsection', ['title' => 'Recent Closures',		'data' => $appeals->where('status', 'STATUS_NEW')])
		@include('home.subsection', ['title' => 'My Queue',				'data' => $appeals->where('status', 'STATUS_NEW')])
		@include('home.subsection', ['title' => 'Awaiting My Response', 'data' => $appeals->where('status', 'STATUS_NEW')])
		@include('home.subsection', ['title' => 'On Hold',				'data' => $appeals->where('status', 'ON_HOLD')])
		@include('home.subsection', ['title' => 'Awaiting WP:OPP',		'data' => $appeals->where('status', 'AWAITING_PROXY')])
		@include('home.subsection', ['title' => 'Awaiting Checkuser',	'data' => $appeals->where('status', 'AWAITING_CHECKUSER')])
		@include('home.subsection', ['title' => 'Awaiting Tool Admin',	'data' => $appeals->where('status', 'AWAITING_TOOL_ADMIN')])
    </div>
</div>
@stop
