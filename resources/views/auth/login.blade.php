<!DOCTYPE html>
<html lang="en">

    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <title>Login V18</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="icon" type="image/png" href="images/icons/favicon.ico" />

        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">

    </head>
    <body style="background-color: #666666;">
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">

        
                    {{-- #fe4066 --}}


                    <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">

                        @csrf
                        <span class="login100-form-title p-b-43">
                            Login to continue
                        </span>
                        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                            <input class="input100" type="text" name="email">
                            <span class="focus-input100"></span>
                            <span class="label-input100">Email</span>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <input class="input100" type="password" name="password" required autocomplete="current-password" >
                            <span class="focus-input100"></span>
                            <span class="label-input100">Password</span>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="flex-sb-m w-full p-t-3 p-b-32">
                            <div class="contact100-form-checkbox">
                                <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="label-checkbox100" for="ckb1">
                                    Remember me
                                </label>
                            </div>
                            
                            <div>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="txt1">
                                        Forgot Password?
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn">
                                Login
                            </button>
                        </div>
                    </form>
                    <div class="login100-more" style="background-image: url('images/colors.jpg');">
                    </div>
                </div>
            </div>
        </div>

        <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

        <script src="vendor/animsition/js/animsition.min.js"></script>

        <script src="vendor/bootstrap/js/popper.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

        <script src="vendor/select2/select2.min.js"></script>

        <script src="vendor/daterangepicker/moment.min.js"></script>
        <script src="vendor/daterangepicker/daterangepicker.js"></script>

        <script src="vendor/countdowntime/countdowntime.js"></script>

        <script src="js/main.js"></script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');
        </script>
    </body>
</html>
