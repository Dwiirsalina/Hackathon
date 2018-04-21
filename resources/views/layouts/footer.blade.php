<div class="footer">
	<div class="container">
		<div class="col-md-4 footer-grid">
			<h3>Do It Yourself</h3>
			<p>Platform untuk belajar agar kamu bisa memasak, membuat kerajinan, rias atau yang lainnya</p>
		</div>
		<div class="col-md-4 footer-grid ">
			<h3>Menu</h3>
			<ul>
				<li><a href="{{ url('/') }}">Home</a></li>
				@if(Auth::user())
					<li class=""><a href="index.html"><span>My Channel</span></a></li>
				@endif
			</ul>
		</div>
		<div class="col-md-4 footer-grid">
			<h3>My Account</h3>
			<ul>
				@if(!Auth::user())
					<li><a href="{{ url('login') }}" ><i class="fa fa-user" aria-hidden="true"></i> Login</a></li>
					<li><a href="{{ url('register') }}" ><i class="fa fa-arrow-right" aria-hidden="true"></i> Register</a></li>
				@else
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="">
                        @csrf
						<button class="btn btn-link" style="color: white"><i class="fa fa-sign-out text-white" aria-hidden="true"></i>Logout</a></button>
                    </form>
				@endif
			</ul>
		</div>

		<div class="clearfix"></div>
				<br>
				<br>
					<div class="header-ri" align="center">
				<ul class="social-top">
					<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>
			</div>

		<div class="copy-right">
			<p> &copy; {{ date('Y') }} Do It Yourself | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>
		</div>
	</div>
</div>