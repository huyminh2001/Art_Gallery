@extends('layouts.user_layout')

@section('content')
<form method="get" action="{{url('/proceed_checkout')}}" class="bg0 p-t-75 p-b-85">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                <div class="m-l-25 m-r--38 m-lr-0-xl">
                    <div class="wrap-table-shopping-cart">
                        <table class="table-shopping-cart">
                            <tr class="table_head">
                                <th class="column-1">Product</th>
                                <th class="column-2"></th>
                                <th class="column-3">Price</th>
                                <th class="column-4" style="text-align: center">Quantity</th>
                                <th class="column-5">Action</th>
                            </tr>

                            @foreach ($carts as $cart)
                            <tr class="table_row">
                                <td class="column-1">
                                    <div class="how-itemcart1">
                                        <a href="/paintings/painting_details/{{$cart->paintingId}}"><img src="{{asset('admin/images/paintingImages')}}/{{$cart->photoName}}" alt="IMG"></a>
                                    </div>
                                </td>
                                <td class="column-2"><a style="color: grey;" href="/paintings/painting_details/{{$cart->paintingId}}">{{$cart->paintingName}}</a></td>
                                <td class="column-3">$<span class="unit-price">{{$cart->paintingPrice}}</span></td>
                                <td class="column-4" style="text-align: center">
                                    <span class="unit-price">{{$cart->quantity}}</span>
                                    <!-- <div class="wrap-num-product flex-w m-l-auto m-r-0"> -->

                                    <!-- <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-minus"></i>
                                        </div> -->

                                    <!-- [EDIT-DONE] Quantity (***thay cart->status thanh quantity sau khi sua***) -->
                                    <!-- <input class="mtext-104 cl3 txt-center num-product quantity-input" type="number" name="cart_quantity_index{{$loop->index}}" id="cart_quantity_input" value="{{$cart->quantity}}" required> -->

                                    <!-- <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                            <i class="fs-16 zmdi zmdi-plus"></i>
                                        </div> -->
                                    <!-- </div> -->
                                </td>
                                <td class="column-5 mr-0">
                                    <a href="/paintings/painting_details/{{$cart->paintingId}}"><i class="zmdi zmdi-plus-circle-o fa-lg" style="color: rgb(56,182,255);" onMouseOut="this.style.color='rgb(56,182,255)'" onMouseOver="this.style.color='rgb(0,73,115)'"></i></a>
                                    <a href="/proceed_cart_item_delete/{{$cart->id}}"><i class="zmdi zmdi-minus-circle-outline fa-lg" style="color: rgb(237,94,104);" onMouseOut="this.style.color='rgb(237,94,104)'" onMouseOver="this.style.color='rgb(191,0,0)'"></i></a><span class="total-price"></span>
                                </td>
                                <!-- <td class="column-6"><a href="/proceed_cart_item_delete/{{$cart->id}}"><i class="zmdi zmdi-minus-circle-outline fa-lg" style="color: rgb(237,94,104);" onMouseOut="this.style.color='rgb(237,94,104)'" onMouseOver="this.style.color='rgb(191,0,0)'"></i></a></td> -->
                            </tr>
                            @endforeach
                        </table>
                    </div>

                    <!-- <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                        <div class="flex-w flex-m m-r-20 m-tb-5">
                            <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">

                            <div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                                Apply coupon
                            </div>
                        </div>

                        <div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
                            Update Cart
                        </div>
                    </div> -->
                </div>
            </div>

            <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                    <h4 class="mtext-109 cl2 p-b-30">
                        Cart Totals
                    </h4>

                    <!-- <div class="flex-w flex-t bor12 p-b-13">
                        <div class="size-208">
                            <span class="stext-110 cl2">
                                Subtotal:
                            </span>
                        </div>

                        <div class="size-209">
                            <span class="mtext-110 cl2">
                                $@@@@@
                            </span>
                        </div>
                    </div> -->

                    <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                        <div class="size-208 w-full-ssm">
                            <span class="stext-110 cl2">
                                Shipping:
                            </span>
                        </div>

                        <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                            <div>
                                <div class="bor8 bg0 m-b-22">
                                    <input class="stext-111 cl8 plh3 size-111 p-lr-15" type="text" name="address" placeholder="Shipping Address" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                        <div class="size-208 w-full-ssm">
                            <span class="stext-110 cl2">
                                Payment:
                            </span>
                        </div>

                        <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                            <div>
                                <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                                    <select class="js-select2" name="payment_method_id">
                                        @foreach ($payments as $payment)
                                        <option value="{{$payment->id}}" {{$payment->id ? 'selected' : ''}}">{{$payment->name}}</option>
                                        @endforeach
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex-w flex-t p-t-27 p-b-33">
                        <div class="size-208">
                            <span class="mtext-101 cl2">
                                Total:
                            </span>
                        </div>

                        <div class="size-209 p-t-1">
                            <span class="mtext-110 cl2">
                                @php
                                $totalSumProduct = 0;
                                @endphp

                                @foreach($carts as $cart)
                                @php
                                $sumProduct = $cart->quantity * $cart->paintingPrice;
                                $totalSumProduct += $sumProduct;
                                @endphp
                                @endforeach

                                ${{$totalSumProduct}}
                            </span>
                        </div>
                    </div>

                    <button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer m-b-8" name="btnCheckOut">
                        Proceed to Checkout
                    </button>
                    @if ($errors->any() || session('error'))
                    <div class="alert alert-danger">
                        @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li style="padding-top: 7px; border-radius: 16px;">{{ $error }}</li>
                            @endforeach
                        </ul>
                        @endif
                        {{ session('error') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    // no space character allow
    // const textInputUsername = document.getElementById('cart_quantity_input');

    // textInputUsername.addEventListener('keypress', function(event) {
    //     const char = String.fromCharCode(event.charCode);
    //     if (char === ' ') {
    //         event.preventDefault();
    //     }
    // });

    // const textInputQuantity = document.getElementById('cart_quantity_input');

    // textInputQuantity.addEventListener('keypress', function(event) {
    //     // Regular expression to match only digits greater than 0
    //     const validInput = /^\d*[1-9]\d*$/;
    //     const char = String.fromCharCode(event.charCode);

    //     // Check if the character is a digit greater than 0 or backspace key
    //     if (!validInput.test(textInputQuantity.value + char) && char !== '\b') {
    //         event.preventDefault();
    //     }
    // });

    const quantityInputs = document.querySelectorAll('input[id="cart_quantity_input"]');

    quantityInputs.forEach(textInputQuantity => {
        textInputQuantity.addEventListener('keypress', function(event) {
            const validInput = /^\d*[1-9]\d*$/;
            const char = String.fromCharCode(event.charCode);

            if (!validInput.test(textInputQuantity.value + char) && char !== '\b') {
                event.preventDefault();
            }
        });
    });

    // const textInputPassword = document.getElementById('password');
    // textInputPassword.addEventListener('keypress', function(event) {
    //     const char = String.fromCharCode(event.charCode);
    //     if (char === ' ') {
    //         event.preventDefault();
    //     }
    // });

    // Total value changes
    function updateTotalPrice() {
        // Select all quantity input elements (consider using a class selector)
        var quantityInputs = $('.quantity-input');

        quantityInputs.each(function() {
            var unitPrice = Number($(this).data('unit-price')); // Get unit price from data attribute
            var quantity = Number($(this).val()); // Get quantity value

            // Validate quantity (optional, but recommended)
            if (isNaN(quantity) || quantity < 0) {
                quantity = 0; // Set quantity to 0 if invalid
            }

            var totalPrice = quantity * unitPrice;
            var totalPriceElement = $(this).siblings('.total-price'); // Find sibling total price element

            // Ensure total price element exists before updating
            if (totalPriceElement.length) {
                totalPriceElement.text('$' + totalPrice.toFixed(2)); // Update total price with formatting
            } else {
                console.warn("Total price element not found for quantity input.");
            }
        });
    }
</script>
@endsection