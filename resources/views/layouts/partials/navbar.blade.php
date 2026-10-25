<div class="navbar-custom">
    <div class="container-fluid">
        <ul class="list-unstyled topnav-menu float-right mb-0">
            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light"
                   data-toggle="dropdown" href="#" role="button" aria-expanded="false">
                    <img src="{{ auth()->user()?->avatar ?: asset('assets/images/users/user-1.jpg') }}"
                         alt="{{ auth()->user()?->name ?? '使用者' }}" class="rounded-circle">
                    <span class="pro-user-name ml-1">{{ auth()->user()?->name ?? '訪客' }} <i class="mdi mdi-chevron-down"></i></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                    <a href="{{ route('logout') }}" class="dropdown-item notify-item"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fe-log-out"></i><span>登出</span>
                    </a>
                </div>
            </li>
        </ul>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
        <div class="logo-box">
            <a href="{{ route('users.index') }}" class="logo logo-dark text-center">
                <span class="logo-sm"><img src="{{ asset('assets/images/logo-sm.png') }}" alt="Logo" height="22"></span>
                <span class="logo-lg"><img src="{{ asset('assets/images/logo-dark.png') }}" alt="Logo" height="20"></span>
            </a>
            <a href="{{ route('users.index') }}" class="logo logo-light text-center">
                <span class="logo-sm"><img src="{{ asset('assets/images/logo-sm.png') }}" alt="Logo" height="22"></span>
                <span class="logo-lg"><img src="{{ asset('assets/images/logo-light.png') }}" alt="Logo" height="20"></span>
            </a>
        </div>
        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li><button type="button" class="button-menu-mobile waves-effect waves-light" aria-label="切換選單"><i class="fe-menu"></i></button></li>
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
