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
    <div id="woocommerce_products-2" class="widget-item woocommerce widget_products">
        <h3 class="widget-title">Products</h3>
        <ul class="product_list_widget">
        @foreach ($products as $product)
            <li>
                <a href="/products/{{ $product->name }}">
                    <div class="sh-mini-overlay">
                        <div class="sh-mini-overlay-container">
                            <div class="sh-table-full">
                                <div class="sh-table-cell">
                                    <i aria-hidden="true" class="fa fa-link"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img width="300" height="300" src="/storage/{{ $product->image }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="" sizes="(max-width: 300px) 100vw, 300px">
                    <span class="product-title">{{ $product->name }}</span>
                </a>
                <del>
                    <span class="woocommerce-Price-amount amount">
                    <span class="woocommerce-Price-currencySymbol">$</span>{{ $product->price }}</span>
                </del>
                <ins>
                    <span class="woocommerce-Price-amount amount">
                    <span class="woocommerce-Price-currencySymbol">$</span>{{ $product->price }}</span>
                </ins>
            </li>
        @endforeach
        </ul>
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
