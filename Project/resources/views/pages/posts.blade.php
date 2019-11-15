@extends('layouts.app')

@section('content')
    <div class="post-style">

        <div class="style1">
            <a href="#">Category</a>
            <div class="card-deck more-posts-deck">
                <div class="row">
                    @foreach ($articles_cate1 as $article_cate1)
                    <div class="col-md-4">
                        <article class="post-59 post type-post status-publish format-standard has-post-thumbnail hentry category-world tag-amet tag-dolor tag-ipsum tag-lorem tag-sit">

                            <a href="https://litmotion.net/demo/neori-lite/in-ultricies-nunc-ut-mi-finibus-congue-porttitor-vec/">
                                <img width="768" height="200" src="https://litmotion.net/demo/neori-lite/wp-content/uploads/2019/05/18-768x523.jpg" class="card-img-top wp-post-image" alt="" >
                            </a>

                            <div class="card-body">
                                <h3 class="card-title">
                                    <a href="https://litmotion.net/demo/neori-lite/in-ultricies-nunc-ut-mi-finibus-congue-porttitor-vec/">{{ $article_cate1['title'] }}</a>
                                </h3>
                                <p class="card-text">{{ $article_cate1['body'] }}</p>
                                <p class="card-meta">
                                    <img alt="" src="https://secure.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=20&amp;d=mm&amp;r=g" class="useravatar avatar-20 photo" height="20" width="20">
                                    <span class="author">
                                        <a href="https://litmotion.net/demo/neori-lite/author/admin/" title="Posts by Lora" rel="author">Lora</a>
                                    </span>
                                    <span class="date">May 8, 2019</span>
                                </p><!-- /.card-meta -->
                            </div><!-- /.card-body -->
                        </article>
                    </div>
                    @endforeach
                </div><!-- /.card -->
            </div>
        </div>
        <div class="style2">
            <a href="#">Category</a>
            <?php
                $post1 = \DB::table('articles')->where('category', 'Test1')->first();
                $post2 = \DB::table('articles')->where('category', 'Test1')->get(); ?>
            <div class="card-deck more-posts-deck">
                <div class="row">
                    @foreach ($articles_cate1 as $article_cate1)
                    <div class="col-md-4">
                        <article class="post-59 post type-post status-publish format-standard has-post-thumbnail hentry category-world tag-amet tag-dolor tag-ipsum tag-lorem tag-sit">

                            <a href="https://litmotion.net/demo/neori-lite/in-ultricies-nunc-ut-mi-finibus-congue-porttitor-vec/">
                                <img width="768" height="200" src="https://litmotion.net/demo/neori-lite/wp-content/uploads/2019/05/18-768x523.jpg" class="card-img-top wp-post-image" alt="" >
                            </a>

                            <div class="card-body">
                                <h3 class="card-title">
                                    <a href="https://litmotion.net/demo/neori-lite/in-ultricies-nunc-ut-mi-finibus-congue-porttitor-vec/">{{ $article_cate1['title'] }}</a>
                                </h3>
                                <p class="card-text">{{ $article_cate1['body'] }}</p>
                                <p class="card-meta">
                                    <img alt="" src="https://secure.gravatar.com/avatar/ee009ffd2d2d1827217bf8c3a968fd16?s=20&amp;d=mm&amp;r=g" class="useravatar avatar-20 photo" height="20" width="20">
                                    <span class="author">
                                        <a href="https://litmotion.net/demo/neori-lite/author/admin/" title="Posts by Lora" rel="author">Lora</a>
                                    </span>
                                    <span class="date">May 8, 2019</span>
                                </p><!-- /.card-meta -->
                            </div><!-- /.card-body -->
                        </article>
                    </div>
                    @endforeach
                </div><!-- /.card -->
            </div>
        </div>
    </div>
@endsection
