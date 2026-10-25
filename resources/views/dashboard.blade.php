<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>使用者&Members Listing|UBold-Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <link href="assets/css/bootstrap-modern.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="assets/css/app-modern.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />
    <link href="assets/css/bootstrap-modern-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
    <link href="assets/css/app-modern-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- Sweet Alert css -->
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="loading" data-layout-mode="detached" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": true}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>
    <div id="wrapper">
        <div class="navbar-custom">
            <div class="container-fluid">
                <ul class="list-unstyled topnav-menu float-right mb-0">
                    <li class="d-none d-lg-block">
                        <form class="app-search">
                            <div class="app-search-box dropdown">
                                <div class="input-group"><input type="search" class="form-control" placeholder="Search..." id="top-search">
                                    <div class="input-group-append"><button class="btn" type="submit"><i class="fe-search"></i></button></div>
                                </div>
                                <div class="dropdown-menu dropdown-lg" id="search-dropdown">
                                    <div class="dropdown-header noti-title">
                                        <h5 class="text-overflow mb-2">Found 22 results</h5>
                                    </div><a href="javascript:void(0);" class="dropdown-item notify-item"><i class="fe-home mr-1"></i><span>Analytics Report</span></a><a href="javascript:void(0);" class="dropdown-item notify-item"><i class="fe-aperture mr-1"></i><span>How can I help you?</span></a><a href="javascript:void(0);" class="dropdown-item notify-item"><i class="fe-settings mr-1"></i><span>User profile settings</span></a>
                                    <div class="dropdown-header noti-title">
                                        <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                                    </div>
                                    <div class="notification-list"><a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="media"><img class="d-flex mr-2 rounded-circle" src="assets/images/users/user-2.jpg" alt="Generic placeholder image" height="32">
                                                <div class="media-body">
                                                    <h5 class="m-0 font-14">Erwin E.Brown</h5><span class="font-12 mb-0">UI Designer</span>
                                                </div>
                                            </div>
                                        </a><a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="media"><img class="d-flex mr-2 rounded-circle" src="assets/images/users/user-5.jpg" alt="Generic placeholder image" height="32">
                                                <div class="media-body">
                                                    <h5 class="m-0 font-14">Jacob Deo</h5><span class="font-12 mb-0">Developer</span>
                                                </div>
                                            </div>
                                        </a></div>
                                </div>
                            </div>
                        </form>
                    </li>
                    <li class="dropdown d-inline-block d-lg-none"><a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i class="fe-search noti-icon"></i></a>
                        <div class="dropdown-menu dropdown-lg dropdown-menu-right p-0">
                            <form class="p-3"><input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username"></form>
                        </div>
                    </li>
                    <li class="dropdown d-none d-lg-inline-block"><a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="#"><i class="fe-maximize noti-icon"></i></a></li>
                    <li class="dropdown notification-list topbar-dropdown"><a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i class="fe-bell noti-icon"></i><span class="badge badge-danger rounded-circle noti-icon-badge">9</span></a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">
                            <div class="dropdown-item noti-title">
                                <h5 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a></span>Notification</h5>
                            </div>
                            <div class="noti-scroll" data-simplebar><a href="javascript:void(0);" class="dropdown-item notify-item active">
                                    <div class="notify-icon"><img src="assets/images/users/user-1.jpg" class="img-fluid rounded-circle" alt="" /></div>
                                    <p class="notify-details">Cristina Pride</p>
                                    <p class="text-muted mb-0 user-msg"><small>Hi,How are you?What about our next meeting</small></p>
                                </a><a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-primary"><i class="mdi mdi-comment-account-outline"></i></div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">1 min ago</small></p>
                                </a><a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon"><img src="assets/images/users/user-4.jpg" class="img-fluid rounded-circle" alt="" /></div>
                                    <p class="notify-details">Karen Robinson</p>
                                    <p class="text-muted mb-0 user-msg"><small>Wow!this admin looks good and awesome design</small></p>
                                </a><a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-warning"><i class="mdi mdi-account-plus"></i></div>
                                    <p class="notify-details">New user registered.<small class="text-muted">5 hours ago</small></p>
                                </a><a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="mdi mdi-comment-account-outline"></i></div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin<small class="text-muted">4 days ago</small></p>
                                </a><a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-secondary"><i class="mdi mdi-heart"></i></div>
                                    <p class="notify-details">Carlos Crouch liked<b>Admin</b><small class="text-muted">13 days ago</small></p>
                                </a></div><a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">View all<i class="fe-arrow-right"></i></a>
                        </div>
                    </li>
                    <li class="dropdown notification-list topbar-dropdown"><a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><img src="{{ auth()->user()->avatar }}" alt="{{ auth()->user()->name }}" class="rounded-circle"><span class="pro-user-name ml-1">{{ auth()->user()->name }}<i class="mdi mdi-chevron-down"></i></span></a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome!</h6>
                            </div><a href="javascript:void(0);" class="dropdown-item notify-item"><i class="fe-user"></i><span>My Account</span></a><a href="javascript:void(0);" class="dropdown-item notify-item"><i class="fe-settings"></i><span>Settings</span></a><a href="javascript:void(0);" class="dropdown-item notify-item"><i class="fe-lock"></i><span>Lock Screen</span></a>
                            <div class="dropdown-divider"></div><a href="javascript:void(0);" class="dropdown-item notify-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fe-log-out"></i><span>Logout</span></a>
                        </div>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
                <div class="logo-box"><a href="index.html" class="logo logo-dark text-center"><span class="logo-sm"><img src="assets/images/logo-sm.png" alt="" height="22"></span><span class="logo-lg"><img src="assets/images/logo-dark.png" alt="" height="20"></span></a><a href="index.html" class="logo logo-light text-center"><span class="logo-sm"><img src="assets/images/logo-sm.png" alt="" height="22"></span><span class="logo-lg"><img src="assets/images/logo-light.png" alt="" height="20"></span></a></div>
                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li><button class="button-menu-mobile waves-effect waves-light"><i class="fe-menu"></i></button></li>
                    <li><a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
                            <div class="lines"><span></span><span></span><span></span></div>
                        </a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="left-side-menu">
            <div class="h-100" data-simplebar>
                <div class="user-box text-center"><img src="{{ auth()->user()->avatar }}" alt="{{ auth()->user()->name }}" class="rounded-circle avatar-md">
                    <div class="dropdown"><a href="javascript: void(0);" class="text-dark font-weight-normal dropdown-toggle h5 mt-2 mb-1 d-block" data-toggle="dropdown">{{ auth()->user()->name }}</a>
                        <div class="dropdown-menu user-pro-dropdown"><a href="javascript:void(0);" class="dropdown-item notify-item"><i class="fe-user mr-1"></i><span>My Account</span></a><a href="javascript:void(0);" class="dropdown-item notify-item"><i class="fe-settings mr-1"></i><span>Settings</span></a><a href="javascript:void(0);" class="dropdown-item notify-item"><i class="fe-lock mr-1"></i><span>Lock Screen</span></a><a href="javascript:void(0);" class="dropdown-item notify-item"><i class="fe-log-out mr-1"></i><span>Logout</span></a></div>
                    </div>
                    <p class="text-muted">Admin Head</p>
                </div>
                <div id="sidebar-menu">
                    <ul id="side-menu">
                        <li class="menu-title">Navigation</li>
                        <li><a href="#sidebarDashboards" data-toggle="collapse"><i data-feather="airplay"></i><span class="badge badge-success badge-pill float-right">4</span><span>Dashboards</span></a>
                            <div class="collapse" id="sidebarDashboards">
                                <ul class="nav-second-level">
                                    <li><a href="index.html">Dashboard 1</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                                        <li class="breadcrumb-item active">使用者</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">使用者</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card-box">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <form class="form-inline">
                                            <div class="form-group"><label for="inputPassword2" class="sr-only">Search</label><input type="search" class="form-control" id="inputPassword2" placeholder="Search..."></div>
                                            <div class="form-group mx-sm-3"><label for="status-select" class="mr-2">Sort By</label><select class="custom-select" id="status-select">
                                                    <option selected="">All</option>
                                                    <option value="1">姓名</option>
                                                    <option value="2">貼文</option>
                                                    <option value="3">追隨者</option>
                                                    <option value="4">追蹤者</option>
                                                </select></div>
                                        </form>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="text-lg-right mt-3 mt-lg-0"><button type="button" class="btn btn-success waves-effect waves-light mr-1"><i class="mdi mdi-cog"></i></button><button type="button" class="btn btn-secondary waves-effect waves-light" data-toggle="modal" data-target="#custom-modal"><i class="mdi mdi-plus-circle mr-1"></i>新增使用者</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($users as $user)
                        <div class="col-lg-4">
                            <div class="text-center card-box">
                                <div class="pt-2 pb-2"><img src="{{ asset('assets/images/users/user-' . $user->id . '.jpg') }}"
                                        class="rounded-circle img-thumbnail avatar-xl"
                                        alt="profile-image"
                                        onerror="this.onerror=null; this.src='{{ asset('assets/images/users/user-1.jpg') }}';">
                                    <h4 class="mt-3"><a href="extras-profile.html" class="text-dark">{{ $user->name }}</a></h4>
                                    <p class="text-muted">@Founder<span>|</span><span><a href="#" class="text-pink">{{ $user->email }}</a></span></p>
                                    <button type="button"
                                        class="btn btn-warning btn-sm waves-effect waves-light edit-user-btn"
                                        data-toggle="modal"
                                        data-target="#edit-modal"
                                        data-id="{{ $user->id }}"
                                        data-name="{{ $user->name }}"
                                        data-email="{{ $user->email }}">
                                        編輯
                                    </button>
                                    <form id="delete-form-{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <!-- 綁定點擊事件，傳入使用者 ID -->
                                        <button type="button" class="btn btn-danger btn-sm waves-effect waves-light" onclick="confirmDelete({{ $user->id }})">刪除</button>
                                    </form>
                                    <div class="row mt-4">
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>{{ $user->post }}</h4>
                                                <p class="mb-0 text-muted text-truncate">貼文數</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>{{ $user->followers }}</h4>
                                                <p class="mb-0 text-muted text-truncate">追隨者</p>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="mt-3">
                                                <h4>{{ $user->followings }}</h4>
                                                <p class="mb-0 text-muted text-truncate">追蹤者</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="text-right">
                                <ul class="pagination pagination-rounded justify-content-end">
                                    {{ $users->links() }}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">2015-<script>
                                document.write(new Date().getFullYear())
                            </script>&copy;UBold theme by<a href="">Coderthemes</a></div>
                        <div class="col-md-6">
                            <div class="text-md-right footer-links d-none d-sm-block"><a href="javascript:void(0);">About Us</a><a href="javascript:void(0);">Help</a><a href="javascript:void(0);">Contact Us</a></div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <div id="custom-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h4 class="modal-title" id="myCenterModalLabel">新增使用者</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body p-4">
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="name">姓名</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="請輸入姓名" required>
                            @error('name')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">電子郵件</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="請輸入電子郵件" required>
                            @error('email')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">密碼</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="請輸入密碼" required>
                            @error('password')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-success waves-effect waves-light">儲存</button>
                            <button type="button" class="btn btn-light waves-effect ml-1" data-dismiss="modal">取消</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- ================= 編輯使用者的 Modal 彈窗 ================= -->
    <div id="edit-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h4 class="modal-title">編輯使用者</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body p-4">
                    <!-- 注意：action 網址與 @method('PUT') 會由 JS 自動處理 -->
                    <form id="edit-user-form" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="edit-name">姓名</label>
                            <input type="text" class="form-control" id="edit-name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="edit-email">電子郵件</label>
                            <input type="email" class="form-control" id="edit-email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="edit-password">密碼 (留空表示不修改密碼)</label>
                            <input type="password" class="form-control" id="edit-password" name="password" placeholder="Leave empty to keep current password">
                        </div>

                        <div class="form-group">
                            <label for="edit-post">貼文數量</label>
                            <input type="post" class="form-control" id="edit-post" name="post">
                        </div>

                        <div class="form-group">
                            <label for="edit-followers">追隨者</label>
                            <input type="followers" class="form-control" id="edit-followers" name="followers">
                        </div>

                        <div class="form-group">
                            <label for="edit-followings">追蹤者</label>
                            <input type="followings" class="form-control" id="edit-followings" name="followings">
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-success waves-effect waves-light">更新</button>
                            <button type="button" class="btn btn-light waves-effect ml-1" data-dismiss="modal">取消</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="rightbar-overlay"></div>
    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <!-- Sweet Alert js -->
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
    @if ($errors->any())
    <script>
        $(document).ready(function() {
            $('#custom-modal').modal('show');
        });
    </script>
    @endif
    @if (session('success'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            Swal.fire({
                title: '成功！',
                text: "{{ session('success') }}",
                type: 'success', // 如果是舊版 sweetalert 可能是 type，新版是 icon: 'success'
                icon: 'success',
                confirmButtonColor: '#4154f1',
                confirmButtonText: '確定'
            });
        });
    </script>
    @endif
    @if (session('error'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            Swal.fire({
                title: '失敗！',
                text: "{{ session('error') }}",
                type: 'error', // 如果是舊版 sweetalert 可能是 type，新版是 icon: 'success'
                icon: 'error',
                confirmButtonColor: '#4154f1',
                confirmButtonText: '確定'
            });
        });
    </script>
    @endif
    <script>
        $(document).ready(function() {
            // 當點擊 Edit 按鈕時觸發
            $('.edit-user-btn').on('click', function() {
                var userId = $(this).data('id');
                var userName = $(this).data('name');
                var userEmail = $(this).data('email');
                var userPost = $(this).data('post');
                var userFollowers = $(this).data('followers');
                var userFollowings = $(this).data('followings');

                // 1. 動態設置表單的 action URL
                var updateUrl = "{{ url('users') }}/" + userId;
                $('#edit-user-form').attr('action', updateUrl);

                // 2. 將原本的 name 與 email 寫入 Modal 輸入框內
                $('#edit-name').val(userName);
                $('#edit-email').val(userEmail);
                $('#edit-password').val(''); // 清空密碼欄位
                $('#edit-post').val(userPost);
                $('#edit-followers').val(userFollowers);
                $('#edit-followings').val(userFollowings);
            });
        });
    </script>
    <script>
    function confirmDelete(userId) {
        Swal.fire({
            title: '確定要刪除嗎？',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: '確定',
            cancelButtonText: '取消'
        }).then((result) => {
            if (result.isConfirmed || result.value === true) {
                document.getElementById('delete-form-' + userId).submit();
            }
        });
    }
</script>
</body>

</html>