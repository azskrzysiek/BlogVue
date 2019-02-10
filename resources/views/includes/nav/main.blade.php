<nav class="navbar has-shadow">
        <div class="container">
            <div class="navbar-brand">
            <a class="navbar-item" href="{{route('home')}}">
                <img src="{{asset('images/logo-dev.png')}}" alt="Blog">
            </a>
            <a href="" class="navbar-item is-tab is-hidden-mobile m-l-10">Learn</a>
            <a href="" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
            <a href="" class="navbar-item is-tab is-hidden-mobile">Share</a> 
            </div>
            <div class="navbar-end" style="overflow: visible;">
                @if(Auth::guest())
                    <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
                    <a href="{{route('register')}}" class="navbar-item is-tab">Join Our Community</a>
                @else
                    <button class="dropdown is-aligned-right navbar-item is-tab">
                    {{Auth::user()->name}} <span class="icon"><i class="fa fa-caret-down"></i></span>
                        <ul class="dropdown-menu">
                            <li><a href=""><span claass="icon"><i class="fa fa-fw m-r-10 fa-user-circle-o"></i></span>Profile</a></li>
                            <li><a href=""><span claass="icon"><i class="fa fa-fw m-r-10 fa-bell"></i></span>Norification</a></li>
                            <li><a href="{{route('manage.dashboard')}}"><span claass="icon"><i class="fa fa-fw m-r-10 fa-cog"></i></span>Manage</a></li>
                            <li class="seperator"></li>
                            <li><a href="{{route('logout')}}"><span claass="icon"><i class="fa fa-fw m-r-10 fa-sign-out"></i></span>Logout</a></li>
                        </ul>
                    </button>
                @endif
            </div>
        </div>
    </nav>