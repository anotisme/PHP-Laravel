@extends('layouts.app')

@section('content')
    <div class="top-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h3>Products</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="center-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="product-content">
                        <div class="post-meta-thumb">
                            <a href="/storage/{{ $product->image }}" class="sh-overlay-item sh-table-cell" data-rel="lightcase">
                                <img src="/storage/{{ $product->image }}" class="post-image" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="summary entry-summary product">
                        <h1 itemprop="name" class="product_title entry-title">{{ $product->name }}</h1>
                        <div class="woocommerce-product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                <span style="width:100%">
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>

                        <p class="price">
                            <span class="woocommerce-Price-amount amount">
                                <span class="woocommerce-Price-currencySymbol">$</span>
                                {{ $product->price }}
                            </span>
                        </p>

                        <div class="woo-seperator-line"></div>

                        <div class="woo-short-description" itemprop="description">
                            <p>{{ str_limit(strip_tags($product->description), 200) }}</p>
                        </div>

                        <form class="cart" action="/products/{{ $product->sku }}" method="post" enctype="multipart/form-data">
                            <div class="quantity sh-increase-numbers">
                                <span class="sh-noselect sh-increase-number-down">
                                    <i class="fa fa-arrow-down" aria-hidden="true"></i>
                                </span>
                                <label class="sh-quantity-number" for="quantity_5ed5d542854e4" type="text">{{ $product->name }} quantity</label>
                                <input type="text" id="quantity_5ed5d542854e4" class="sh-quantity-number" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" inputmode="numeric">
                                <span class="sh-noselect sh-increase-number-up">
                                    <i class="fa fa-arrow-up" aria-hidden="true"></i>
                                </span>
                            </div>
                            <button type="submit" name="add-to-cart" value="2684" class="single_add_to_cart_button button alt"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to cart</button>
                        </form>

                        <div class="product_meta">
                            <span class="posted_in">
                                <span class="woo-meta-title">Category:</span>
                                <?php $category = \DB::table('categories')->where('id', $product->category_id)->first(); ?>
                                <a href="/category/{{ $category->name }}" rel="tag">{{ $category->name }}</a>
                            </span>
                        </div>

                        <div class="woocommerce-tabs wc-tabs-wrapper">
                            <nav class="tabs wc-tabs">
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-description-tab" data-toggle="tab" href="#nav-description" role="tab" aria-controls="nav-description" aria-selected="true">Description</a>
                                    <a class="nav-item nav-link" id="nav-info-tab" data-toggle="tab" href="#nav-info" role="tab" aria-controls="nav-info" aria-selected="false">Additional information</a>
                                    <a class="nav-item nav-link" id="nav-review-tab" data-toggle="tab" href="#nav-review" role="tab" aria-controls="nav-review" aria-selected="false">Reviews (1)</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab">
                                    <h2>Product Description</h2>
                                    <p>Nullam ut odio ultrices, imperdiet arcu a, tempor nulla. In hac habitasse platea dictumst.</p>
                                </div>
                                <div class="tab-pane fade" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
                                    <h2>Additional information</h2>
                                    <table class="woocommerce-product-attributes shop_attributes">
                                        <tbody>
                                            <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--weight">
                                                <th class="woocommerce-product-attributes-item__label">Weight</th>
                                                <td class="woocommerce-product-attributes-item__value">{{ $product->weight }}</td>
                                            </tr>
                                            <tr class="woocommerce-product-attributes-item woocommerce-product-attributes-item--dimensions">
                                                <th class="woocommerce-product-attributes-item__label">Dimensions</th>
                                                <td class="woocommerce-product-attributes-item__value">{{ $product->dimensions }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab">
                                    <div id="reviews" class="woocommerce-Reviews">
                                        <div id="comments">
                                            <h2 class="woocommerce-Reviews-title">
                                                1 review for <span>{{ $product->name }}</span>
                                            </h2>
                                            <ol class="commentlist">
                                                <li itemprop="review" itemscope="" itemtype="http://schema.org/Review" class="comment byuser bypostauthor" id="li-comment-16">
                                                    <div id="comment-16" class="comment_container">
                                                        <img alt="" src="https://secure.gravatar.com/avatar/8ca3fe8440883023010924dd86cb3218?s=60&amp;d=mm&amp;r=g" class="avatar avatar-60 photo" height="60" width="60">
                                                        <div class="comment-text">
                                                            <div class="star-rating" role="img" aria-label="Rated 5 out of 5">
                                                                <span style="width:100%">Rated <strong class="rating">5</strong> out of 5</span>
                                                            </div>
                                                            <p class="meta">
                                                                <strong class="woocommerce-review__author">Shufflehound </strong>
                                                                <span class="woocommerce-review__dash">–</span>
                                                                <time class="woocommerce-review__published-date" datetime="2016-01-28T14:04:45+02:00">January 28, 2016</time>
                                                            </p>
                                                            <div class="description">
                                                                <p>Nice one, love it!</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li><!-- #comment-## -->
                                            </ol>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-8 col-sm-8">
                    <?php
                        $related_products = \DB::table('products')->where('category_id', $product->category_id)
                                                                    ->Where('id', '!=', $product->id)->limit(3)->get();
                    ?>
                    @if (!$related_products->isEmpty())
                    <div class="related-products products">
                        <div class="sh-related-posts-title">
                            <h3>Related Products</h3>
                        </div>
                        <div class="row">
                            @foreach ($related_products as $related_product)
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="product-item">
                                    <a href="{{ $related_product->name }}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                    <div class="test">
                                        <span class="sh-popover-mini sh- fadeIn animated" style="visibility: visible; animation-name: fadeIn;">Sale!</span>
                                        <img width="300" height="300" src="/storage/{{ $related_product->image }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" sizes="(max-width: 300px) 100vw, 300px">
                                            <div class="secondary-image-container">
                                            <img width="300" height="300" src="/storage/{{ $related_product->image }}" class="secondary-image attachment-shop-catalog" alt="" sizes="(max-width: 300px) 100vw, 300px">
                                            </div>
                                        </div>
                                    </a>
                                    <div class="sh-woo-post-content-container">
                                        <a href="/products/{{ $related_product->name }}" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                            <h2 class="product-title">{{ $related_product->name }}</h2>
                                            <div class="additional-information sh-default-color">
                                            {{ $category->name }}
                                            </div>
                                            <span class="price">
                                                <del>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                                        {{ $related_product->price }}
                                                    </span>
                                                </del>
                                                <ins>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">$</span>
                                                        {{ $related_product->price }}
                                                    </span>
                                                </ins>
                                            </span>
                                        </a>
                                        <a href="?add-to-cart=2642" class="add_to_cart_button" rel="nofollow">Add to cart
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @else
                    <div class="related-not-found">
                        <h3>There is no related products</h3>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
