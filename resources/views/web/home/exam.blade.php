@extends("web.home.layout")
@section('title')
exams
@endsection
@section('main')

		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url({{asset('web/img/page-background.jpg')}})"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="index.html">Home</a></li>
							<li><a href="category.html">{{$exam->skill->cat->name()}}</a></li>
							<li><a href="category.html">{{$exam->skill->name()}}</a></li>
							<li>{{$exam->name()}}</li>
						</ul>
						<h1 class="white-text">{{$exam->name()}} Exam</h1>
						<ul class="blog-post-meta">
							<li>{{$exam->date()}}</li>
							<li class="blog-meta-comments"><a href="#"><i class="fa fa-users"></i> {{$exam->users->count()}}</a></li>
						</ul>
					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->

		<!-- Blog -->
		<div id="blog" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- main blog -->
					<div id="main" class="col-md-9">

						<!-- blog post -->
						<div class="blog-post mb-5">
							<p>
                               {{$exam->desc()}}
                            </p>
						</div>
                        @include('web.home.inc.messages');
						<!-- /blog post -->
                     @if($canViewStartBtn!=false)
                        <form method='POST' action="{{url("/exam/start/$exam->id")}}" >
                            @csrf
                            <button type='submit'class="main-button icon-button pull-left">Start Exam</button>
                        </form>
                      @endif
					</div>
					<!-- /main blog -->

					<!-- aside blog -->
					<div id="aside" class="col-md-3">

						<!-- exam details widget -->
                        <ul class="list-group">
                            <li class="list-group-item">Skill: {{$exam->skill->cat->name()}}</li>
                            <li class="list-group-item">Questions: {{$exam->Question_no}}</li>
                            <li class="list-group-item">Duration: {{date("h:m",($exam->duration_min))}}</li>
                            <li class="list-group-item">Difficulty:
                               @php
                                for($i=0;$i<$exam->difficulty;$i++){
                                     echo "<i class='fa fa-star'></i>";
                                }
                                for($i=0;$i<(5-$exam->difficulty);$i++){
                                    echo "<i class='fa fa-star-o'></i>";
                                }
                                @endphp

                        </ul>
						<!-- /exam details widget -->



					</div>
					<!-- /aside blog -->

				</div>
				<!-- row -->

			</div>
			<!-- container -->

		</div>
		<!-- /Blog -->
@endsection
