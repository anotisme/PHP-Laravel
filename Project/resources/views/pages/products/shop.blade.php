@extends('layouts.app')

@section('content')
    <div class="shop container-fluid sh-titlebar sh-titlebar-center sh-titlebar-light sh-titlebar-parallax sh-titlebar-mobile-layout-compact sh-titlebar-mobile-title-on">
        <div class="container">
            <div class="sh-table sh-titlebar-height-medium">
                <div class="sh-table-cell">
                    <div class="titlebar-title">
                        <h2 class="titlebar-title-h1" style="color: #fff;">Shop</h2>
                        <div class="sh-titlebar-desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container product-content">
        <div class="row">
            <div class="col-sm-4">
                <div id="sidebar" class="sidebar-left">
                    @include('inc.sidebar')
                </div>
            </div>
            <div class="col-sm-8">
                <div class="products">
                    <div class="row">
                    @foreach($products as $product)
                        <div class="col-sm-4">
                            <div class="product-item">
                                <a href="/products/{{ $product->name }}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                <div class="test">
                                    <span class="sh-popover-mini sh- fadeIn animated" style="visibility: visible; animation-name: fadeIn;">Sale!</span>
                                    <img width="300" height="300" src="/storage/{{ $product->image }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" sizes="(max-width: 300px) 100vw, 300px">
                                        <div class="secondary-image-container">
                                        <img width="300" height="300" src="/storage/{{ $product->image }}" class="secondary-image attachment-shop-catalog" alt="" sizes="(max-width: 300px) 100vw, 300px">
                                        </div>
                                    </div>
                                </a>
                                <div class="sh-woo-post-content-container">
                                    <a href="/products/{{ $product->name }}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                        <h2 class="product-title">{{ $product->name }}</h2>
                                        <div class="additional-information sh-default-color">
                                        <?php $category_id = \DB::table('categories')->where('id', $product->category_id)->first(); ?>
                                        {{ $category_id->name }}
                                        </div>
                                        <span class="price">
                                            <del>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>
                                                    {{ $product->price }}
                                                </span>
                                            </del>
                                            <ins>
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">$</span>
                                                    {{ $product->price }}
                                                </span>
                                            </ins>
                                        </span>
                                    </a>
                                    <form class="cart" action="/add-to-cart/{{ $product->id }}" method="put" enctype="multipart/form-data">
                                        <input type="hidden" value="1" id="quantity" class="quantity" name="quantity" >
                                        <button type="submit" class="add_to_cart_button"><i aria-hidden="true" class="fa fa-shopping-cart"></i> Add to cart</button>
                                    </form>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>

                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection


