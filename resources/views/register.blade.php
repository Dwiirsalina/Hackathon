@extends('master')

@section('title')
Login
@endsection

@section('content')
<div class="banner-top">
	<div class="container">
		<h3 >Register</h3>
		<h4><a href="index.html">Home</a><label>/</label>Register</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!--login-->

	<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Register</h3>
					@if (sizeof($errors) > 0)
						<div class="alert alert-danger alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
							@foreach ($errors->all() as $error)
									<p>{!! $error !!}</p>
							@endforeach
						</div>
					@endif
					@if(Session::get('message'))
						<div class="alert alert-success alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
								{{Session::get('message')}}.
						</div>
					@endif
					<form action="" method="post">
						@csrf
						<div class="form-group">
							<label class="form-control-label" for="">Name</label>
							<div class="clearfix"></div>
							<div class="key">
								<i class="fa fa-user" aria-hidden="true"></i>
								<input  type="text" value="" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="form-group">
							<label class="form-control-label" for="">Address</label>
							<div class="clearfix"></div>
							<div class="key">
								<i class="fa fa-map"></i>
								<input  type="text" value="" name="address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="form-group">
							<label class="form-control-label" for="">Email</label>
							<div class="clearfix"></div>
							<div class="key">
								<i class="fa fa-at" aria-hidden="true"></i>
								<input  type="text" value="" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="form-group">
							<label class="form-control-label" for="">Password</label>
							<div class="clearfix"></div>
							<div class="key">
								<i class="fa fa-lock" aria-hidden="true"></i>
								<input  type="password" value="" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="form-group">
							<label class="form-control-label" for="">Confirmation Password</label>
							<div class="clearfix"></div>
							<div class="key">
								<i class="fa fa-lock" aria-hidden="true"></i>
								<input  type="password" value="" name="password_confirmation" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required="">
								<div class="clearfix"></div>
							</div>
						</div>
						<input type="submit" value="Register">
					</form>
				</div>
				
			</div>
		</div>
@endsection