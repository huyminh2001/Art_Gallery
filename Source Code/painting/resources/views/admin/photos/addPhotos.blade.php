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
                                    <h4 class="text-center mb-4">Upload Photos</h4>
                                    <form method='post' action="{{url('/admin/photos/addPhotosProcess') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label><strong>Painting:</strong></label>
                                            <select class="form-control"  name="painting_id">
                                                <option value="" disabled selected>Select a Painting</option>
                                                @foreach($paintings as $painting)
                                                    <option value="{{$painting -> id}}">{{$painting -> name}} - {{$painting -> id}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            @if($errors-> has('painting_id'))
                                                 <ul>                                                   
                                                    <li style="color: red; ">{{$errors -> first('painting_id')}}</li>
                                                </ul>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Status:</strong></label>
                                            <select class="form-control"  name="status">
                                                    <option value="" disabled selected>Select a Status</option>
                                                    <option value="0" >Sub-Image</option>    
                                                    <option value="1" >Main-Image</option>                                             
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            @if($errors-> has('status'))
                                                 <ul>                                                   
                                                    <li style="color: red; ">{{$errors -> first('status')}}</li>
                                                </ul>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Upload Images</strong></label>
                                            <input type="file" class="form-control"  name="photos[]" multiple>                          
                                        </div>
                                        <div class="form-group">
                                            @if($errors-> has('photos'))
                                                 <ul>                                                   
                                                    <li style="color: red; ">{{$errors -> first('photos')}}</li>
                                                </ul>
                                            @endif
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" name="add-Photos" class="btn btn-primary btn-block">Save</button>
                                            <a class="btn btn-primary btn-block" href="{{url('/admin/photos')}}/photos">Back</a>
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

</body>

</html>