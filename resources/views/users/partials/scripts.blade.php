<script>
$(function () {
    $('.edit-user-btn').on('click', function () {
        const button = $(this);
        $('#edit-user-form').attr('action', button.data('update-url'));
        $('#edit-name').val(button.data('name'));
        $('#edit-email').val(button.data('email'));
        $('#edit-password').val('');
        $('#edit-post').val(button.data('post'));
        $('#edit-followers').val(button.data('followers'));
        $('#edit-followings').val(button.data('followings'));
    });

    $('.js-delete-user').on('click', function () {
        const id = $(this).data('user-id');
        const name = $(this).data('user-name');
        const form = document.getElementById('delete-user-form-' + id);
        if (!form) {
            console.error('找不到刪除表單，使用者 ID：', id);
            return;
        }

        if (typeof Swal === 'undefined') {
            if (window.confirm('確定要刪除「' + name + '」嗎？')) {
                HTMLFormElement.prototype.submit.call(form);
            }
            return;
        }

        Swal.fire({
            title: '確定要刪除嗎？',
            text: '即將刪除使用者「' + name + '」，此操作無法復原。',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#6c757d',
            confirmButtonText: '確定刪除',
            cancelButtonText: '取消'
        }).then(function (result) {
            if (result.isConfirmed || result.value === true) {
                HTMLFormElement.prototype.submit.call(form);
            }
        });
    });

    @if ($errors->any())
        $('#create-user-modal').modal('show');
    @endif

    @if (session('success'))
        Swal.fire({ title: '成功！', text: @json(session('success')), icon: 'success', confirmButtonText: '確定' });
    @elseif (session('error'))
        Swal.fire({ title: '失敗！', text: @json(session('error')), icon: 'error', confirmButtonText: '確定' });
    @endif
});
</script>
