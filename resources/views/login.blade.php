@extends('layouts.master')
@section('title') Login - @endsection
@section('content')

<div class="section-lg">
	<div class="container">
		@if($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		<div class="row">
			<div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 col-xl-6 offset-xl-3">
				<div class="d-flex flex-direction-row justify-content-between">
					<h3 class="font-weight-bold text-left">Login</h3><img data-src="{{ asset('/images/Logos/Logo-Login.png') }}" alt="" class="lazyload">
				</div>
				<hr>
				<!-- Snippet -->
				<form action="/login" method="POST">
					@csrf
					<label class="required">Email address</label>
					<input class="border-radius-4px" type="email" name="email" placeholder="Enter your email" required>
					<label class="required">Password</label>
					<input class="border-radius-4px" type="password" name="password" placeholder="Enter your password" required>
					<button type="submit" class="button button-md button-outline-yellow w-25 border-radius-2px">LOG IN</button>
				</form>
				<!-- end Snippet -->

			</div>
		</div><!-- end row -->
	</div><!-- end container -->
</div>

@endsection