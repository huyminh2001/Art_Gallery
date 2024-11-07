<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="{{asset('admin/css')}}/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100" style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%);">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <div id="loginRequiredAlert" style="display: none;"></div>
                                    <form method="post" action="{{url('/admin/register_login/loginProcess')}}">
                                        @csrf
                                        <div class="form-group">
                                            <label><strong>Username</strong></label>
                                            <input type="text" name="username" class="form-control" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            @if($errors-> has('username'))
                                                 <ul>                                                   
                                                    <li style="color: red; ">{{$errors -> first('username')}}</li>
                                                </ul>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            @if($errors-> has('password'))
                                                 <ul>                                                   
                                                    <li style="color: red; ">{{$errors -> first('password')}}</li>
                                                </ul>
                                            @endif
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-check ml-2">
                                                    <input class="form-check-input" type="checkbox" id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <input type="hidden" name="loginSuccessful" id="loginSuccessful" value="{{ old('loginSuccessful') }}">
                                        <div class="text-center">
                                            <button type="submit" name="btn-Login" class="btn btn-primary btn-block">Sign me in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('admin/vendor')}}/global/global.min.js"></script>
    <script src="{{asset('admin/js')}}/quixnav-init.js"></script>
    <script src="{{asset('admin/js')}}/custom.min.js"></script>
    <script src="{{asset('admin/vendor')}}/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if ($errors->any())
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Login Error!',
            text: '<?= $errors->first('message') ?>', // Access custom error message
            showConfirmButton: true
        });
    </script>
    @endif

    @if (old('loginSuccessful'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Login Successful!',
            text: 'Welcome back, Admin!',
            showConfirmButton: false,
            timer: 2000 // Auto-close after 2 seconds
        });

        <?php session()->forget('loginSuccessful'); ?> // Clear session variable after display
    </script>
    @endif
</body>

</html>