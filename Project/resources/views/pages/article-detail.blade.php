@extends('layouts.app')

@section('content')
    <div class="top-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-8">
                    <h3>Blog post</h3>
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
                    <div class="article-content">
                        <div class="post-meta-thumb">
                            <a href="/storage/{{ $article['image'] }}" class="sh-overlay-item sh-table-cell" data-rel="lightcase">
                                <img src="/storage/{{ $article['image'] }}" class="post-image" alt="">
                            </a>
                        </div>
                        <a href="/articles/{{ $article->id }}" class="post-title">
                            <h1 itemprop="headline">{{ $article->title }}</h1>
                        </a>
                        <div class="post-meta-data sh-columns">
                            <div class="post-meta post-meta-one">
                                <span class="post-meta-author">by
                                    <a href="https://jevelin.shufflehound.com/author/shufflehound/" class="bypostauthor" itemprop="url" rel="author">
                                        shufflehound
                                    </a>
                                </span>
                                <time class="updated semantic" itemprop="dateModified" datetime="{{ $article->created_at }}"></time>
                                <a href="https://jevelin.shufflehound.com/new-delivery-system/" class="post-meta-date sh-default-color">{{ date('M d, Y', strtotime($article->created_at)) }}</a>
                            </div>
                            <div class="post-meta post-meta-two">
                                <div class="sh-columns post-meta-comments">
                                    <span class="post-meta-categories">
                                        <i class="icon-tag"></i>
                                        <a href="https://jevelin.shufflehound.com/category/design/" rel="category tag">{{ $article->category }}</a>
                                    </span>
                                    <meta itemprop="interactionCount" content="UserComments:0">
                                    <a href="https://jevelin.shufflehound.com/new-delivery-system/#comments" class="post-meta-comments">
                                        <i class="fa fa-comments-o" aria-hidden="true"></i>0
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="post-content" itemprop="text">
                            {{ str_limit(strip_tags($article->body), 200) }}
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
