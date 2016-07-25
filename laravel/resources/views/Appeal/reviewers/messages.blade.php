            				<div class="clearfix"><br></div>
                        	<div class="col-md-10 col-md-offset-1" id="comments">
								@foreach( $appeal->comments as $comment)
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><a href="/users/{{ $comment->user->id }}">{{ $comment->user->name }}</a> @ {{ $comment->created_at }}</h3>
                                    </div>
                                    <div class="panel-body">
                                        {{ $comment->comment }}
                                    </div>
                                </div>
								@endforeach
                            </div>
							<form id="comments-form" class="col-md-10 col-md-offset-1">
								<div class="form-group">
									<h3>Add Comment</h3>
								</div>
								<div class="form-group">
									<textarea name="comment" class="form-control"></textarea>
								</div>
								<div class="form-group">
									<button id="submit-comment" class="btn btn-primary">Add Comment</button>
								</div>
								{{ csrf_field() }}
							</form>
            				<div class="clearfix"><br></div>