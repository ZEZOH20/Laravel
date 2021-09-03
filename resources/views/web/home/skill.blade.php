@extends('web.home.layout')

@section('title') Skills {{$skill->name()}} @endsection
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
                    <li><a href="category.html">{{$skill->cat->name()}}</a></li>
                    <li>{{$skill->name()}}</li>
                </ul>
                <h1 class="white-text">{{$skill->name()}}</h1>

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
            <div id="main" class="col-md-12">

                <!-- row -->
                <div class="row">

                 @foreach($exams as $exam)
                    <!-- single exam -->
                    <div class="col-md-3">
                        <div class="single-blog">
                            <div class="blog-img">
                                <a href="{{url("/exam/$exam->id")}}">
                                    <img src="{{url("web\img$exam->image")}}" alt="">
                                </a>
                            </div>
                            <h4><a href="{{url("/exam/$exam->id")}}">{{$exam->name()}}</a></h4>
                            <div class="blog-meta">
                                <span>18 Oct, 2017</span>
                                <div class="pull-right">
                                    <span class="blog-meta-comments"><a href="#"><i class="fa fa-users"></i> 35</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /single exam -->
                  @endforeach
                </div>
                <!-- /row -->

                <!-- row -->
                <div class="row">
                    {{$exams->links('web.home.inc.paginator')}}

                </div>
                <!-- /row -->
            </div>
            <!-- /main blog -->

        </div>
        <!-- row -->

    </div>
    <!-- container -->

</div>
<!-- /Blog -->

<div class="container">
<?php echo date("Y/m/d h:m",time()); ?>
</div>


@endsection


<!--
$d=mktime(11, 14, 54, 8, 12, 2014);
$t=time();
$nextWeek = time() + (7 * 24 * 60 * 60);
echo "Created date is " .date("Y-m-d h:i:sP",$t);-->
