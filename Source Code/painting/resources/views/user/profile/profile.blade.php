@extends('layouts.user_layout')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-10 col-lg-7 col-xl-5 m-b-50">
            <div class="bor10 p-lr-40 p-t-30 p-b-40  p-lr-15-sm">
                <h4 class="mtext-109 cl2 p-b-30">
                    Purchase History
                </h4>
                <!-- start loop -->
                @foreach($purchasedItems as $purchasedItem)
                <div class="flex-w flex-t bor12 p-b-13 p-t-13">
                    <div class="size-208">
                        <span class="stext-110 cl2">
                            <b>{{$purchasedItem->paintingName}}</b>
                        </span>
                    </div>

                    <div class="size-208">
                        <span class="stext-110 cl2">
                            <b>x{{$purchasedItem->paintingQuantity}}</b>
                        </span>
                    </div>

                    <div class="size-208">
                        <span class="stext-110 cl2" style="color: grey;">
                            <i>Order: #{{$purchasedItem->id}}</i>
                        </span>
                    </div>

                    <div class="size-209">
                        <span class="stext-110 cl2" style="color: grey;">
                            <i>{{$purchasedItem->created_at}}</i>
                        </span>
                    </div>

                    <div class="size-208">
                        <span class="stext-110 cl2" style="color: grey;">
                            <i>{{$purchasedItem->paymentName}}</i>
                        </span>
                    </div>

                    <div class="size-209">
                        <span class="stext-110 cl2" style="color: grey;">
                            <i>At {{$purchasedItem->delivery_address}}</i>
                        </span>
                    </div>

                    <div class="size-208">
                        <span class="stext-110 cl2">
                            <img src="{{asset('admin/images/paintingImages')}}/{{$purchasedItem->photoName}}" width="100px" alt="product_image">
                        </span>
                    </div>

                    <div class="size-209">
                        <span class="stext-110 cl2">
                            &nbsp;
                        </span>
                    </div>
                </div>
                @endforeach
                <!-- end loop -->
            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection