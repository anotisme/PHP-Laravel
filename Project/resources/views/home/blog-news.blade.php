<section class="sh-section blog-news">
    <div class="sh-section-container container">
        <div class="fw-row">
            <div class="sh-column fw-col-xs-12">
                <div class="sh-colum-wrapper">
                    <div class="sh-heading sh-heading-style1">
                        <h1 class="sh-heading-content size-m">
                            <span style="text-align: center;"><em>Letter art</em></span>
                        </h1>
                    </div>
                </div>
                <div class="sh-heading sh-heading-style1">
                    <h1 class="sh-heading-content size-xxl">
                        <span style="text-align: center;"><strong>BLOG &amp; NEWS</strong></span>
                    </h1>
                </div>
                <div id="small-divider" class="sh-divider sh-divider-center sh-divider-content-none">
                    <div class="sh-divider-line"></div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($articles as $article)
            <div class="col-xs-12 col-sm-4 col-md-4">
                <article class="post-item category-design category-news masonry-shadow" itemscope="itemscope" itemtype="http://schema.org/Article" aria-hidden="false" tabindex="0" role="tabpanel">
                    <div class="post-container">
                        <span class="sh-popover-mini fadeIn animated" style="visibility: visible; animation-name: fadeIn;">{{ $article->category->name }}</span>
                        <div class="post-meta-thumb">
                            <a href="/articles/{{ $article->id }}" class="post-title">
                                <img width="1024" height="683" src="/storage/{{ $article->image }}" class="attachment-large size-large wp-post-image" alt="" srcset="" sizes="(max-width: 1024px) 100vw, 1024px">
                            </a>
                        </div>

                        <div class="post-content-container">
                            <a href="/articles/{{ $article->id }}" class="post-title" tabindex="0">
                                <h2 itemprop="headline">{{ $article->title }}</h2>
                            </a>
                            <div class="post-meta post-meta-one">
                                <span class="post-meta-author">by <a href="https://jevelin.shufflehound.com/author/shufflehound/" class="bypostauthor" itemprop="url" rel="author" tabindex="0">shufflehound</a></span>

                                <time class="updated semantic" itemprop="dateModified" datetime="{{ $article->created_at }}"></time>
                                <a href="/articles/{{ $article->id }}" class="post-meta-date sh-default-color" tabindex="0">{{ date('M d, Y', strtotime($article->created_at)) }}</a>
                            </div>

                            <div class="post-content" itemprop="text">
                                {{ str_limit(strip_tags($article->body), 200) }}
                            </div>

                            <div class="post-meta post-meta-two">
                                <div class="sh-columns post-meta-comments">
                                    <span class="post-meta-categories">
                                        <i class="fa fa-tags" aria-hidden="true"></i>
                                        <a href="/articles-category/{{ $article->articles_category }}" rel="category tag" tabindex="0">
                                        {{ $article->category->name }}
                                        </a>
                                    </span>
                                    <meta itemprop="interactionCount" content="UserComments:0">
                                    <a href="https://jevelin.shufflehound.com/discovering-the-space/#comments" class="post-meta-comments" tabindex="0">
                                        <i class="fa fa-comments-o" aria-hidden="true"></i>0
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
    </div>
</section>
