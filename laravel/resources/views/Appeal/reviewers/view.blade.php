@extends('layout')

@section('title')
	Appeal > View: {{ $appeal->id }}
@stop

@section('head')
	@include('Appeal.reviewers.scripts', compact('appeal'))
@stop

@section('breadcrumbs')
  <li>Appeal</li>
  <li class="active">View: {{ $appeal-> id }}</li>
@stop

@section('content')
					<ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#appeal-tab">Appeal</a></li>
                        <li><a data-toggle="tab" href="#message-tab">Message Center</a></li>
                        <li><a data-toggle="tab" href="#logs-tab">Audit Logs</a></li>
                        <li><a data-toggle="tab" href="#logs-tab"><i>Checkuser</i></a></li>
                        <li><a data-toggle="tab" href="#logs-tab"><i>Oversight</i></a></li>
                    </ul>
					<div class="tab-content">
						<div id="appeal-tab" class="tab-pane fade in active">
                        	@include('Appeal.reviewers.appeal', compact('appeal'));
                        </div>
                        <div id="message-tab" class="tab-pane fade">
                        	@include('Appeal.reviewers.messages', compact('appeal'));
                        </div>
                        <div id="logs-tab" class="tab-pane fade">
                        	@include('Appeal.reviewers.logs', compact('appeal'));
                        </div>
                        <div id="cu-tab" class="tab-pane fade">
                        	@include('Appeal.reviewers.checkuser', compact('appeal'));
                        </div>
                        <div id="os-tab" class="tab-pane fade">
                        	@include('Appeal.reviewers.oversight', compact('appeal'));
                        </div>
                        <div id="admin-tab" class="tab-pane fade">
                        	@include('Appeal.reviewers.admin', compact('appeal'));
                        </div>
                    </div>
@stop