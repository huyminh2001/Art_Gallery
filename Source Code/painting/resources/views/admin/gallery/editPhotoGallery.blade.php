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
                                    <h4 class="text-center mb-4">Edit Photos</h4>   
                                        @if($photoGallery)
                                        <form method='post' action="{{url('/admin/gallery/editPhotoGalleryProcess/'.$photoGallery -> id. '/' . $photoGallery -> gallery_id) }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label><strong>Gallery:</strong></label>
                                                @foreach ($data['galleries'] as $gallery)
                                                    @if($gallery -> id == $photoGallery -> gallery_id)
                                                        <p class="form-control" value="{{$gallery -> id}}" >{{$gallery -> name}} - {{$gallery -> id}}</p>
                                                    @endif
                                                @endforeach
                                            </div>
                                            <div class="form-group">
                                                <label><strong>Current Image</strong></label>
                                                <div class="form-group">
                                                    <img src="{{asset('/admin/images')}}/galleryImages/{{$photoGallery -> name}}" width="100px" height="100px" title="painting image">
                                                </div>                        
                                            </div>
                                            <div class="form-group">
                                                <label><strong>Upload Images</strong></label>
                                                <input type="file" class="form-control"  name="photos[]">                          
                                            </div>
                                            <div class="form-group">
                                                @if($errors-> has('photos'))
                                                    <ul>                                                   
                                                        <li style="color: red; ">{{$errors -> first('photos')}}</li>
                                                    </ul>
                                                @endif
                                            </div>
                                            <div class="text-center mt-4">
                                                <button type="submit" name="edit-PhotoGallery" class="btn btn-primary btn-block">Save</button>
                                                <a class="btn btn-primary btn-block" href="{{url('/admin/gallery')}}/gallery">Back</a>
                                            </div>
                                        </form>
                                        @endif
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

</body>

</html>