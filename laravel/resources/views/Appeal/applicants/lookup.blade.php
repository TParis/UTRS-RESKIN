	<div class="panel panel-default page page-1">
		<div class="panel-body">
			<div class="col-sm-6 col-sm-offset-3">
				<label for="lookup">Please enter your English Wikipedia username or IP Address</label>
				<div class="form-group">
					<input type="text" class="form-control" id="lookup" name="lookup" required maxlength="250" placeholder="Username or IP Address...">
				</div>
			
				{{ csrf_field() }}
			</div>
				
			<div class="col-sm-12">
				
				<button class="btn btn-danger pull-left prev" data-page="0"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Prev Page</button><button class="btn btn-primary pull-right lookup" data-page="2">Continue <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></button>
			</div>
		</div>
	</div>