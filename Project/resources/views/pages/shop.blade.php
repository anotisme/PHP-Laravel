@extends('layouts.app')

@section('content')
    <div class="shop container-fluid sh-titlebar sh-titlebar-center sh-titlebar-light sh-titlebar-parallax sh-titlebar-mobile-layout-compact sh-titlebar-mobile-title-on">
        <div class="container">
            <div class="sh-table sh-titlebar-height-medium">
                <div class="sh-table-cell">
                    <div class="titlebar-title">
                        <h2 class="titlebar-title-h1">Shop</h2>
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
                    <div id="search-2" class="widget-item widget_search">
                        <form method="get" class="search-form" action="https://jevelin.shufflehound.com/">
                            <div>
                                <label>
                                    <input type="search" class="sh-sidebar-search search-field" placeholder="Search here..." value="" name="s" title="Search text" required="">
                                </label>
                                <button type="submit" class="search-submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div id="categories-3" class="widget-item widget_categories">
                        <h3 class="widget-title">Categories</h3>
                        <ul>
                            <li class="cat-item cat-item-24">
                                <a href="https://jevelin.shufflehound.com/category/animals/">Animals</a> (1)
                                <span class="count">1</span>
                            </li>
                            <li class="cat-item cat-item-21"><a href="https://jevelin.shufflehound.com/category/design/">Design</a> (6)
                                <span class="count">6</span>
                            </li>
                            <li class="cat-item cat-item-28"><a href="https://jevelin.shufflehound.com/category/music/">Music</a> (2)
                                <span class="count">2</span>
                            </li>
                            <li class="cat-item cat-item-23"><a href="https://jevelin.shufflehound.com/category/news/">News</a> (4)
                                <span class="count">4</span>
                            </li>
                            <li class="cat-item cat-item-20"><a href="https://jevelin.shufflehound.com/category/travel/">Travel</a> (4)
                                <span class="count">4</span>
                            </li>
                            <li class="cat-item cat-item-1"><a href="https://jevelin.shufflehound.com/category/uncategorized/">Uncategorized</a> (3)
                                <span class="count">3</span>
                            </li>
                        </ul>
                    </div>
                    <div id="tag_cloud-2" class="widget-item widget_tag_cloud">
                        <h3 class="widget-title">Tags</h3>
                        <div class="tagcloud">
                            <a href="https://jevelin.shufflehound.com/tag/boat/" class="tag-cloud-link tag-link-39 tag-link-position-1" style="font-size: 8pt;" aria-label="Boat (1 item)">Boat</a>
                            <a href="https://jevelin.shufflehound.com/tag/dogs/" class="tag-cloud-link tag-link-38 tag-link-position-2" style="font-size: 8pt;" aria-label="Dogs (1 item)">Dogs</a>
                            <a href="https://jevelin.shufflehound.com/tag/team/" class="tag-cloud-link tag-link-36 tag-link-position-3" style="font-size: 8pt;" aria-label="Team (1 item)">Team</a>
                            <a href="https://jevelin.shufflehound.com/tag/travel/" class="tag-cloud-link tag-link-35 tag-link-position-4" style="font-size: 8pt;" aria-label="Travel (1 item)">Travel</a>
                            <a href="https://jevelin.shufflehound.com/tag/watchers/" class="tag-cloud-link tag-link-37 tag-link-position-5" style="font-size: 8pt;" aria-label="Watchers (1 item)">Watchers</a>
                        </div>
                    </div>
                    <div id="portfolio-3" class="widget_social_links widget-item widget_portfolio">
                        <div class="wrap-portfolio">
                            <h3 class="widget-title">Latest Projects</h3>
                            <div class="sh-portfolio-widget">
                                <div class="sh-portfolio-widget-item">
                                    <a href="https://jevelin.shufflehound.com/project/riding-the-waves/" title="Stack of bottles" class="sh-portfolio-widget-background">
                                        <div class="sh-ratio">
                                            <div class="sh-ratio-container sh-ratio-container-square">
                                                <div class="sh-ratio-content" style="background-image: url(https://cdn.jevelin.shufflehound.com/wp-content/uploads/2016/02/Portfolio_2_2-150x150.jpg);"></div>
                                            </div>
                                        </div>
                                        <div class="sh-mini-overlay">
                                            <div class="sh-mini-overlay-container">
                                                <div class="sh-table-full">
                                                    <div class="sh-table-cell">
                                                        <i class="icon-link"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="sh-portfolio-widget-item">
                                    <a href="https://jevelin.shufflehound.com/project/its-the-coast/" title="Brand in the bag" class="sh-portfolio-widget-background">
                                        <div class="sh-ratio">
                                            <div class="sh-ratio-container sh-ratio-container-square">
                                                <div class="sh-ratio-content" style="background-image: url(https://cdn.jevelin.shufflehound.com/wp-content/uploads/2016/02/Portfolio_3-150x150.jpg);"></div>
                                            </div>
                                        </div>
                                        <div class="sh-mini-overlay">
                                            <div class="sh-mini-overlay-container">
                                                <div class="sh-table-full">
                                                    <div class="sh-table-cell">
                                                        <i class="icon-link"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="image-3" class="widget_social_links widget-item widget_image">
                        <div class="wrap-image">
                            <h3 class="widget-title">Store News</h3>
                            <div class="sh-image-widgets">
                                <a href="?p=813">
                                    <img src="//cdn.jevelin.shufflehound.com/wp-content/uploads/2016/03/Widget-banner.jpg" alt="Store News">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div id="social-2" class="widget_social_links widget-item widget_social">
                        <div class="wrap-social">
                            <h3 class="widget-title">Social Media</h3>
                            <div class="sh-social-widgets">
                                <a href="http://www.twitter.com/TheShufflehound" class="sh-social-widgets-item" target="_blank">
                                    <i class="icon-social-facebook"></i>
                                </a>
                                <a href="https://www.facebook.com/shufflehound" class="sh-social-widgets-item" target="_blank">
                                    <i class="icon-social-twitter"></i>
                                </a>
                                <a href="?p=23" class="sh-social-widgets-item" target="_blank">
                                    <i class="icon-social-instagram"></i>
                                </a>
                                <a href="?p=23" class="sh-social-widgets-item" target="_blank">
                                    <i class="icon-social-dribbble"></i>
                                </a>
                                <a href="?p=23" class="sh-social-widgets-item" target="_blank">
                                    <i class="icon-social-behance"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-sm-4">
                            <h1>{{ $product->name }}</h1>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection


