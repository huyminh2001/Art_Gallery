<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Focus - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/images')}}/favicon.png">
    <!-- Datatable -->
    <link href="{{asset('admin/vendor')}}/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="{{asset('admin/css')}}/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{url('/admin/index')}}" class="brand-logo">
                <img class="logo-abbr" src="{{asset('admin/images')}}/logo.png" alt="">
                <img class="logo-compact" src="{{asset('admin/images')}}/logo-text.png" alt="">
                <img class="brand-title" src="{{asset('admin/images')}}/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            
                        </div>

                        <ul class="navbar-nav header-right">
                            
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="{{url('/admin/register_login/logout')}}" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">       
                    <li class="nav-label">Table</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-layout-25">

                    </i><span class="nav-text">Table</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{url('/admin/account/accounts')}}">Accounts</a></li>
                            <li><a href="{{url('/admin/order/orders')}}">Orders</a></li>
                            <!-- <li><a href="{{url('/admin/orderDetail/orderDetails')}}">Order Detail</a></li> -->
                            <li><a href="{{url('/admin/painting/paintings')}}">Paintings</a></li>
                            <li><a href="{{url('/admin/photos/photos')}}">Photos</a></li>
                            <li><a href="{{url('/admin/artist/artists')}}">Artist</a></li>
                            <li><a href="{{url('/admin/gallery/gallery')}}">Gallery</a></li>
                            <!-- <li><a href="{{url('/admin/gallery/gallerySubject')}}">Gallery Subject</a></li> -->
                            <li><a href="{{url('/admin/review/review')}}">Review</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
        
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back @if (session()->has('user')) {{ session()->get('user') }}! @endif</h4>
                            
                        </div>
                    </div>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Gallery</h4>
                            </div>
                            <div >
                                <div class ="btn btn-primary" style="display: inline-block; margin-right: 960px; margin-left: 20px; margin-bottom: 16px;">
                                    <a href="{{url('/admin/gallery/addPhotoGallery')}}">Upload Photos</a>
                                </div>
                                <div class ="btn btn-primary" style="display: inline-block; margin-right: 960px; margin-left: 20px; ">
                                    <a href="{{url('/admin/gallery/addGallerySubject')}}">Create Gallery Subject</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="gallery" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Photo</th>
                                                <th>Gallery Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        
                                        @foreach($photoGalleries as $photoGallery)                       
                                            <tr>
                                                <td>{{$photoGallery -> id}}</td>
                                                <td>{{$photoGallery -> name}}</td>
                                                <td><img src="{{asset('/admin/images')}}/galleryImages/{{$photoGallery -> name}} " width="100px" height="100px" title="Gallery-image"></td>
                                                <td>
                                                    
                                                    {{$photoGallery -> galleryName}} - {{$photoGallery -> galleryId}}
                                                    
                                                </td>
                                                <td>
                                                    <a href="{{url('/admin/gallery/editPhotoGallery/'.$photoGallery -> id . '/' . $photoGallery -> gallery_id)}}" class="btn btn-primary">Edit Photo</a>
                                                    <a href="{{url('/admin/gallery/editGallerySubject/'.$photoGallery -> galleryId)}}" class="btn btn-primary">Edit Gallery Subject</a>                                                 
                                                    <a href="{{url('/admin/gallery/deletePhotoGallery/'.$photoGallery -> id)}}" class="btn btn-danger"
                                                    onclick="return confirm('Are you sure you want to delete this photo?')">Delete Photo</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Photo</th>
                                                <th>Gallery Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('admin/vendor')}}/global/global.min.js"></script>
    <script src="{{asset('admin/js')}}/quixnav-init.js"></script>
    <script src="{{asset('admin/js')}}/custom.min.js"></script>
    


    <!-- Datatable -->
    <script src="{{asset('admin/vendor')}}/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('admin/js')}}/plugins-init/datatables.init.js"></script>
    <script>
        $(document).ready(function() {
        $('#gallery').DataTable({
            paging: true,
            // other options
        });
        });
    </script>
    <!-- font-awsome icon library -->
    <script src="https://kit.fontawesome.com/b1c4360689.js" crossorigin="anonymous"></script>
</body>

</html>