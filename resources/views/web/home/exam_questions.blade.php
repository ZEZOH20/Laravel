@extends('web.home.layout')

@section('title')
Exam_Questions
@endsection
@section('main')
		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/blog-post-background.jpg)"></div>
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
						<h1 class="white-text">{{$exam->name()}}</h1>
						<ul class="blog-post-meta">
							<li>18 Oct, 2017</li>
							<li class="blog-meta-comments"><a href="#"><i class="fa fa-users"></i> 35</a></li>
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
                             @foreach($exam->questions as $index=>$question )
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                      <h3 class="panel-title">{{$index+1}}- {{$question->question_title}}</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="radio">
                                            <label>
                                              <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                                              {{$question->option_1}}
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                              {{$question->option_2}}
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                              <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                                              {{$question->option_3}}
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                              <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                                              {{$question->option_4}}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </p>
						</div>
						<!-- /blog post -->

                        <div>
                            <button class="main-button icon-button pull-left">Submit</button>
                            <button class="main-button icon-button btn-danger pull-left ml-sm">Cancel</button>
                        </div>
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

