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

                        <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
                            <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                            <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                            Search
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
                        <button name="filter" class="dis-none panel-filter stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04" style="background-color: blueviolet;">Apply</button>
                        <div class="dis-none panel-filter w-full p-t-10">
                            <div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
                                <div class="filter-col1 p-r-15 p-b-27">
                                    <div class="mtext-102 cl2 p-b-15">
                                        By Style
                                    </div>

                                    <ul>
                                        @foreach ($style_categories as $style_category)
                                        <li class="p-b-6">
                                            <input type="checkbox" id="style{{$style_category->id}}" name="style{{$style_category->id}}" value="{{$style_category->id}}" style="display: inline-block;" {{$request->has('style'.$style_category->id) ? 'checked' : ''}}>
                                            <label for="style{{$style_category->id}}" class="filter-link stext-106 trans-04">
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
                                        <li class="p-b-6">
                                            <input type="checkbox" id="surface{{$surface_category->id}}" name="surface{{$surface_category->id}}" value="{{$surface_category->id}}" style="display: inline-block;" {{$request->has('surface'.$surface_category->id) ? 'checked' : ''}}>
                                            <label for="surface{{$surface_category->id}}" class="filter-link stext-106 trans-04">
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
                                        <li class="p-b-6">
                                            <input type="checkbox" id="color{{$color_category->id}}" name="color{{$color_category->id}}" value="{{$color_category->id}}" style="display: inline-block;" {{$request->has('color'.$color_category->id) ? 'checked' : ''}}>
                                            <label for="color{{$color_category->id}}" class="filter-link stext-106 trans-04">
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
                                        <li class="p-b-6">
                                            <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                                All
                                            </a>
                                        </li>

                                        <li class="p-b-6">
                                            <a href="#" class="filter-link stext-106 trans-04">
                                                $0.00 - $50.00
                                            </a>
                                        </li>

                                        <li class="p-b-6">
                                            <a href="#" class="filter-link stext-106 trans-04">
                                                $50.00 - $100.00
                                            </a>
                                        </li>

                                        <li class="p-b-6">
                                            <a href="#" class="filter-link stext-106 trans-04">
                                                $100.00 - $150.00
                                            </a>
                                        </li>

                                        <li class="p-b-6">
                                            <a href="#" class="filter-link stext-106 trans-04">
                                                $150.00 - $200.00
                                            </a>
                                        </li>

                                        <li class="p-b-6">
                                            <a href="#" class="filter-link stext-106 trans-04">
                                                $200.00+
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="filter-col5 p-b-27">
                                    <div class="mtext-102 cl2 p-b-15">
                                        Price
                                    </div>

                                    <ul>
                                        <li class="p-b-6">
                                            <a href="#" class="filter-link stext-106 trans-04 filter-link-active">
                                                All
                                            </a>
                                        </li>

                                        <li class="p-b-6">
                                            <a href="#" class="filter-link stext-106 trans-04">
                                                $0.00 - $50.00
                                            </a>
                                        </li>

                                        <li class="p-b-6">
                                            <a href="#" class="filter-link stext-106 trans-04">
                                                $50.00 - $100.00
                                            </a>
                                        </li>

                                        <li class="p-b-6">
                                            <a href="#" class="filter-link stext-106 trans-04">
                                                $100.00 - $150.00
                                            </a>
                                        </li>

                                        <li class="p-b-6">
                                            <a href="#" class="filter-link stext-106 trans-04">
                                                $150.00 - $200.00
                                            </a>
                                        </li>

                                        <li class="p-b-6">
                                            <a href="#" class="filter-link stext-106 trans-04">
                                                $200.00+
                                            </a>
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
                            <img src="{{asset('user/coza')}}/images/product-01.jpg" alt="IMG-PRODUCT">

                            <a href="{{url('paintings/painting_details/'.$painting->id)}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                                View
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
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
                <div class="col-12 pb-1">
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
                </div>
            </div>
        </div>
        <!-- Shop Product End -->
    </div>
</div>
<!-- Shop End -->



@endsection