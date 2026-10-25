{{-- 新增使用者 Modal --}}
<div id="create-user-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered"><div class="modal-content">
        <div class="modal-header bg-light">
            <h4 class="modal-title">新增使用者</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="關閉">×</button>
        </div>
        <div class="modal-body p-4">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="create-name">姓名</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                           id="create-name" name="name" value="{{ old('name') }}" placeholder="請輸入姓名" required>
                    @error('name')<span class="invalid-feedback"><strong>{{ $message }}</strong></span>@enderror
                </div>
                <div class="form-group">
                    <label for="create-email">電子郵件</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                           id="create-email" name="email" value="{{ old('email') }}" placeholder="請輸入電子郵件" required>
                    @error('email')<span class="invalid-feedback"><strong>{{ $message }}</strong></span>@enderror
                </div>
                <div class="form-group">
                    <label for="create-password">密碼</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                           id="create-password" name="password" placeholder="請輸入密碼" required>
                    @error('password')<span class="invalid-feedback"><strong>{{ $message }}</strong></span>@enderror
                </div>
                <div class="text-right"><button type="submit" class="btn btn-success">儲存</button>
                    <button type="button" class="btn btn-light ml-1" data-dismiss="modal">取消</button></div>
            </form>
        </div>
    </div></div>
</div>

{{-- 編輯使用者 Modal --}}
<div id="edit-user-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered"><div class="modal-content">
        <div class="modal-header bg-light">
            <h4 class="modal-title">編輯使用者</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="關閉">×</button>
        </div>
        <div class="modal-body p-4">
            <form id="edit-user-form" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group"><label for="edit-name">姓名</label><input type="text" class="form-control" id="edit-name" name="name" required></div>
                <div class="form-group"><label for="edit-email">電子郵件</label><input type="email" class="form-control" id="edit-email" name="email" required></div>
                <div class="form-group"><label for="edit-password">密碼（留空表示不修改）</label><input type="password" class="form-control" id="edit-password" name="password" placeholder="留空則保留原密碼"></div>
                <div class="form-group"><label for="edit-post">貼文數量</label><input type="number" class="form-control" id="edit-post" name="post" min="0"></div>
                <div class="form-group"><label for="edit-followers">追隨者</label><input type="number" class="form-control" id="edit-followers" name="followers" min="0"></div>
                <div class="form-group"><label for="edit-followings">追蹤者</label><input type="number" class="form-control" id="edit-followings" name="followings" min="0"></div>
                <div class="text-right"><button type="submit" class="btn btn-success">更新</button>
                    <button type="button" class="btn btn-light ml-1" data-dismiss="modal">取消</button></div>
            </form>
        </div>
    </div></div>
</div>
