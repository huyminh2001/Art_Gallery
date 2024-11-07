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
                                    <h4 class="text-center mb-4">Add Gallery Subject</h4>
                                    <form method='get' action="{{url('/admin/gallery/addGallerySubjectProcess')}}">
                                        <div class="form-group">
                                            <label><strong>Gallery Name</strong></label>
                                            <input type="text" class="form-control" placeholder="Gallery Name" id="subject-name" name="subject-name" >
                                        </div>
                                        <div class="form-group">
                                            @if($errors-> has('name'))
                                                 <ul>                                                   
                                                    <li style="color: red; ">{{$errors -> first('name')}}</li>
                                                </ul>
                                            @endif
                                        </div>
                                       
                                        <div class="text-center mt-4">
                                            <button type="submit" name="add-GallerySubject" class="btn btn-primary btn-block">Save</button>
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

    

    <!-- form validate -->
    <script>

        // no space character allow
        const textInputSubjectname = document.getElementById('subject-name');
        
        textInputSubjectname.addEventListener('keypress', function(event) {
            const char = String.fromCharCode(event.charCode);
            if (char === ' ') {
            event.preventDefault();
            }
        });

        
    </script>
</body>

</html>