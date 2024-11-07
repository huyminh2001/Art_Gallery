@extends('layouts.user_layout')

@section('content')
<!-- Slider -->
<section class="section-slide">
	<div class="wrap-slick1 rs1-slick1">
		<div class="slick1">
			@foreach($poster_1 as $poster_1_item)
			<div class="item-slick1" style="background-image: url(admin/images/galleryImages/{{$poster_1_item->name}});">
				<div class="container h-full">
					<div class="flex-col-l-m h-full p-t-100 p-b-30">
						<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
							<span class="ltext-202 cl2 respon2">
								Inspiring. Timeless. Original.
							</span>
						</div>

						<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
							<h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
								The Ideal Art.
							</h2>
						</div>

						<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
							<a href="{{url('/paintings')}}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
								Browse Now
							</a>
						</div>
					</div>
				</div>
			</div>
			@endforeach

			@foreach($poster_2 as $poster_2_item)
			<div class="item-slick1" style="background-image: url(admin/images/galleryImages/{{$poster_2_item->name}});">
				<div class="container h-full">
					<div class="flex-col-l-m h-full p-t-100 p-b-30">
						<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
							<span class="ltext-202 cl2 respon2">
								Universal Passion at Your Doorstep
							</span>
						</div>

						<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
							<h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
								Delivering Inspiration Worldwide
							</h2>
						</div>

						<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
							<a href="{{url('/paintings')}}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
								Browse Now
							</a>
						</div>
					</div>
				</div>
			</div>
			@endforeach

			@foreach($poster_3 as $poster_3_item)
			<div class="item-slick1" style="background-image: url(admin/images/galleryImages/{{$poster_3_item->name}});">
				<div class="container h-full">
					<div class="flex-col-l-m h-full p-t-100 p-b-30">
						<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
							<span class="ltext-202 cl2 respon2">
								Inspiring Community
							</span>
						</div>

						<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
							<h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
								THINK UNLIMITED.
							</h2>
						</div>

						<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
							<a href="{{url('/gallery')}}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
								Experience Now
							</a>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>


<!-- Banner -->
<div class="sec-banner bg0">
	<div class="flex-w flex-c-m">
		<div class="size-202 m-lr-auto respon4">
			<!-- Block1 -->
			<div class="block1 wrap-pic-w">
				@foreach($poster_aboutUs as $poster_aboutUs_item)
				<img height="240px" src="{{asset('admin/images/galleryImages')}}/{{$poster_aboutUs_item->name}}" alt="IMG-BANNER">
				@endforeach

				<a href="{{url('/aboutus')}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
					<div class="block1-txt-child1 flex-col-l">
						<span class="block1-name ltext-102 trans-04 p-b-8">
							Our Story
						</span>

						<span class="block1-info stext-102 trans-04">
							Inspiring Desire
						</span>
					</div>

					<div class="block1-txt-child2 p-b-4 trans-05">
						<div class="block1-link stext-101 cl0 trans-09">
							See More
						</div>
					</div>
				</a>
			</div>
		</div>

		<div class="size-202 m-lr-auto respon4">
			<!-- Block1 -->
			<div class="block1 wrap-pic-w">
				@foreach($poster_gallery as $poster_gallery_item)
				<img height="240px" src="{{asset('admin/images/galleryImages')}}/{{$poster_gallery_item->name}}" alt="IMG-BANNER">
				@endforeach

				<a href="{{url('/gallery')}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
					<div class="block1-txt-child1 flex-col-l">
						<span class="block1-name ltext-102 trans-04 p-b-8">
							Gallery
						</span>

						<span class="block1-info stext-102 trans-04">
							For your inspiration
						</span>
					</div>

					<div class="block1-txt-child2 p-b-4 trans-05">
						<div class="block1-link stext-101 cl0 trans-09">
							Experience Now
						</div>
					</div>
				</a>
			</div>
		</div>

		<div class="size-202 m-lr-auto respon4">
			<!-- Block1 -->
			<div class="block1 wrap-pic-w">
				@foreach($poster_contact as $poster_contact_item)
				<img height="240px" src="{{asset('admin/images/galleryImages')}}/{{$poster_contact_item->name}}" alt="IMG-BANNER">
				@endforeach

				<a href="{{url('/contact')}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
					<div class="block1-txt-child1 flex-col-l">
						<span class="block1-name ltext-102 trans-04 p-b-8">
							Contact Us
						</span>

						<span class="block1-info stext-102 trans-04">
							At your service
						</span>
					</div>

					<div class="block1-txt-child2 p-b-4 trans-05">
						<div class="block1-link stext-101 cl0 trans-09">
							See More
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
@endsection