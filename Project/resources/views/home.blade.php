@extends('layouts.app')

@section('content')

@include('inc.slider')

<section id="introduction" class="sh-section home">
    <div class="sh-section-container container">
        <div class="row">
            <div class="col-sm-12 col-md-4 home-box">
                <div class="column-wrapper">
                    <div class="box-icon">
                        <a href="#"><img src="" alt=""></a>
                    </div>
                    <div class="box-aside">
                        <div class="sh-iconbox-title">
                            <h3>Easy to setup</h3>
                        </div>
                        <div class="sh-iconbox-seperator"></div>
                        <div class="sh-iconbox-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;Donec aliquet est et congue aliquet.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 home-box">
                <div class="column-wrapper">
                    <div class="box-icon">
                        <a href="#"><img src="" alt=""></a>
                    </div>
                    <div class="box-aside">
                        <div class="sh-iconbox-title">
                            <h3>Bundle of joy</h3>
                        </div>
                        <div class="sh-iconbox-seperator"></div>
                        <div class="sh-iconbox-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;Donec aliquet est et congue aliquet.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 home-box">
                <div class="column-wrapper">
                    <div class="box-icon">
                        <a href="#"><img src="" alt=""></a>
                    </div>
                    <div class="box-aside">
                        <div class="sh-iconbox-title">
                            <h3>Polished with care</h3>
                        </div>
                        <div class="sh-iconbox-seperator"></div>
                        <div class="sh-iconbox-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.&nbsp;Donec aliquet est et congue aliquet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about-us" class="sh-section about-us">
    <div class="row">
        <div class="col-sm-12 col-md-6 left-image"></div>
        <div class="col-sm-12 col-md-6 right-text fadeIn animated">
            <div class="colum-wrapper">
                <div class="heading">
                    <h1 class="heading-content size-m">
                        <span style="text-align: center;"><em>Brand Since 1975</em></span>
                    </h1>
                </div>
                <div class="heading">
                    <h1 class="heading-content size-xl">
                        <span style="text-align: center;"><strong>THE STORY ABOUT US</strong></span>
                    </h1>
                </div>
                <div class="divider divider-center divider-content-icon_option">
                    <div class="divider-content">
                        <span class="divider-icon">
                        <i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;<i class="fa fa-star-o" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
                <div class="text-block">
                    <p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra tempor rhoncus. Integer iaculis augue metus,
                    eget luctus ex tristique sed. Suspendisse egestas lacinia magna et rutrum. Nunc vel est vel augue mollis gravida. Aenean hendrerit felis a suscipit accumsan.
                    Pellentesque mi metus, condimentum quis maximus eu, ornare dapibus elit. Sed sit amet tellus in lacus euismod efficitur. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Nunc viverra tempor rhoncus.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="infor" class="sh-section our-infor">
	<div class="sh-section-container container">
		<div class="row">
            <div class="sh-column col-xs-12 col-sm-3">
                <div class="column-wrapper">
                    <div class="sh-counter sh-counter-style3">
                        <div class="sh-table">
                            <div class="sh-table-cell text-right">
                                <div class="sh-counter-number sh-counter-animate" counterup-text="110">109</div>
                            </div>
                            <div class="sh-table-cell text-left">
				                <span class="sh-counter-title">Days</span>
                                <div class="sh-counter-subtitle">Making</div>
							</div>
		                </div>
                    </div>
                </div>
            </div>

            <div class="sh-column col-xs-12 col-sm-3">
                <div class="sh-column-wrapper">
                    <div class="sh-counter sh-counter-style3">
                        <div class="sh-table">
                            <div class="sh-table-cell text-right">
                                <div class="sh-counter-number sh-counter-animate" counterup-text="28">28</div>
                            </div>
                            <div class="sh-table-cell text-left">
                                <span class="sh-counter-title">Team</span>
                                <div class="sh-counter-subtitle">Meetings</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sh-column col-xs-12 col-sm-3">
                <div class="sh-column-wrapper">
                    <div class="sh-counter sh-counter-style3">
                        <div class="sh-table">
                            <div class="sh-table-cell text-right">
                                <div class="sh-counter-number sh-counter-animate" counterup-text="87">87</div>
                            </div>
                            <div class="sh-table-cell text-left">
                                <span class="sh-counter-title">Tea</span>
                                <div class="sh-counter-subtitle">Cups</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sh-column col-xs-12 col-sm-3">
                <div class="sh-column-wrapper">
                    <div class="sh-counter sh-counter-style3">
                        <div class="sh-table">
                            <div class="sh-table-cell text-right">
                                <div class="sh-counter-number sh-counter-animate" counterup-text="784">784</div>
                            </div>
                            <div class="sh-table-cell text-left">
                                <span class="sh-counter-title">Perfected</span>
                                <div class="sh-counter-subtitle">Design</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>

<section class="sh-section divine-line">
    <div class="sh-section-container container-fluid">
        <div class="fw-row">
            <div class="sh-column col-xs-12">
                <div class="sh-column-wrapper">
                    <div class="sh-divider sh-divider-center sh-divider-content-none">
                        <div class="sh-divider-line"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('home.gallery-porfolio')

@include('home.highlight')

@include('home.blog-news')

@include('home.customer-review')

@include('home.bottom-banner')
@endsection
