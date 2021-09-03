@extends('web.home.layout')

@section('title') {{__('web.CONTACT')}} @endsection
@section('main')
		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/page-background.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="index.html">{{__('web.Home')}}</a></li>
							<li>{{__('web.Contact')}}</li>
						</ul>
						<h1 class="white-text">{{__('web.Get In Touch')}}</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->

		<!-- Contact -->
		<div id="contact" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- contact form -->
					<div class="col-md-6">
						<div class="contact-form">
							<h4>{{__('web.Send Message')}}</h4>
							<form action='{{url('/contact')}}' method="POST">
                                @include('web.home.inc.messages')
                                @csrf
								<input class="input" type="text" name="name" placeholder="{{__('web.Name')}}">
								<input class="input" type="email" name="email" placeholder="{{__('web.Email')}}">
								<input class="input" type="text" name="subject" placeholder="{{__('web.Subject')}}">
								<textarea class="input" name="bodyMessage" placeholder="{{__('web.Enter Your Message')}}"></textarea>
								<button type='submit' class="main-button icon-button pull-right">{{__('web.Send Message')}}</button>
							</form>
						</div>
					</div>
					<!-- /contact form -->

					<!-- contact information -->
					<div class="col-md-5 col-md-offset-1">
						<h4>{{__('web.Information')}}  {{__('web.Contact') }}</h4>
						<ul class="contact-details">
							<li><i class="fa fa-envelope"></i>{{$settings->email}}</li>
							<li><i class="fa fa-phone"></i>{{$settings->phone}}</li>
						</ul>

					</div>
					<!-- contact information -->

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Contact -->
@endsection

