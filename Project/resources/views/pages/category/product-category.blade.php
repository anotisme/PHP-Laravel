@extends('layouts.app')

@section('content')
<div class="top-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h3 class="category-heading">{{ $products_by_category->name }} categories</h3>
            </div>
        </div>
    </div>
</div>
<div id="content" class="content-with-sidebar-right blog-page-list center-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8">
            <?php $products = \DB::table('products')->where('category_id', $products_by_category->id)->get(); ?>
            @foreach ($products as $product)
                <div class="post-container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5">
                            <a href="/products/{{ $product->name }}">
                                <img style="min-height: 250px;" src="/storage/{{ $product->image }}" class="card-img-top wp-post-image" alt="" />
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-7">
                            <div class="post-right-side">
                                <a href="/products/{{ $product->name }}" class="post-title">
                                    <h2 itemprop="headline">{{ $product->name }}</h2>
                                </a>
                                <div class="post-meta post-meta-one">
                                    <span class="post-meta-author">by
                                        <a href="/" class="bypostauthor" itemprop="url" rel="author">
                                            shufflehound
                                        </a>
                                    </span>
                                    <time class="updated semantic" itemprop="dateModified" datetime="{{ $product->created_at }}"></time>
                                    <a href="/categories/{{ $product->id }}" class="post-meta-date sh-default-color">{{ date('M d, Y', strtotime($product->created_at)) }}</a>
                                </div>
                                <div class="post-content" itemprop="text">
                                    {{ str_limit(strip_tags($product->description), 200) }}
                                </div>
                                <div class="post-meta post-meta-two">
                                    <div class="sh-columns post-meta-comments">
                                        <span class="post-meta-categories">
                                            <i aria-hidden="true" class="fa fa-tags"></i>
                                            <a href="/category/{{ $products_by_category->name }}" rel="category tag">{{ $products_by_category->name }}</a>
                                        </span>
                                        <meta itemprop="interactionCount" content="UserComments:0">
                                        <a href="#comments" class="post-meta-comments">
                                            <i aria-hidden="true" class="fa fa-comments-o"></i>0
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
                @include('inc.sidebar')
            </div>
        </div>
    </div>
</div>
@endsection
