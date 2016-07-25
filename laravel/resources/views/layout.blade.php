<!DOCTYPE html>
<html>
	<head>
		<title>UTRS > @yield('title')</title>
		<link rel="stylesheet" type="text/css" href="/css/bootstrap-theme.min.css"/>
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
		<script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script type="text/javascript">
		
			$(window).scroll(function() {
				if ($(document).scrollTop() > 50) {
					$('nav').addClass('shrink').addClass('navbar-fixed-top').removeClass('navbar-center');
				} else {
					$('nav').removeClass('shrink').removeClass('navbar-fixed-top').addClass('navbar-center');
				}
			});
			$(document).ready(function() {
				$(".list-group-item").click(function() {
					window.location = "appeal.html?id=" + $(this).attr("id");
				});
			});
						
		</script>
		@yield('head')
	</head>
    <body>
    	<header>
        	<div class="container">
	        	<h1>Unblock Ticket Request System</h1>
            </div>
        </header>
        <nav class="navbar navbar-default navbar-center" role="navigation" style="">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">UTRS</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					@unless (Auth::guest())
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/home">Home <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Statistics</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Team</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administration <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Ban Management</a></li>
                                <li><a href="#">Hook Management</a></li>
                                <li><a href="#">Mass Emails</a></li>
                                <li><a href="#">Site Notice Management</a></li>
                                <li><a href="#">One more separated link</a></li>
                                <li><a href="#">Template Management</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
					@else
                    <ul class="nav navbar-nav">
                        <li><a href="#">Guide to Appealing Blocks</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">User list</a></li>
                        <li><a href="#">Team</a></li>
					</ul>
					@endif
                    <ul class="nav navbar-nav navbar-right">
						@if (Auth::guest())
							<li><p class="navbar-text"><strong>Wikipedia Admins:</strong></p></li>
							<li><a href="{{ url('/login') }}">Login</a></li>
							<li><a href="{{ url('/register') }}">Register</a></li>
						@else
							<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Signed in as <b>{{ Auth::user()->name }}</b> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Preferences</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Wikipedia User page</a></li>
                                <li><a href="#">Wikipedia User talk page</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ url('/logout') }}">Logout</a></li>
                            </ul>
						@endif
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
            </nav>
            <div class="clearfix"><br></div>
            <article>
            	<div class="container">
					<ol class="breadcrumb">
					@if (Auth::guest())
					<li><a href="/">Home</a></li>
					@else
					<li><a href="/home">Home</a></li>
					@endif
					
					@yield('breadcrumbs')
					
					</ol>
					@yield('content')
				</div>
			</article>
            <footer>
            	<div class="container">
					<hr>
					@include('usersonline')
					@include('footer')
                </div>
            </footer>
    </body>
</html>