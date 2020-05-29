@extends('layouts.app')

@section('content')
    <div class="top-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-8">
                    <h3>Products</h3>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    breadcrumb
                </div>
            </div>
        </div>
    </div>
    <div class="center-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-8">
                    <div class="product-content">
                        <div class="post-meta-thumb">
                            <a href="/storage/{{ $product->image }}" class="sh-overlay-item sh-table-cell" data-rel="lightcase">
                                <img src="/storage/{{ $product->image }}" class="post-image" alt="">
                            </a>
                        </div>
                        <a href="/products/{{ $product->id }}" class="post-title">
                            <h1 itemprop="headline">{{ $product->name }}</h1>
                        </a>
                        <div class="post-meta-data sh-columns">
                            <div class="post-meta post-meta-one">
                                <span class="post-meta-author">by
                                    <a href="https://jevelin.shufflehound.com/author/shufflehound/" class="bypostauthor" itemprop="url" rel="author">
                                        shufflehound
                                    </a>
                                </span>
                                <time class="updated semantic" itemprop="dateModified" datetime="{{ $product->created_at }}"></time>
                                <a href="/products/{{ $product->id }}" class="post-meta-date sh-default-color">{{ date('M d, Y', strtotime($product->created_at)) }}</a>
                            </div>
                            <div class="post-meta post-meta-two">
                                <div class="sh-columns post-meta-comments">
                                    <span class="post-meta-categories">
                                        <i aria-hidden="true" class="fa fa-tags"></i>
                                        <?php $category = \DB::table('categories')->where('id', $product->category_id)->first(); ?>
                                        <a href="/category/{{ $category->name }}" rel="category tag">{{ $category->name }}</a>
                                    </span>
                                    <meta itemprop="interactionCount" content="UserComments:0">
                                    <a href="#comments" class="post-meta-comments">
                                        <i class="fa fa-comments-o" aria-hidden="true"></i>0
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="post-content" itemprop="text">
                            {{ str_limit(strip_tags($product->description), 200) }}
                        </div>
                    </div>
                    <div class="related-posts">
                        <div class="sh-related-posts-title">
                            <h3>Related Posts</h3>
                        </div>
                        <?php
                            $related_products = \DB::table('products')->where('category_id', $product->category_id)
                                                                      ->Where('id', '!=', $product->id)->get();
                        ?>
                        <div class="row">
                            @foreach ($related_products as $related_product)
                            <div class="col-xs-12 col-sm-4 col-md-4">
                                <div class="post-container">
                                    <span class="sh-popover-mini sh- fadeIn animated" style="visibility: visible; animation-name: fadeIn;">{{ $related_product->products_category }}</span>
                                    <div class="post-meta-thumb">
                                        <img width="660" height="420" src="/storage/{{ $related_product->image }}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="">
                                    </div>
                                    <a href="/products/{{ $related_product->id }}" class="post-title">
                                        <h2 itemprop="headline">{{ str_limit($related_product->title, 20) }}</h2>
                                    </a>
                                    <div class="post-meta post-meta-two">
                                        <div class="sh-columns post-meta-comments">
                                            <span class="post-meta-categories">
                                                <i aria-hidden="true" class="fa fa-tags"></i>
                                                <a href="/products-category/{{ $related_product->products_category }}" rel="category tag">{{ $related_product->products_category }}</a>
                                            </span>
                                            <meta itemprop="interactionCount" content="UserComments:0">
                                            <a href="#comments" class="post-meta-comments">
                                                <i class="fa fa-comments-o" aria-hidden="true"></i>0
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    @include('inc.sidebar')
                </div>
            </div>
        </div>
    </div>
@endsection
