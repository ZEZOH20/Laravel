@extends('web.home.layout')
@section('title')
Login
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
                    <li>Sign In</li>
                </ul>
                <h1 class="white-text">Sign In to start exam</h1>

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
                    <h4>Sign In</h4>
                    @include('web.home.inc.messages')
                    <form method='POST' action='{{url('login')}}'>
                        @csrf
                        <input class="input" type="email" name="email" placeholder="Email">
                        <input class="input" type="password" name="password" placeholder="Password">
                        <input type="checkbox" name="remember"/>Remember me
                        <br>
                        <button type="submit" class="main-button icon-button pull-right">sign In</button>
                    </form>
                    <a href="{{url("forgot-password")}}" type="submit" class="main-button pull-right">forget Password</a>
                </div>
            </div>
            <!-- /login form -->

        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- /Contact -->
@endsection
