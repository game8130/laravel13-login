<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', '使用者管理') | UBold</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-modern.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app-modern.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-modern-dark.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app-modern-dark.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">
    @stack('styles')
</head>
<body class="loading" data-layout-mode="detached"
      data-layout='{"mode":"light","width":"fluid","menuPosition":"fixed","sidebar":{"color":"light","size":"default","showuser":true},"topbar":{"color":"dark"},"showRightSidebarOnPageLoad":true}'>
<div id="wrapper">
    @include('layouts.partials.navbar')
    @include('layouts.partials.sidebar')
    <div class="content-page">
        <div class="content"><div class="container-fluid">@yield('content')</div></div>
        @include('layouts.partials.footer')
    </div>
</div>
<div class="rightbar-overlay"></div>
<script src="{{ asset('assets/js/vendor.min.js') }}"></script>
<script src="{{ asset('assets/js/app.min.js') }}"></script>
<script src="{{ asset('assets/libs/sweetalert2/sweetalert2.min.js') }}"></script>
@stack('scripts')
</body>
</html>
