<?php
use App\Article;
?>
<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">
    <div class="" style="background-color: #6351ce;">
        <div class="container">
            <div class="row py-4 d-flex align-items-center">
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0">Get connected with us on social networks!</h6>
                </div>
                <div class="col-md-6 col-lg-7 text-center text-md-right">
                    <!-- Facebook -->
                    <a class="fb-ic">
                        <i aria-hidden="true" class="fa fa-facebook-official white-text mr-4"></i>
                    </a>
                    <!-- Twitter -->
                    <a class="tw-ic">
                        <i aria-hidden="true" class="fa fa-twitter white-text mr-4"></i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic">
                        <i aria-hidden="true" class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center text-md-left mt-5 sh-footer-widgets">
        <div class="row mt-3">
            <div class="col-md-3 col-lg-3 col-xl-3">
                <h3 class="widget-title">About Us</h3>
                <div class="sh-image-widgets">
                    <p class="sh-image-widgets-description">
					Duis semper mauris vitae purus rhoncus suscipit. Nunc dictum dapibus tellus, at viverra risus pharetra id. Nulla facilisi. Ut mollis et augue non gravida.
                    Sed ipsum urna, venenatis ut vehicula nec, ultrices quis sapien.
                    </p>
			    </div>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
                <div class="wrap-social">
                    <h3 class="widget-title">Contacts</h3>
                    <div class="sh-contacts-widget-item">
                        <i class="fa fa-map-o" aria-hidden="true"></i>
                        Vietnam, 16 - 18 An Nhon 3
                    </div>
                    <div class="sh-contacts-widget-item">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        0938884495
                    </div>
                    <div class="sh-contacts-widget-item">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        anotisme@gmail.com
                    </div>
                    <div class="sh-contacts-widget-item">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        Monday - Friday: 8h - 18h
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
                <div class="wrap-recent-posts">
                    <h3 class="widget-title">Recent Posts</h3>
                    <div class="sh-recent-posts-widgets">
                        <?php
                                $articles = Article::with('Category')->limit(3)->get();
                        ?>
                        @foreach ($articles as $article)
                        <div class="sh-recent-posts-widgets-item">
                            <div class="sh-recent-posts-widgets-item-thumb">
                                <a href="/articles/{{ $article->title }}">
                                    <div class="sh-ratio">
                                        <div class="sh-ratio-container sh-ratio-container-square">
                                            <img class="sh-ratio-content" src="/storage/{{ $article->image }}" alt="">
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
                                    <div class="sh-recent-posts-widgets-count">{{ $article->Category->count() }}</div>
                                </a>
                            </div>
                            <div class="sh-recent-posts-widgets-item-content">
                                <span class="post-meta-categories">
                                    <a href="/articles-category/{{ $article->articles_category }}" rel="category tag">{{ $article->category->name }}</a>
                                </span>
                                <a href="/articles/{{ $article->title }}">
                                    <h6>{{ $article->title }}</h6>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-xl-3">
                <div class="wrap-portfolio">
                    <h3 class="widget-title">Latest Projects</h3>
                    <div class="sh-portfolio-widget">
                        <?php $projects = \DB::table('projects')->limit(9)->get(); ?>
                        @foreach ($projects as $project)
                        <div class="sh-portfolio-widget-item">
                            <a href="/projects/{{ $project->name }}" title="Stack of bottles" class="sh-portfolio-widget-background">
                                <div class="sh-ratio">
                                    <div class="sh-ratio-container sh-ratio-container-square">
                                        <img class="sh-ratio-content" src="/storage/{{ $project->image }}" alt="">
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
                        @endforeach
                    </div>
			    </div>
            </div>
        </div>
    </div>
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/">Notify Shop - Jezlin</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
