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
                                    <h4 class="text-center mb-4">Add Artist</h4>
                                    <form method='get' action="{{url('/admin/artist/addArtistProcess')}}">
                                        <div class="form-group">
                                            <label><strong>Artist Name</strong></label>
                                            <input type="text" class="form-control" placeholder="Artist Name" id="name" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            @if($errors-> has('name'))
                                                 <ul>                                                   
                                                    <li style="color: red; ">{{$errors -> first('name')}}</li>
                                                </ul>
                                            @endif
                                        </div>
                                       
                                        <div class="text-center mt-4">
                                            <button type="submit" name="add-Artist" class="btn btn-primary btn-block">Save</button>
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
    <!--endRemoveIf(production)-->

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

    <!-- form validate -->
    <script>

        // no space character allow
        const textInputUsername = document.getElementById('name');
        
        textInputUsername.addEventListener('keypress', function(event) {
            const char = String.fromCharCode(event.charCode);
            if (char === ' ') {
            event.preventDefault();
            }
        });

        
    </script>
</body>

</html>