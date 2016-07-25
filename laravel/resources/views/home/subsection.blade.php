<div class="col-md-4">
	<div class="panel panel-default">
		<div class="panel-header">
			<h3 class="panel-heading">{{ $title }}</h3>
		</div>
		<div class="panel-body">
			<ul class="list-group">
				@foreach ($data as $appeal)
				<li class="list-group-item" id="{{ $appeal->id }}">{{ $appeal->wikiAccountName }}<span class="pull-right">{{ $appeal->created_at }}</span></li>
				@endforeach
			</ul>
		</div>
	</div>
</div>