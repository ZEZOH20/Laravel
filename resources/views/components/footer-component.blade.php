	<!-- Footer -->
    <footer id="footer" class="section">

        <!-- container -->
        <div class="container">

            <!-- row -->
            <div id="bottom-footer" class="row">

                <!-- social -->
                <div class="col-md-4 col-md-push-8">
                    <ul class="footer-social">
                        @if(isset($settings->facebook))
                        <li><a href="{{url("$settings->facebook")}}" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        @endif
                        @if(isset($settings->twitter))
                        <li><a href="{{url("$settings->twitter")}}" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        @endif
                        @if(isset($settings->google_plus))
                          <li><a href="{{url("$settings->google_plus")}}" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                        @endif
                        @if(isset($settings->instagram))
                          <li><a href="{{url("$settings->instagram")}}" class="instagram"><i class="fa fa-instagram"></i></a></li>
                        @endif
                        @if(isset($settings->linked_in))
                           <li><a href="{{url("$settings->linked_in")}}" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        @endif

                        @if(isset($settings->youtube))
                           <li><a href="{{url("$settings->youtube")}}" class="youtube"><i class="fa fa-youtube"></i></a></li>
                        @endif
                    </ul>
                </div>
                <!-- /social -->

                <!-- copyright -->
                <div class="col-md-8 col-md-pull-4">
                    <div class="footer-copyright">
                        <span>&copy; Copyright 2021. All Rights Reserved. | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">SkillsHub</a></span>
                    </div>
                </div>
                <!-- /copyright -->

            </div>
            <!-- row -->

        </div>
        <!-- /container -->

    </footer>
    <!-- /Footer -->
