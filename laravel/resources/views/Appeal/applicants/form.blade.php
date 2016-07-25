	<div class="panel panel-default page page-4">
		<div class="panel-body">
			<form>
			<div class="form-group row">
				<label for="email" class="col-sm-3 form-control-label">Email Address?</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="email" name="email" placeholder="Email address..." required maxlength="250" value="">
				</div>
			</div>
			<div class="form-group row">
				<label for="hasAccount" class="col-sm-3 form-control-label">Do you have an account on Wikipedia? 	</label>
				<div class="col-sm-9">
					<label>
						<input type="radio" class="hasAccount-yes" name="hasAccount" id="hasAccount" value="1">
						Yes
					</label>
				</div>
				<div class="col-sm-9">
					<label>
						<input type="radio" class="hasAccount-no" name="hasAccount" id="hasAccount" value="0">
						No
					</label>
				</div>
			</div>
			<div class="alert alert-info col-sm-9 col-sm-offset-3 account account-no row" role="alert">We may be able to create an account for you which you can use to avoid problems like this in the future. If you would like for us to make an account for you, please enter the username you'd like to use here.</div>
			<div class="form-group row">
				<label for="wikiAccountName" class="col-sm-3 form-control-label">Account name?</label>
				<div class="col-sm-9">
					<input type="text" class="form-control" id="wikiAccountName" name="wikiAccountName" placeholder="Username..." required maxlength="255" value="">
				</div>
			</div>
			<div class="form-group row account account-yes">
				<label for="autoblock" class="col-sm-3 form-control-label">What has been blocked?</label>
				<div class="col-sm-9">
					<label>
						<input type="radio" name="autoblock" id="autoblock" value="0"> My Account
					</label>
				</div>
				<div class="col-sm-9 col-sm-offset-3">
					<label>
						<input type="radio" name="autoblock" id="autoblock" value="1"> My IP Address or range (Not my account)
					</label>
				</div>
			</div>
			<div class="form-group row">
				<label for="message" class="col-sm-3 form-control-label">Why do you believe you should be unblocked?</label>
				<div class="col-sm-9">
					<textarea class="form-control" id="message" name="message" placeholder="I would like to be unblocked..." required maxlength="4096"></textarea>
				</div>
			</div>
			<div class="form-group row">
				<label for="edits" class="col-sm-3 form-control-label">If you are unblocked, what articles do you intend to edit?</label>
				<div class="col-sm-9">
					<textarea class="form-control" id="edits" name="edits" placeholder="I intend to edit..." required maxlength="1024"></textarea>
				</div>
			</div>
			<div class="form-group row">
				<label for="reason" class="col-sm-3 form-control-label">Why do you think there is a block currently affecting you? If you believe it's in error, tell us how.</label>
				<div class="col-sm-9">
					<textarea class="form-control" id="reason" name="reason" placeholder="I believe I am blocked because..." required maxlength="1024"></textarea>
				</div>
			</div>
			<div class="form-group row">
				<label for="info" class="col-sm-3 form-control-label">Is there anything else you would like us to consider when reviewing your block?</label>
				<div class="col-sm-9">
					<textarea class="form-control" id="info" name="info" placeholder="Please consider..." maxlength="2048"></textarea>
				</div>
			</div>
			
			{{ csrf_field() }}
			
			<div class="col-sm-4 col-sm-offset-8"><p class="text-muted text-justify pull-right">If you still wish to submit your appeal, click the <strong>submit appeal</strong> button below.  There will be no further instructions and your information will
			be submitted to our database for processing.  By hitting submit, you <strong>accept</strong> the terms of use, privacy policy, and instructions given.</p></div>
			
			<div class="clearfix"></div>
			
			<div class="form-group">
				
				<button class="btn btn-danger pull-left prev"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Prev Page</button><button class="btn btn-primary pull-right next">Submit Appeal <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></button>
			</div>

			</form>
		</div>
	</div>