<div id="sidebar" class="sidebar-widget">
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
        <h3 class="widget-title">Articles categories</h3>
        <ul>
            @foreach ($articles_categories as $articles_category)
            <li class="cat-item cat-item-24">
                <a href="/articles-category/{{ $articles_category->name }}">{{ $articles_category->name }}</a> ({{ $articles_category->Article->count() }})
                <span class="count">{{ $articles_category->Article->count() }}</span>
            </li>
            @endforeach
        </ul>
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
                                        <i aria-hidden="true" class="fa fa-link"></i>
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
                                        <i aria-hidden="true" class="fa fa-link"></i>
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
                                        <i aria-hidden="true" class="fa fa-link"></i>
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
                <a href="https://www.facebook.com/not.aquarius.1997" class="sh-social-widgets-item" target="_blank">
                    <i aria-hidden="true" class="fa fa-facebook-official"></i>
                </a>
                <a href="#" class="sh-social-widgets-item" target="_blank">
                    <i aria-hidden="true" class="fa fa-twitter"></i>
                </a>
                <a href="https://www.instagram.com/anotisme1997/" class="sh-social-widgets-item" target="_blank">
                    <i aria-hidden="true" class="fa fa-instagram"></i>
                </a>
                <a href="?p=23" class="sh-social-widgets-item" target="_blank">
                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
</div>
