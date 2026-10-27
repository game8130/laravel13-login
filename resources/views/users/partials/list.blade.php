<div class="card-box mb-3">
    <div class="row align-items-center">
        <div class="col-lg-8">
            <form class="form-inline" method="GET" action="{{ route('users.index') }}">
                <div class="form-group">
                    <label for="search" class="sr-only">搜尋使用者</label>
                    <input type="search" class="form-control" id="search" name="search"
                           value="{{ request('search') }}" placeholder="搜尋姓名或電子郵件">
                </div>
                <button type="submit" class="btn btn-primary ml-2">搜尋</button>
            </form>
        </div>
        <div class="col-lg-4 text-lg-right mt-3 mt-lg-0">
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#create-user-modal">
                <i class="mdi mdi-plus-circle mr-1"></i>新增使用者
            </button>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-xl-3">
        <div class="card-box bg-pattern">
            <div class="row">
                <div class="col-6">
                    <div class="avatar-md bg-blue rounded">
                        <i class="fe-users avatar-title font-22 text-white"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <h3 class="text-dark my-1"><span data-plugin="counterup">{{ $users_total }}</span></h3>
                        <p class="text-muted mb-0 text-truncate">總使用者</p>
                    </div>
                </div>
            </div>
        </div> <!-- end card-box-->
    </div> <!-- end col -->

    <div class="col-lg-6 col-xl-3">
        <div class="card-box bg-pattern">
            <div class="row">
                <div class="col-6">
                    <div class="avatar-md bg-success rounded">
                        <i class=" fe-align-justify avatar-title font-22 text-white"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <h3 class="text-dark my-1"><span data-plugin="counterup">{{ $post_total }}</span></h3>
                        <p class="text-muted mb-0 text-truncate">總貼文數</p>
                    </div>
                </div>
            </div>
        </div> <!-- end card-box-->
    </div> <!-- end col -->
    <div class="col-lg-6 col-xl-3">
        <div class="card-box bg-pattern">
            <div class="row">
                <div class="col-6">
                    <div class="avatar-md bg-danger rounded">
                        <i class="fe-heart-on avatar-title font-22 text-white"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <h3 class="text-dark my-1"><span data-plugin="counterup">{{ $followers_total }}</span></h3>
                        <p class="text-muted mb-0 text-truncate">總追隨者</p>
                    </div>
                </div>
            </div>
        </div> <!-- end card-box-->
    </div> <!-- end col -->
    <div class="col-lg-6 col-xl-3">
        <div class="card-box bg-pattern">
            <div class="row">
                <div class="col-6">
                    <div class="avatar-md bg-warning rounded">
                        <i class="fe-star-on avatar-title font-22 text-white"></i>
                    </div>
                </div>
                <div class="col-6">
                    <div class="text-right">
                        <h3 class="text-dark my-1"><span data-plugin="counterup">{{ $followings_total }}</span></h3>
                        <p class="text-muted mb-0 text-truncate">總追蹤者</p>
                    </div>
                </div>
            </div>
        </div> <!-- end card-box-->
    </div> <!-- end col -->
</div>
<!-- end row-->
<div class="row">
    @forelse ($users as $user)
        <div class="col-lg-4"><div class="text-center card-box"><div class="pt-2 pb-2">
            <img src="{{ asset('assets/images/users/user-' . $user->id . '.jpg') }}"
                 class="rounded-circle img-thumbnail avatar-xl" alt="{{ $user->name }}"
                 onerror="this.onerror=null;this.src='{{ asset('assets/images/users/user-1.jpg') }}';">
            <h4 class="mt-3"><span class="text-dark">{{ $user->name }}</span></h4>
            <p class="text-muted">@Founder <span>|</span> <a href="mailto:{{ $user->email }}" class="text-pink">{{ $user->email }}</a></p>

            <button type="button" class="btn btn-warning btn-sm edit-user-btn"
                    data-toggle="modal" data-target="#edit-user-modal"
                    data-id="{{ $user->id }}" data-name="{{ $user->name }}" data-email="{{ $user->email }}"
                    data-post="{{ $user->post }}" data-followers="{{ $user->followers }}"
                    data-followings="{{ $user->followings }}"
                    data-update-url="{{ route('users.update', ['user' => $user->id]) }}">編輯</button>

            <form id="delete-user-form-{{ $user->id }}" action="{{ route('users.destroy', ['user' => $user->id]) }}"
                  method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="button" class="btn btn-danger btn-sm js-delete-user"
                        data-user-id="{{ $user->id }}" data-user-name="{{ $user->name }}">刪除</button>
            </form>

            <div class="row mt-4">
                <div class="col-4"><div class="mt-3"><h4>{{ $user->post }}</h4><p class="mb-0 text-muted text-truncate">貼文數</p></div></div>
                <div class="col-4"><div class="mt-3"><h4>{{ $user->followers }}</h4><p class="mb-0 text-muted text-truncate">追隨者</p></div></div>
                <div class="col-4"><div class="mt-3"><h4>{{ $user->followings }}</h4><p class="mb-0 text-muted text-truncate">追蹤者</p></div></div>
            </div>
        </div></div></div>
    @empty
        <div class="col-12"><div class="alert alert-info">目前沒有使用者資料。</div></div>
    @endforelse
</div>

@if ($users->hasPages())
    <div class="row"><div class="col-12"><div class="d-flex justify-content-end">
        {{ $users->withQueryString()->links() }}
    </div></div></div>
@endif
