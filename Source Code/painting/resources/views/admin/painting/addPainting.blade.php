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
                                    <h4 class="text-center mb-4">Add painting</h4>
                                    <form method='get' action="{{url('/admin/painting/addPaintingProcess')}}" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label><strong>Painting Name</strong></label>
                                            <input type="text" class="form-control" placeholder="Painting name" id="name" name="name" required>
                                        </div>
                                        <div class="form-group">
                                            @if($errors-> has('name'))
                                                 <ul>                                                   
                                                    <li style="color: red; ">{{$errors -> first('name')}}</li>
                                                </ul>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Width</strong></label>
                                            <input type="text" class="form-control" placeholder="Width" id="width" name="width" required>
                                        </div>
                                        <div class="form-group">
                                            @if($errors-> has('width'))
                                                 <ul>                                                   
                                                    <li style="color: red; ">{{$errors -> first('width')}}</li>
                                                </ul>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Height</strong></label>
                                            <input type="text" class="form-control" placeholder="Height" id="height" name="height" required>
                                        </div>
                                        <div class="form-group">
                                            @if($errors-> has('height'))
                                                 <ul>                                                   
                                                    <li style="color: red; ">{{$errors -> first('height')}}</li>
                                                </ul>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Price</strong></label>
                                            <input type="text" id="price" name="price" class="form-control" placeholder="price" required>
                                        </div>
                                        <div class="form-group">
                                            @if($errors-> has('price'))
                                                 <ul>                                                   
                                                    <li style="color: red; ">{{$errors -> first('price')}}</li>
                                                </ul>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Quantity</strong></label>
                                            <input type="text" id="quantity" class="form-control" name="quantity" required>
                                        </div>
                                        <div class="form-group">
                                            @if($errors-> has('quantity'))
                                                 <ul>                                                   
                                                    <li style="color: red; ">{{$errors -> first('quantity')}}</li>
                                                </ul>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Unique</strong></label>
                                            <select class="form-control"  name="unique" >
                                                <option value="" disabled selected>Select an attribute</option>
                                                <option value="0">Common</option>
                                                <option value="1">Exclusive</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            @if($errors-> has('unique'))
                                                 <ul>                                                   
                                                    <li style="color: red; ">{{$errors -> first('unique')}}</li>
                                                </ul>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Description</strong></label>
                                            <textarea rows="4" class="form-control" name="description"  id="description" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            @if($errors-> has('description'))
                                                 <ul>                                                   
                                                    <li style="color: red; ">{{$errors -> first('description')}}</li>
                                                </ul>
                                            @endif
                                        </div>
                                        <!-- <div class="form-group">
                                            <label><strong>Create At</strong></label>
                                            <input type="text" class="form-control" name="created_at"  id="created_at" >
                                        </div>
                                        <div class="form-group">
                                            @if($errors-> has('created_at'))
                                                 <ul>                                                   
                                                    <li style="color: red; ">{{$errors -> first('created_at')}}</li>
                                                </ul>
                                            @endif
                                        </div> -->
                                        <div class="form-group">
                                            <label><strong>Artist</strong></label>
                                            <select class="form-control"  name="artist_id" >
                                                <option value="" disabled selected>Select an artist</option>
                                                <?php foreach ($artists as $artist) { ?>
                                                    <option value="{{$artist -> id}}">{{$artist -> name}} - {{$artist -> id}}</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            @if($errors-> has('artist_id'))
                                                 <ul>                                                   
                                                    <li style="color: red; ">{{$errors -> first('artist_id')}}</li>
                                                </ul>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Style</strong></label>
                                            <select class="form-control"  name="painting_style_category_id" >
                                                <option value="" disabled selected>Select an Style</option>
                                                <?php foreach ($styles as $style) { ?>
                                                    <option value="{{$style -> id}}">{{$style -> name}} - {{$style->id}}</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            @if($errors-> has('painting_style_category_id'))
                                                 <ul>                                                   
                                                    <li style="color: red; ">{{$errors -> first('painting_style_category_id')}}</li>
                                                </ul>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Color</strong></label>
                                            <select class="form-control"  name="painting_color_category_id" >
                                                <option value="" disabled selected>Select an Color</option>
                                                <?php foreach ($colors as $color) { ?>
                                                    <option value="{{$color -> id}}">{{$color -> name}} - {{$color -> id}}</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            @if($errors-> has('painting_color_category_id'))
                                                 <ul>                                                   
                                                    <li style="color: red; ">{{$errors -> first('painting_color_category_id')}}</li>
                                                </ul>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Surface</strong></label>
                                            <select class="form-control"  name="painting_surface_category_id" >
                                                <option value="" disabled selected>Select a surface</option>
                                                <?php foreach ($surfaces as $surface) { ?>
                                                    <option value="{{$surface -> id}}">{{$surface -> name}} - {{$surface -> id}}</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            @if($errors-> has('painting_surface_category_id'))
                                                 <ul>                                                   
                                                    <li style="color: red; ">{{$errors -> first('painting_surface_category_id')}}</li>
                                                </ul>
                                            @endif
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" name="add-Painting" class="btn btn-primary btn-block">Save</button>
                                            <a class="btn btn-primary btn-block" href="{{url('/admin/painting')}}/paintings">Back</a>
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
    <!--  vendors -->
    <script src="{{asset('admin/vendor')}}/global/global.min.js"></script>
    <script src="{{asset('admin/js')}}/quixnav-init.js"></script>
    <!--endRemoveIf(production)-->

    <!-- jquerry datepicker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
    $(function() {
        $("#created_at").datepicker({
            dateFormat: 'dd/mm/yy'
        });
    });
    </script>
    <!-- end jquerry datepicker -->

    <!-- form validate -->
    <script>
        // no character allow in quantity and price
        const quantityInput = document.getElementById('quantity');
        const priceInput = document.getElementById('price');
        const widthInput = document.getElementById('width');
        const heightInput = document.getElementById('height');
    
        
        quantityInput.addEventListener('keypress', function(event) {
            const char = String.fromCharCode(event.charCode);
            if (!/\d|-/.test(char) ||  char === ' ') {
            event.preventDefault();
            }
        
        });

        priceInput.addEventListener('keypress', function(event) {
            const char = String.fromCharCode(event.charCode);
            if (!/\d|-/.test(char) ||  char === ' ') {
            event.preventDefault();
            }
        
        });

        widthInput.addEventListener('keypress', function(event) {
            const char = String.fromCharCode(event.charCode);
            if (!/\d|-/.test(char) ||  char === ' ') {
            event.preventDefault();
            }
        
        });

        heightInputInput.addEventListener('keypress', function(event) {
            const char = String.fromCharCode(event.charCode);
            if (!/\d|-/.test(char) ||  char === ' ') {
            event.preventDefault();
            }
        
        });
        // limit 10 numbers
        quantityInput.addEventListener('input', function() {
            this.value = this.value.slice(0, 2); // Limit to 10 characters
        });

        //end no character allow in quantity


        // no space character allow
        const textInputPaintingname = document.getElementById('name');
        
        textInputPaintingname.addEventListener('keypress', function(event) {
            const char = String.fromCharCode(event.charCode);
            if (char === ' ') {
            event.preventDefault();
            }
        });
        // end no space character allow


        // email pattern validate
        
        // end email pattern validate
    </script>
</body>

</html>