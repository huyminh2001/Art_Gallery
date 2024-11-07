<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="icon" type="image/png" href="{{asset('user/coza/images')}}/icons/favicon.png" />
    <link rel="stylesheet" href="{{asset('user/modernize')}}/css/styles.min.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="/" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="{{asset('user/coza/images')}}/icons/logo-01.png" width="180" alt="">
                                </a>
                                <form method="post" action="/login_proceed">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username">
                                    </div>
                                    <div class="mb-3">
                                        @if($errors-> has('username'))
                                        <p style="color: red; ">{{$errors->first('username')}}</p>
                                        @endif
                                    </div>


                                    <div class="mb-4">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                    <div class="mb-3">
                                        @if($errors-> has('password'))
                                        <p style="color: red; ">{{$errors->first('password')}}</p>
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <!-- <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                        Remeber this Device
                      </label>
                    </div> -->
                                        <!-- <a class="text-primary fw-bold" href="./index.html">Forgot Password ?</a> -->
                                    </div>
                                    <button href="/login_proceed" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" name="btnLogIn" style="background-color: #38b6ff;" onMouseOver="this.style.backgroundColor='#295396',this.style.borderColor='#295396'" onMouseOut="this.style.backgroundColor='#38b6ff',this.style.borderColor='#38b6ff'">Sign In</button>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="fs-4 mb-0 fw-bold">New to Galleria?&nbsp;</p>
                                        <a href="/register" style="color: #38b6ff;">Create an account</a>
                                    </div>
                                    <br><a class="d-flex justify-content-center" href="/" style="color: #38b6ff;">Back to Home page</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('user/modernize')}}/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{asset('user/modernize')}}/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


    <script>
        // no space character allow
        const textInputUsername = document.getElementById('username');

        textInputUsername.addEventListener('keypress', function(event) {
            const char = String.fromCharCode(event.charCode);
            if (char === ' ') {
                event.preventDefault();
            }
        });

        const textInputPassword = document.getElementById('password');
        textInputPassword.addEventListener('keypress', function(event) {
            const char = String.fromCharCode(event.charCode);
            if (char === ' ') {
                event.preventDefault();
            }
        });
    </script>

</body>

</html>