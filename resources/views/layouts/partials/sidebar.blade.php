<div class="left-side-menu">
    <div class="h-100" data-simplebar>
        <div class="user-box text-center">
            <img src="{{ auth()->user()?->avatar ?: asset('assets/images/users/user-1.jpg') }}"
                 alt="{{ auth()->user()?->name ?? '使用者' }}" class="rounded-circle avatar-md">
            <p class="text-dark font-weight-normal h5 mt-2 mb-1">{{ auth()->user()?->name ?? '訪客' }}</p>
            <p class="text-muted">管理後台</p>
        </div>
        <div id="sidebar-menu">
            <ul id="side-menu">
                <li class="menu-title">功能選單</li>
                <li><a href="{{ route('users.index') }}"><i class="fe-users"></i><span>使用者管理</span></a></li>
            </ul>
        </div>
    </div>
</div>
