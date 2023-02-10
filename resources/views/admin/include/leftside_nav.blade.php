<nav class="pcoded-navbar  ">
    <div class="navbar-wrapper  ">
        <div class="navbar-content scroll-div " >

            <div class="">
                <div class="main-menu-header">
                    <img class="img-radius" src="{{asset('adminAssets')}}/assets/images/user/avatar-2.jpg" alt="User-Profile-Image">
{{--                    <img class="img-radius" src="{{$admins->image}}" alt="User-Profile-Image">--}}
                    <div class="user-details">
                        <span>{{\Auth::user()->name}}</span>
                        <div id="more-details">{{\Auth::user()->email}}<i class="fa fa-chevron-down m-l-5"></i></div>
                    </div>
                </div>
                <div class="collapse" id="nav-user-link">
                    <ul class="list-unstyled">
                        <li class="list-group-item"><a href="user-profile.html"><i class="feather icon-user m-r-5"></i>View Profile</a></li>
                        <li class="list-group-item"><a href="#!"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
                        <a href="" onclick="event.preventDefault(); document.getElementById('logoutid').submit(); " class="dud-logout" title="Logout">
                            <li class="list-group-item"><i class="feather icon-log-out m-r-5"></i>Logout</li>
                        </a>
                    </ul>
                    <form action="{{route('logout')}}"  method="post" id="logoutid">@csrf
                    </form>
                </div>
            </div>

            <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>
                <li class="nav-item">
                    <a href="{{route('pro.home')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Frontend view</span></a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>All Table</label>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="{{route('admin.manage')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">User Table</span></a>
{{--                    <ul class="pcoded-submenu">--}}
{{--                        <li><a href="{{route('admin.manage')}}">Manage</a></li>--}}
{{--                    </ul>--}}
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="{{route('slider.home')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Slider Table</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="{{route('about.me')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">About Table</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="{{route('resume.home')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Resume Table</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="{{route('service.home')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Service Table</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="{{route('skill.home')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Skill Table</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="{{route('project.home')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">project Table</span></a>
                </li>
                <li class="nav-item pcoded-hasmenu">
                    <a href="{{route('blog.home')}}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Blog Table</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</nav>
