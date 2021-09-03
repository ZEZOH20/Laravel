
<nav id="nav">
    <ul class="main-menu nav navbar-nav navbar-right">
        <li><a href="index.html">{{__('web.Home')}}</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{__('web.Category')}} <span class="caret"></span></a>
            <ul class="dropdown-menu">
             @foreach ($cats as $cat)
                <li><a href="{{url("/cat/{$cat->id}")}}">{{$cat->name()}}</a></li>
             @endforeach

            </ul>
        </li>
        <li><a href="{{url("/contact")}}">{{__('web.CONTACT')}}</a></li>
        <li><a href="login.html">{{__('web.SIGN IN')}}</a></li>
        <li><a href="register.html">{{__('web.SIGN UP')}}</a></li>
        <li><a href="{{url('lang/set/AR')}}">{{__('web.AR')}}</a></li>
        <li><a href="{{url('lang/set/EN')}}">{{__('web.EN')}}</a></li>
    </ul>
</nav>
