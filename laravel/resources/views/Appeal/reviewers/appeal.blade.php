							<br>
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="dropdown pull-right">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Actions</b> <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Reserve</a></li>
                                                <li><a href="#">Release</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#" class="status-change" data-status="NEW">Status: New</a></li>
                                                <li><a href="#" class="status-change" data-status="ON_HOLD">Status: Hold</a></li>
                                                <li><a href="#" class="status-change" data-status="INVALID">Status: Invalid</a></li>
                                                <li><a href="#" class="status-change" data-status="CLOSED">Status: Close</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#" class="status-change" data-status="AWAITING_ADMIN">Notify: Blocking Admin</a></li>
                                                <li><a href="#" class="status-change" data-status="AWAITING_PROXY">Notify: Open Proxy</a></li>
                                                <li><a href="#" class="status-change" data-status="AWAITING_STAFF">Notify: Wikimedia Foundation</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#" class="status-change" data-status="AWAITING_CHECKUSER">Assign: Checkusers</a></li>
                                                <li><a href="#" class="status-change" data-status="AWAITING_REVIEWER">Assign: Reviewing Admin</a></li>
                                                <li><a href="#" class="status-change" data-status="AWAITING_USER">Assign: Awaiting User</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="#">Email User</a></li>
                                            </ul>
                                        </div>
                                        <h3 class="panel-title">
                                            Appeal Status: <span class="label label-success appeal-status">{{ $appeal->status }}</span>
                                        </h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="col-md-8">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Why do you believe you should be unblocked?</h3>
                                                </div>
                                                <div class="panel-body">
                                                   {{ $appeal->message }}
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">If you are unblocked, what articles do you intend to edit?</h3>
                                                </div>
                                                <div class="panel-body">
                                                   {{ $appeal->edits }}
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Why do you think there is a block currently affecting you?  If you believe it's in error, tell us how.</h3>
                                                </div>
                                                <div class="panel-body">
                                                   {{ $appeal->reason }}
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Is there anything else you would like us to consider when reviewing your block?</h3>
                                                </div>
                                                <div class="panel-body">
                                                   {{ $appeal->info }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                        	<div class="panel panel-default">
                                            	<div class="panel-body">
                                                    <span class="pull-left">
                                                        <font size="+1">{{ $appeal->wikiAccountName }}</font><br>
                                                        <font color="#999999">Edits: 20,123</font><br>
                                                        <font color="#999999">Registered: 2015-10-12</font>
                                                    </span>
                                                    <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                                                        <button type="button" class="btn btn-default">User Page</button>
                                                        <button type="button" class="btn btn-default">Talk Page</button>
                                                        <button type="button" class="btn btn-default">Contribs</button>
                                                        <button type="button" class="btn btn-default">Find Block</button>
                                                        <button type="button" class="btn btn-default">Edit Count</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Email</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <select class="form-control" onchange="if (this.selectedIndex != 0) { window.location='sendEmail.php?tid=' + this.value + '&amp;id=15839'}">
														<option value="-1">Please select</option>
														@foreach ($emailTemplates as $template)
														<option value="{{ $template->id }}">{{ $template->name }}</option>
														@endforeach
													</select>
                                                </div>
                                            </div>
                                            
                                        	<div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Blocking Info</h3>
                                                </div>
                                                <br>
												<center><span class="label label-danger text-center">Checkuser Block</span></center>
                                                <center><font color="#999999">2015-08-12</font></center>
                                            	<div class="panel-body">
                                                    <div class="well">@{{checkuser}} May be a sock of TParis</div>
                                                </div>
                                            </div>
                                            
                                        	<div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Blocking Admin</h3>
                                                </div>
                                            	<div class="panel-body">
                                                    <span class="pull-left">
                                                        <font size="+1">TParis</font><br>
                                                        <font color="#999999">Last Active: 2016-3-17</font>
                                                    </span>
                                                    <div class="btn-group-vertical pull-right" role="group" aria-label="...">
                                                        <button type="button" class="btn btn-default">User Page</button>
                                                        <button type="button" class="btn btn-default">Talk Page</button>
                                                        <button type="button" class="btn btn-default">Contribs</button>
                                                        <button type="button" class="btn btn-default">Email</button>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Ban Management</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="btn-group" role="group" aria-label="...">
                                                        <button type="button" class="btn btn-default">IP</button>
                                                        <button type="button" class="btn btn-default">Email</button>
                                                        <button type="button" class="btn btn-default">Username</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            				<div class="clearfix"><br></div>