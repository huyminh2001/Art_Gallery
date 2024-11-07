<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
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
                                <form method="post" action="{{url('/proceed_register')}}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username">
                                    </div>
                                    <div class="mb-3">
                                        @if($errors-> has('username'))
                                        <ul>
                                            <li style="color: red; ">{{$errors -> first('username')}}</li>
                                        </ul>
                                        @endif
                                    </div>

                                    <div class="mb-4">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                    </div>
                                    <div class="mb-3">
                                        @if($errors-> has('password'))
                                        <ul>
                                            <li style="color: red; ">{{$errors -> first('password')}}</li>
                                        </ul>
                                        @endif
                                    </div>

                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                    </div>
                                    <div class="mb-3">
                                        @if($errors-> has('email'))
                                        <ul>
                                            <li style="color: red; ">{{$errors -> first('email')}}</li>
                                        </ul>
                                        @endif
                                    </div>

                                    <div class="mb-4">
                                        <label for="date_of_birth" class="form-label">Birthday</label>
                                        <input type="text" class="form-control" id="date_of_birth" name="date_of_birth" required autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        @if($errors-> has('date_of_birth'))
                                        <ul>
                                            <li style="color: red; ">{{$errors -> first('date_of_birth')}}</li>
                                        </ul>
                                        @endif
                                    </div>

                                    <div class="mb-4">
                                        <label for="phone_number" class="form-label">Phone</label>
                                        <input type="text" class="form-control" id="phone_number" name="phone_number">
                                    </div>
                                    <div class="mb-3">
                                        @if($errors-> has('phone_number'))
                                        <ul>
                                            <li style="color: red; ">{{$errors -> first('phone_number')}}</li>
                                        </ul>
                                        @endif
                                    </div>

                                    <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" name="btnRegister" style="background-color: #38b6ff;" onMouseOver="this.style.backgroundColor='#295396',this.style.borderColor='#295396'" onMouseOut="this.style.backgroundColor='#38b6ff',this.style.borderColor='#38b6ff'">Sign Up</button>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="fs-4 mb-0 fw-bold">Already have an account?&nbsp;</p>
                                        <a href="/login" style="color: #38b6ff;">Sign In</a>
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

    <!--**********************************
        Scripts
    ***********************************-->

    <!-- jquerry datepicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#date_of_birth").datepicker({
                dateFormat: 'dd/mm/yy'
            });
        });
    </script>
    <!-- end jquerry datepicker -->

    <script>
        // no character allow in phone-number
        const phoneNumberInput = document.getElementById('phone_number');

        phoneNumberInput.addEventListener('keypress', function(event) {
            const char = String.fromCharCode(event.charCode);
            if (!/\d/.test(char) || char === ' ') {
                event.preventDefault();
            }

        });
        // limit 10 numbers
        phoneNumberInput.addEventListener('input', function() {
            this.value = this.value.slice(0, 10); // Limit to 10 characters
        });

        //end no character allow in phone-number


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

        const textInputEmail = document.getElementById('email');

        textInputEmail.addEventListener('input', function(event) {
            const email = this.value; // Get the entire email value
            const emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/; // Regular expression for email format
            if (!emailRegex.test(email)) {
                event.preventDefault(); // Prevent invalid input if regex doesn't match
            }
        });
        // end no space character allow


        // email pattern validate

        // end email pattern validate
    </script>

</body>

</html>