@extends('layouts.user_layout')

@section('content')
<section class="sec-product-detail bg0 p-t-65 p-b-60">
	@foreach ($paintings as $painting)
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-7 p-b-30">
				<div class="p-l-25 p-r-30 p-lr-0-lg">
					<div class="wrap-slick3 flex-sb flex-w">
						<div class="slick3 gallery-lb">
							<div class="item-slick3" data-thumb="{{asset('user/coza')}}/images/product-detail-01.jpg">
								<div class="wrap-pic-w pos-relative">
									<img src="{{asset('admin/images/paintingImages')}}/{{$painting->photoName}}" alt="IMG-PRODUCT">

									<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{asset('admin/images/paintingImages')}}/{{$painting->photoName}}">
										<i class="fa fa-expand"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="col-md-6 col-lg-5 p-b-30">
				<form method="get" action="/proceed_addtocart">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							{{$painting->name}}
						</h4>

						<span class="mtext-106 cl2">
							${{$painting->price}}
						</span>
						<br>
						<span class="stext-102 cl6 size-206" style="font-size: medium">
							Stock: {{$painting->quantity}}
						</span>

						<p class="stext-102 cl3 p-t-23">
							{{$painting->description}}
						</p>

						<!--  -->
						<div class="p-t-33">
							<div class="flex-w p-b-10">
								<div class="size-204 flex-w flex-m respon6-next">
									<div class="wrap-num-product flex-w m-r-20 m-tb-10">
										<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-minus"></i>
										</div>

										<input class="mtext-104 cl3 txt-center num-product" type="number" name="num_painting" id="num_painting" value="1" required>

										<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-plus"></i>
										</div>
									</div>

									<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
										Add to cart
									</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>

		</div>

		<div class="bor10 m-t-50 p-t-43 p-b-40">
			<!-- Tab01 -->
			<div class="tab01">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item p-b-10">
						<a class="nav-link active" data-toggle="tab" href="#information" role="tab">Detailed information</a>
					</li>

					<!-- <li class="nav-item p-b-10">
						<a class="nav-link" data-toggle="tab" href="#description" role="tab">Description</a>
					</li> -->

					<li class="nav-item p-b-10">
						<a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews ({{$count_painting_reviews}})</a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content p-t-43">

					<!-- - -->
					<div class="tab-pane fade show active" id="information" role="tabpanel">
						<div class="row">
							<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto d-flex justify-content-center">
								<ul class="p-lr-28 p-lr-15-sm">
									@foreach($paintings as $painting)
									<li class="flex-w flex-t p-b-7">
										<span class="stext-102 cl3 size-205">
											Artist
										</span>

										<span class="stext-102 cl6 size-206">
											{{$painting->artistName}}
										</span>
									</li>

									<li class="flex-w flex-t p-b-7">
										<span class="stext-102 cl3 size-205">
											Dimensions
										</span>

										<span class="stext-102 cl6 size-206">
											{{$painting->width}} x {{$painting->height}} (cm)
										</span>
									</li>

									<li class="flex-w flex-t p-b-7">
										<span class="stext-102 cl3 size-205">
											Style
										</span>

										<span class="stext-102 cl6 size-206">
											{{$painting->styleName}}
										</span>
									</li>

									<li class="flex-w flex-t p-b-7">
										<span class="stext-102 cl3 size-205">
											Surface
										</span>

										<span class="stext-102 cl6 size-206">
											{{$painting->surfaceName}}
										</span>
									</li>

									<li class="flex-w flex-t p-b-7">
										<span class="stext-102 cl3 size-205">
											Color
										</span>

										<span class="stext-102 cl6 size-206">
											{{$painting->colorName}}
										</span>
									</li>
									@endforeach
								</ul>
							</div>
						</div>
					</div>

					<!-- - -->
					<!-- <div class="tab-pane fade" id="description" role="tabpanel">
						<div class="how-pos2 p-lr-15-md">
							<p class="stext-102 cl6">
								{{$painting->description}}
							</p>
						</div>
					</div> -->

					<!-- - -->
					<div class="tab-pane fade" id="reviews" role="tabpanel">
						<div class="row">
							<div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
								<div class="p-b-30 m-lr-15-sm">
									<!-- Add review -->
									<form method="get" action="/proceed_submit_review" class="w-full">
										<h5 class="mtext-108 cl2">
											Add a review
										</h5>

										<div class="flex-w flex-m p-t-16 p-b-8">
											<span class="stext-102 cl3 m-r-16">
												Your Rating
											</span>

											<span class="wrap-rating fs-18 cl11 pointer">
												<i class="item-rating pointer zmdi zmdi-star-outline"></i>
												<i class="item-rating pointer zmdi zmdi-star-outline"></i>
												<i class="item-rating pointer zmdi zmdi-star-outline"></i>
												<i class="item-rating pointer zmdi zmdi-star-outline"></i>
												<i class="item-rating pointer zmdi zmdi-star-outline"></i>
												<input class="dis-none" type="number" name="rating">
											</span>
										</div>

										<div class="row p-b-25">
											<div class="col-12 p-b-5">
												<label class="stext-102 cl3" for="review">Content</label>
												<textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" id="review" name="review_content" required></textarea>
											</div>
										</div>

										<button class="flex-c-m stext-101 cl0 size-112 bg7 bor11 hov-btn3 p-lr-15 trans-04 m-b-10" name="btnSubmitReview">
											Submit
										</button>
									</form>

									<!-- Review -->
									<div class="flex-w flex-t p-t-68">
										@foreach ($painting_reviews as $painting_review)
										<div class="size-207 p-b-24">
											<div class="flex-w flex-sb-m p-b-17">
												<span class="mtext-107 cl2 p-r-20">
													{{$painting_review->accountName}}
												</span>

												<span class="fs-18 cl11">
													@if (isset($painting_review->reviewRating))
													@for ($i = 0; $i < $painting_review->reviewRating; $i++)
														<i class="zmdi zmdi-star"></i>
														@endfor
														@else
														<i class="zmdi zmdi-star-outline"></i>
														@endif
														<!-- <i class="zmdi zmdi-star"></i>
													<i class="zmdi zmdi-star"></i>
													<i class="zmdi zmdi-star"></i>
													<i class="zmdi zmdi-star"></i>
													<i class="zmdi zmdi-star-half"></i> -->
												</span>
											</div>

											<p class="stext-102 cl6">
												{{$painting_review->reviewContent}}
											</p>
										</div>
										@endforeach
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endforeach
</section>

<script>
	const textInputQuantity = document.getElementById('num_painting');

	textInputQuantity.addEventListener('keypress', function(event) {
		// Regular expression to match only digits greater than 0
		const validInput = /^\d*[1-9]\d*$/;
		const char = String.fromCharCode(event.charCode);

		// Check if the character is a digit greater than 0 or backspace key
		if (!validInput.test(textInputQuantity.value + char) && char !== '\b') {
			event.preventDefault();
		}
	});
</script>
@endsection