@extends('layout')

@section('title')
	Create Appeal
@stop

@section('head')
	@include('Appeal.applicants.scripts')
@stop

@section('breadcrumbs')
  <li class="active">Create Appeal</li>
@stop


@section('content')
	@include('Appeal.applicants.progressbar')
	@include('Appeal.applicants.instructions')
	@include('Appeal.applicants.lookup')
	@include('Appeal.applicants.gather')
	@include('Appeal.applicants.process')
	@include('Appeal.applicants.form')
	@include('Appeal.applicants.submit')
@stop