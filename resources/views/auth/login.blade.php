<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Laravel') }} | Sign In</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

    <!-- Styles -->
    <link href="{{ asset('css/ppmsui.css') }}" rel="stylesheet">
  </head>
  <body>
  <div id="page-container">

    <!-- Main Container -->
    <main id="main-container">

        <!-- Page Content -->
        <div>
            <div class="hero-static bg-white-95">
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-4">
                            <!-- Sign In Block -->
                            <div class="block block-themed block-fx-shadow mb-0">
                                <div class="block-header">
                                    <h3 class="block-title">Sign In</h3>
                                    <div class="block-options">
                                        @if(Route::has('password.request'))
                                        <a class="btn-block-option font-size-sm" href="{{ route('password.request') }}">Forgot Password?</a>
                                        @endif
                                    </div>
                                </div>
                                <div class="block-content">
                                    <div class="p-sm-3 px-lg-4 py-lg-5">
                                        <h1 class="mb-2">PPMS</h1>
                                        <p>Welcome back, please login.</p>

                                        <!-- Sign In Form -->
                                        <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _es6/pages/op_auth_signin.js) -->
                                        <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                        <form class="js-validation-signin" action="/login" method="POST"  autocomplete="off">
                                            @csrf
                                            @if ($errors->any())
                                                <div class="alert alert-danger alert-dismissable" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <div class="py-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control form-control-alt form-control-lg" id="code" name="code" placeholder="Username">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control form-control-alt form-control-lg" id="password" name="password" placeholder="Password">
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
                                                    <button type="submit" class="btn btn-block btn-primary">
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
                    <strong>PPMS 1.0.0</strong> &copy; <span data-toggle="year-copy"></span>
                </div>
            </div>
        </div>
        <!-- END Page Content -->

    </main>
    <!-- END Main Container -->
  </div>
  <!-- END Page Container -->
  <!-- PPMS UI Core JS -->
  <script src="{{ asset('js/ppmsui.js') }}"></script>

  <!-- Page JS Plugins -->
  <script src="{{ asset('js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>

  <!-- Page JS Code -->
  <script src="{{ asset('js/pages/signin.js') }}"></script>
  
  <!-- Laravel Scaffolding JS -->
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
