@extends('layouts.simple')
@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('js/pages/op_auth_signin.js') }}"></script>
@endsection

@section('content')
    <!-- Hero -->
    <div class="hero-static">
                    <div class="content">
                        <div class="row justify-content-center">
                            <div class="col-md-8 col-lg-6 col-xl-4">
                                <!-- Sign In Block -->
                                <div class="block block-rounded block-themed mb-0">
                                    <div class="block-header bg-primary-dark">
                                        <h3 class="block-title">Sign In</h3>
                                        <div class="block-options">
                                            <a class="btn-block-option font-size-sm" href="op_auth_reminder.html">Forgot Password?</a>
                                            <a class="btn-block-option" href="/new-register" data-toggle="tooltip" data-placement="left" title="New Account">
                                                <i class="fa fa-user-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="block-content">
                                        <div class="p-sm-3 px-lg-4 py-lg-5">
                                            <h1 class="h2 mb-1">AtZeron</h1>
                                            <p class="text-muted">
                                                Welcome, please login.
                                            </p>

                                            <!-- Sign In Form -->
                                            <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _es6/pages/op_auth_signin.js) -->
                                            <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                            <form class="js-validation-signin" action="{{ route('login') }}" method="POST">
                                            @csrf
                                                <div class="py-3">
                                                    <div class="form-group">
                                                       
                                                        <input type="text" class="form-control form-control-alt form-control-lg @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control form-control-alt form-control-lg @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="login-remember" name="login-remember">
                                                            <label class="custom-control-label font-w400" for="login-remember">Remember Me</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-6 col-xl-5">
                                                        <button type="submit" class="btn btn-block btn-alt-primary">
                                                            <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Sign In
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- END Sign In Form -->
                                        </div>
                                    </div>
                                </div>
                                <!-- END Sign In Block -->
                            </div>
                        </div>
                    </div>
                    <div class="content content-full font-size-sm text-muted text-center">
                        <strong>Atzeron</strong> &copy; <span data-toggle="year-copy"></span>
                    </div>
                </div>
    <!-- END Hero -->
@endsection
