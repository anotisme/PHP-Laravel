@extends('layouts.app')

@section('content')
<div class="top-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
            @foreach ($articles as $article)
                <h3 class="category-heading">{{ $article->category->name }} articles</h3>
            @endforeach
            </div>
        </div>
    </div>
</div>
<div id="content" class="content-with-sidebar-right blog-page-list center-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8">
            @foreach ($articles as $article)
                <div class="post-container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5">
                            <a href="/articles/{{ $article->id }}">
                                <img style="min-height: 250px;" src="/storage/{{ $article->image }}" class="card-img-top wp-post-image" alt="" />
                            </a>
                        </div>
                        <div class="col-xs-12 col-sm-7">
                            <div class="post-right-side">
                                <a href="/articles/{{ $article->id }}" class="post-title">
                                    <h2 itemprop="headline">{{ $article->title }}</h2>
                                </a>
                                <div class="post-meta post-meta-one">
                                    <span class="post-meta-author">by
                                        <a href="/" class="bypostauthor" itemprop="url" rel="author">
                                            shufflehound
                                        </a>
                                    </span>
                                    <time class="updated semantic" itemprop="dateModified" datetime="{{ $article->created_at }}"></time>
                                    <a href="/articles/{{ $article->id }}" class="post-meta-date sh-default-color">{{ date('M d, Y', strtotime($article->created_at)) }}</a>
                                </div>
                                <div class="post-content" itemprop="text">
                                    {{ str_limit(strip_tags($article->body), 200) }}
                                </div>
                                <div class="post-meta post-meta-two">
                                    <div class="sh-columns post-meta-comments">
                                        <span class="post-meta-categories">
                                            <i aria-hidden="true" class="fa fa-tags"></i>
                                            <a href="/articles-category/{{ $article->category->name }}" rel="category tag">{{ $article->category->name }}</a>
                                        </span>
                                        <meta itemprop="interactionCount" content="UserComments:0">
                                        <a href="/#comments" class="post-meta-comments">
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
