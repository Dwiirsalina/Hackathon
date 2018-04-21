<div class="header">

		<div class="container">
			
			<div class="logo">
				<h1 ><a href="{{ url('/') }}">Do It Yourself</span></a></h1>
			</div>
			<div class="head-t">
				<ul class="card">
					@if(!Auth::user())
					<li><a href="{{ url('login') }}" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
					<li><a href="{{ url('register') }}" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
					@else
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="">
                        @csrf
						<button class="btn btn-link"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></button>
                    </form>
					@endif
				</ul>	
			</div>

				<div class="nav-top">
					<nav class="navbar navbar-default">
					
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						

					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav ">
							<li class="active"><a href="{{ url('/') }}" class="hyper "><span>Home</span></a></li>
							@if(Auth::user())
							<li class=""><a href="index.html" class="hyper"><span>My Channel</span></a></li>
							@endif
						</ul>
					</div>
					</nav>
					<div class="clearfix"></div>
				</div>
					
				</div>			
</div>