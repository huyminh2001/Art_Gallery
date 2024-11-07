@extends('layouts.user_layout')

@section('content')
<!-- Shop Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <!-- Shop Product Start -->
        <div class="col-lg-12 col-md-12">
            <div class="row pb-3">
                <div class="col-12 pb-1">

                    <div class="flex-w p-b-10">
                        <div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
                            <i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
                            <i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                            Filter
                        </div>

                        <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-search">
                            <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                            <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                            Search
                        </div>
                        <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4">
                            <a href="{{url('/paintings')}}" style="color: gray;">Reset</a>
                        </div>
                    </div>

                    <!-- Search product -->
                    <form method="get" action="{{url('paintings')}}">
                        <div class="dis-none panel-search w-full p-t-10 p-b-15">
                            <div class="bor8 dis-flex p-l-15">
                                <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                                    <i class="zmdi zmdi-search fa-2x"></i>
                                </button>

                                <input class="mtext-107 cl2 size-114 plh2 p-l-15 p-r-15" type="text" name="search" placeholder="Search">
                            </div>
                        </div>
                    </form>

                    <!-- Filter -->
                    <form method="get" action="{{url('paintings')}}">
                        <!-- flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 -->
                        <!-- block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 -->
                        <!-- ****dis-none panel-filter p-t-10 stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04  -->
                        <button name="filter" class="dis-none panel-filter stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">Apply</button>
                        <div class="dis-none panel-filter w-full p-t-10">
                            <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
                                <div class="filter-col1 p-r-15 p-b-27">
                                    <div class="mtext-102 cl2 p-b-15">
                                        By Style
                                    </div>

                                    <ul>
                                        @foreach ($style_categories as $style_category)
                                        <li class="p-b-6" style="display: flex; flex-wrap: wrap; gap: 8px;">
                                            <input type="checkbox" id="style{{$style_category->id}}" name="style{{$style_category->id}}" value="{{$style_category->id}}" {{$request->has('style'.$style_category->id) ? 'checked' : ''}}>
                                            <label for="style{{$style_category->id}}" class="filter-link stext-106 trans-04 mb-0">
                                                {{$style_category->name}}
                                            </label>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="filter-col2 p-r-15 p-b-27">
                                    <div class="mtext-102 cl2 p-b-15">
                                        By Surface
                                    </div>

                                    <ul>
                                        @foreach ($surface_categories as $surface_category)
                                        <li class="p-b-6" style="display: flex; flex-wrap: wrap; gap: 8px;">
                                            <input type="checkbox" id="surface{{$surface_category->id}}" name="surface{{$surface_category->id}}" value="{{$surface_category->id}}" {{$request->has('surface'.$surface_category->id) ? 'checked' : ''}}>
                                            <label for="surface{{$surface_category->id}}" class="filter-link stext-106 trans-04 mb-0">
                                                {{$surface_category->name}}
                                            </label>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="filter-col3 p-r-15 p-b-27">
                                    <div class="mtext-102 cl2 p-b-15">
                                        By Color
                                    </div>

                                    <ul>
                                        @foreach ($color_categories as $color_category)
                                        <li class="p-b-6" style="display: flex; flex-wrap: wrap; gap: 8px;">
                                            <input type="checkbox" id="color{{$color_category->id}}" name="color{{$color_category->id}}" value="{{$color_category->id}}" {{$request->has('color'.$color_category->id) ? 'checked' : ''}}>
                                            <label for="color{{$color_category->id}}" class="filter-link stext-106 trans-04 mb-0">
                                                {{$color_category->name}}
                                            </label>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="filter-col4 p-b-27">
                                    <div class="mtext-102 cl2 p-b-15">
                                        Price
                                    </div>

                                    <ul>
                                        <li class="p-b-6" style="display: grid; column-gap: 8px; grid-template-columns: 46px auto;">
                                            <label class="filter-link stext-106 trans-04 mb-0" for="min_price">From</label><input style="width: 120px; border: 1px; border-radius: 8px;" id="min_price" type="number" name="min_price" value="{{$request->has('min_price') ? $request->get('min_price') : ''}}">

                                        </li>

                                        <li class="p-b-6" style="display: grid; column-gap: 8px; grid-template-columns: 46px auto;">
                                            <label class="filter-link stext-106 trans-04 mb-0" for="max_price">To</label><input style="width: 120px; border: 1px; border-radius: 8px;" id="max_price" type="number" name="max_price" value="{{$request->has('max_price') ? $request->get('max_price') : ''}}">
                                        </li>
                                    </ul>
                                </div>

                                <div class="filter-col5 p-b-27">
                                    <div class="mtext-102 cl2 p-b-15">
                                        Dimensions
                                    </div>

                                    <ul>
                                        <li class="p-b-6">
                                            <span class="stext-106 trans-04 p-b-8">Width</span>
                                        </li>
                                        <li class="p-b-6" style="display: grid; column-gap: 8px; grid-template-columns: 46px auto;">
                                            <label class="filter-link stext-106 trans-04 mb-0" for="min_width">From</label><input style="width: 120px; border: 1px; border-radius: 8px;" id="min_width" type="number" name="min_width" value="{{$request->has('min_width') ? $request->get('min_width') : ''}}">
                                        </li>

                                        <li class="p-b-6" style="display: grid; column-gap: 8px; grid-template-columns: 46px auto;">
                                            <label class="filter-link stext-106 trans-04 mb-0" for="max_width">To</label><input style="width: 120px; border: 1px; border-radius: 8px;" id="max_width" type="number" name="max_width" value="{{$request->has('max_width') ? $request->get('max_width') : ''}}">
                                        </li>
                                        <br>
                                        <li class="p-b-6">
                                            <span class="stext-106 trans-04 p-b-8">Height</span>
                                        </li>
                                        <li class="p-b-6" style="display: grid; column-gap: 8px; grid-template-columns: 46px auto;">
                                            <label class="filter-link stext-106 trans-04 mb-0" for="min_height">From</label><input style="width: 120px; border: 1px; border-radius: 8px;" id="min_height" type="number" name="min_height" value="{{$request->has('min_height') ? $request->get('min_height') : ''}}">
                                        </li>

                                        <li class="p-b-6" style="display: grid; column-gap: 8px; grid-template-columns: 46px auto;">
                                            <label class="filter-link stext-106 trans-04 mb-0" for="max_height">To</label><input style="width: 120px; border: 1px; border-radius: 8px;" id="max_height" type="number" name="max_height" value="{{$request->has('max_height') ? $request->get('max_height') : ''}}">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                @foreach ($paintings as $painting)
                <div class="col-lg-3 col-md-6 col-sm-12 pb-5">
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img height="350px" style="object-fit: none;" src="{{asset('admin/images/paintingImages')}}/{{$painting->photoName}}" alt="IMG-PRODUCT">

                            <a href="{{url('paintings/painting_details/'.$painting->id)}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                                View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="{{url('paintings/painting_details/'.$painting->id)}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    {{$painting->name}}
                                </a>

                                <span class="stext-105 cl3">
                                    ${{$painting->price}}
                                </span>
                            </div>

                            <!-- Heart button -->
                            <!-- <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04" src="{{asset('user/coza')}}/images/icons/icon-heart-01.png" alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{asset('user/coza')}}/images/icons/icon-heart-02.png" alt="ICON">
                                </a>
                            </div> -->
                        </div>


                    </div>
                </div>
                @endforeach
                <!-- <div class="col-12 pb-1">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center mb-3">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div> -->
            </div>
        </div>
        <!-- Shop Product End -->
    </div>
</div>
<!-- Shop End -->

<script>
const inputIds = ['min_price', 'max_price', 'min_width', 'max_width', 'min_height', 'max_height'];

const quantityInputs = inputIds.map(id => document.getElementById(id));

quantityInputs.forEach(textInputQuantity => {
  textInputQuantity.addEventListener('keypress', function(event) {
    // Regular expression to match only digits greater than 0
    const validInput = /^\d*[0-9]\d*$/;
    const char = String.fromCharCode(event.charCode);

    // Check if the character is a digit greater than 0 or backspace key
    if (!validInput.test(textInputQuantity.value + char) && char !== '\b') {
      event.preventDefault();
    }
  });
});
</script>

@endsection