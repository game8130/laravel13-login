@extends('layouts.app')

@section('title', '使用者管理')

@section('content')
    <div class="row"><div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right"><ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="{{ route('users.index') }}">首頁</a></li>
                <li class="breadcrumb-item active">使用者</li>
            </ol></div>
            <h4 class="page-title">使用者管理</h4>
        </div>
    </div></div>

    @include('users.partials.list')
    @include('users.partials.modals')
@endsection

@push('scripts')
    @include('users.partials.scripts')
@endpush
