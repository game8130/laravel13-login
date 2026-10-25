<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Log In | UBold - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- App css -->
        <link href="{{ asset('assets/css/bootstrap-purple.min.css') }}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="{{ asset('assets/css/app-purple.min.css') }}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

        <link href="{{ asset('assets/css/bootstrap-purple-dark.min.css') }}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
        <link href="{{ asset('assets/css/app-purple-dark.min.css') }}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" />

        <!-- icons -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    </head>

    <body class="loading authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <div class="auth-logo">
                                        <a href="{{ url('/') }}" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="22">
                                            </span>
                                        </a>
                    
                                        <a href="{{ url('/') }}" class="logo logo-light text-center">
                                            <span class="logo-lg">
                                                <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="22">
                                            </span>
                                        </a>
                                    </div>
                                    <p class="text-muted mb-4 mt-3">請輸入帳號密碼</p>
                                    <p class="text-muted mb-4 mt-3">預設帳號 : test@example.com / password</p>
                                </div>

                                <!-- Laravel 登入表單 -->
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group mb-3">
                                        <label for="emailaddress">電子郵件</label>
                                        <input class="form-control @error('email') is-invalid @enderror" type="email" id="emailaddress" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="請輸入您的電子郵件">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">密碼</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password" placeholder="請輸入您的密碼">
                                            <div class="input-group-append" data-password="false">
                                                <div class="input-group-text">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>
                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit">登入</button>
                                    </div>

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt">
            2015 - <script>document.write(new Date().getFullYear())</script> &copy; UBold theme by <a href="" class="text-white-50">Coderthemes</a> 
        </footer>

        <!-- Vendor js -->
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/app.min.js') }}"></script>
        
    </body>
</html>