@extends('layouts.user_layout')

@section('content')
<div>
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('admin/images/galleryImages/aboutus_head.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
            About Us
        </h2>
    </section>


    <!-- Content page -->
    <section class="bg0 p-t-75 p-b-120">
        <div class="container">
            <div class="row p-b-148">
                <div class="col-md-7 col-lg-8">
                    <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            Our Story
                        </h3>

                        <p class="stext-113 cl6 p-b-26">
                            We are people who love art and love the poetic beauty of the world, to respond to Earth Day and useful experiences for society and for human life to become more meaningful and better. , so we established painting associations and web paintings to bring paintings to each person and house to honor the beauty and creativity of a small group of people who love and have loved art. We want to connect. Through you, you can awaken your potential and create a community that loves paintings and art.
                        </p>

                        <p class="stext-113 cl6 p-b-26">
                            We used to have creative minds as children but conditions and life have sunk those dreams and I believe we will help you reawaken those artistic abilities of yourself or others. In your family, especially the children are in the age of self-discovery. Please don't stifle children's dreams and bury their artistic talents.
                        </p>

                        <p class="stext-113 cl6 p-b-26">
                            Any questions? Let us know in store at 123 Dien Bien Phu Street, Ward 22, Binh Thanh District, Ho Chi Minh City or call us on (+84) 932152110
                        </p>
                    </div>
                </div>

                <div class="col-11 col-md-5 col-lg-4 m-lr-auto">
                    <div class="how-bor1 ">
                        <div class="hov-img0">
                            <img src="{{asset('admin/images/galleryImages')}}/aboutus1.jpg" alt="IMG">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="order-md-2 col-md-7 col-lg-8 p-b-30">
                    <div class="p-t-7 p-l-85 p-l-15-lg p-l-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            Our Mission
                        </h3>

                        <p class="stext-113 cl6 p-b-26">
                            We have a mission to bring art and beauty from soulful photos to everyone's lives, making our lives more colorful and interesting, reducing stress and fatigue, and helping. Let your creative imagination fly further and further. Furthermore, you will see life become better and more positive after the hustle and bustle of life.
                        </p>

                        <div class="bor16 p-l-29 p-b-9 m-t-22">
                            <p class="stext-114 cl6 p-r-40 p-b-11">
                                Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn't really do it, they just saw something. It seemed obvious to them after a while.
                            </p>

                            <span class="stext-111 cl8">
                                - Steve Job’s
                            </span>
                        </div>
                    </div>
                </div>

                <div class="order-md-1 col-11 col-md-5 col-lg-4 m-lr-auto p-b-30">
                    <div class="how-bor2">
                        <div class="hov-img0">
                            <img src="{{asset('admin/images/galleryImages')}}/aboutus2.jpg" alt="IMG">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection