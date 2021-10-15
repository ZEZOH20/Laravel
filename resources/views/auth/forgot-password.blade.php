@extends('web.home.layout')
@section('title')
Reset Password
@endsection
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
                    <li><a href="index.html">Home</a></li>
                    <li>Sign Up</li>
                </ul>
                <h1 class="white-text">Sign Up and estimate your skills</h1>

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

            <!-- login form -->
            <div class="col-md-6 col-md-offset-3">
                <div class="contact-form">
                    <h4>Reset Paasword</h4>
                    <form method="POST" action="{{url('/forgot-password')}}">
                        @csrf
                        <input class="input" type="email" name="email" placeholder="Email">
                        <button type="submit" class="main-button icon-button pull-right">reset</button>
                    </form>
                </div>
            </div>

          <!--Messages-->
                @if (session('status'))
                    <div class="alert alert-yellow">
                    {{ session('status') }}
                    </div>
                @endif
           <!--Messages-->
            <!-- /login form -->

        </div>
        <!-- /row -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </div>
    <!-- /container -->
@endsection
