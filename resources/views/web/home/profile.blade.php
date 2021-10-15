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
           <!--table-->
              <table class="table">
                  <thead>
                      <th>EName</th>
                      <th>EScore</th>
                      <th>ETime</th>
                  </thead>
                  <tbody>
                        @foreach($exams as $exam)
                        <tr>
                            <td>{{$exam->name()}}</td>
                            <td>{{$exam->pivot->score}}</td>
                            <td>{{$exam->pivot->time_min}}</td>
                        </tr>
                        @endforeach
                  </tbody>
              </table>
           <!--table-->
        </div>
        <!-- /row -->

    </div>
    <!-- /container -->

</div>
<!-- /Contact -->
@endsection
