<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/images')}}/favicon.png">
    <link href="{{asset('admin/css')}}/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    @foreach($orders as $order)
                                    <h4 class="text-center mb-4">Edit account</h4>
                                    <form method='get' action="{{url('/admin/order/editOrderProcess/' . $order -> id)}}">
                                        
                                        <div class="form-group">
                                            <label><strong>Status:</strong></label>
                                            <select class="form-control"  name="status">
                                                    <option value="0" {{$order-> status == 0 ? 'selected' : '' }}>shipping</option>    
                                                    <option value="1" {{$order-> status == 1 ? 'selected' : '' }}>complete</option>                                             
                                            </select>
                                        </div>                                     
                                        <div class="text-center mt-4">
                                            <button type="submit" name="edit-Order" class="btn btn-primary btn-block">Save</button>
                                        </div>
                                    </form>
                                    @endforeach
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
    <!--endRemoveIf(production)-->

    <!-- jquerry datepicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
    $(function() {
        $("#update_at").datepicker({
            dateFormat: 'dd/mm/yy'
        });
    });
    </script>
    <!-- end jquerry datepicker -->

    <!-- form validate -->
    <script>
        // no character allow in phone-number
        const phoneNumberInput = document.getElementById('phone_number');

        phoneNumberInput.addEventListener('keypress', function(event) {
            const char = String.fromCharCode(event.charCode);
            if (!/\d|-/.test(char) ||  char === ' ') {
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