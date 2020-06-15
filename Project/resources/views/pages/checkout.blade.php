@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 45px; padding-bottom: 45px;">

    @if(\Cart::getTotalQuantity()>0)
    {{ dd(Auth::user()) }}
        @guest
            <div class="woocommerce-notice woocommerce-notice--info woocommerce-info">
                <h4>You have to login to use this feature!</h4>
                <p>Click <a href="/login">here</a> to login.</p>
            </div>
        @else
            @foreach($cartCollection as $item)
            <form name="checkout" method="post" class="checkout woocommerce-checkout" action="/shop/checkout/" enctype="multipart/form-data" novalidate="novalidate">
                <h3 id="order_review_heading">Your Information</h3>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <input type="text" class="input-text " name="first_name" id="first_name" placeholder="" value="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <input type="text" class="input-text " name="country" id="country" placeholder="" value="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <input type="text" class="input-text " name="street" id="street" placeholder="" value="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <input type="text" class="input-text " name="phone" id="phone" placeholder="" value="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <input type="text" class="input-text " name="email" id="company_name" placeholder="" value="">
                    </div>
                </div>
                <h3 id="order_review_heading">Your order</h3>
                <div id="order_review" class="woocommerce-checkout-review-order">
                    <table class="shop_table woocommerce-checkout-review-order-table">
                        <thead>
                            <tr>
                                <th class="product-name">Product</th>
                                <th class="product-total">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="cart_item">
                                <td class="product-name">
                                    {{ $item->name }} &nbsp;
                                    <strong class="product-quantity">×&nbsp;{{ $item->quantity }}</strong>
                                </td>
                                <td class="product-total">
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>{{ $item->price }}
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="cart-subtotal">
                                <th>Subtotal</th>
                                <td>
                                    <span class="woocommerce-Price-amount amount">
                                        <span class="woocommerce-Price-currencySymbol">$</span>{{ \Cart::get($item->id)->getPriceSum() }}
                                    </span>
                                </td>
                            </tr>
                            <tr class="order-total">
                                <th>Total</th>
                                <td><strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ \Cart::getTotal() }}</span></strong> </td>
                            </tr>
                        </tfoot>
                    </table>

                    <div id="payment" class="woocommerce-checkout-payment woocommerce">
                        <ul class="wc_payment_methods payment_methods methods">
                            <li class="woocommerce-notice woocommerce-notice--info woocommerce-info">
                            Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.
                            </li>
                        </ul>
                        <div class="form-row place-order">
                            <noscript>
                                Since your browser does not support JavaScript, or it is disabled, please ensure you click the <em>Update Totals</em> button before placing your order. You may be charged more than the amount stated above if you fail to do so.			<br/><button type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Update totals">Update totals</button>
                            </noscript>

                            <div class="woocommerce-terms-and-conditions-wrapper">
                                <div class="woocommerce-privacy-policy-text"></div>
                            </div>
                            <button type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order">Place order</a>

                            <input type="hidden" id="woocommerce-process-checkout-nonce" name="woocommerce-process-checkout-nonce" value="9d736950db">
                            <input type="hidden" name="_wp_http_referer" value="/?wc-ajax=update_order_review">
                        </div>
                    </div>
                </div>
            </form>
            @endforeach
        @endguest
    @else
    <div class="woocommerce"><div class="woocommerce-notices-wrapper"></div><p class="cart-empty woocommerce-info">Your cart is currently empty.</p>
        <p class="cart-empty"></p>
        <div class="sh-nothing-found sh-table">
            <div class="sh-table-cell-top">
                <i class="fa fa-compass" aria-hidden="true"></i>
            </div>
            <div class="sh-table-cell-top">
                <h2>Cart is empty</h2>
                <p>Looks like there is no items in your cart.</p>
            </div>
        </div>
        <div class="sh-nothing-found-big">
            <span>Your cart is</span>
            <div>Currently empty</div>
        </div>
        <div class="woocommerce-notices-wrapper"></div>
        <p class="cart-empty woocommerce-info">Your cart is currently empty.</p>
        <p class="return-to-shop">
            <a class="button wc-backward" href="/shop/">Return to shop</a>
        </p>
    </div>
    @endif

</div>

@endsection
