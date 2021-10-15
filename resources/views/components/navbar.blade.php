
<nav id="nav">
    <!-- logOut-->
    <form  id="logout_form" method='POST' action="{{url('logout')}}" style="display:none" >
        @csrf
    </form>
   <!-- logOut-->
    <ul class="main-menu nav navbar-nav navbar-right">
        <li><a href="{{url('/')}}">{{__('web.Home')}}</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{__('web.Category')}} <span class="caret"></span></a>
            <ul class="dropdown-menu">
             @foreach ($cats as $cat)
                <li><a href="{{url("/cat/{$cat->id}")}}">{{$cat->name()}}</a></li>
             @endforeach

            </ul>
        </li>
        <li><a href="{{url("/contact")}}">{{__('web.CONTACT')}}</a></li>
        @auth
            @if(Auth::user()->role->name=="user")
                <li><a href="{{url("/profile")}}">{{__('web.profile')}}</a></li>
            @else
               <li><a href="{{url("/dashboard")}}">{{__('web.dashboard')}}</a></li>
            @endif
        @endauth
        @guest
            <li><a href="/login">{{__('web.SIGN IN')}}</a></li>
            <li><a href="/register">{{__('web.SIGN UP')}}</a></li>
        @endguest
        <!-- logOut-->
        @auth
            <li><a id='logout_button' href='#'>logOut</a></li>
        @endauth
        <!-- logOut-->
        <li><a href="{{url('lang/set/AR')}}">{{__('web.AR')}}</a></li> 
        <li><a href="{{url('lang/set/EN')}}">{{__('web.EN')}}</a></li>
    </ul>
</nav>
