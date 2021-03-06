<section id="our-portfolio" class="sh-section portfolio">
	<div class="sh-section-container container-fluid">
		<div class="fw-row">
            <div class="sh-column col-xs-12">
                <div class="sh-column-wrapper">
	                <div class="sh-heading sh-heading-style1">
                        <h1 class="sh-heading-content size-m">
                            <span style="text-align: center;"><em>Our visual work</em></span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="fw-row">
            <div class="sh-column fw-col-xs-12">
                <div class="sh-column-wrapper">
                    <div class="sh-heading sh-heading-style1">
                        <h1 class="sh-heading-content size-xxl">
                            <span style="text-align: center;"><strong>GALLERY &amp; PORTFOLIO</strong></span>
                        </h1>
                    </div>
	            </div>
            </div>
        </div>

        <div class="fw-row">
            <div class="sh-column fw-col-xs-12">
	            <div class="sh-column-wrapper">
                    <div id="small-divider" class="sh-divider sh-divider-center sh-divider-content-none">
			            <div class="sh-divider-line"></div>
	                </div>
	            </div>
            </div>
        </div>

        <div class="fw-row">
            <div class="sh-column fw-col-xs-12" style="padding: 0;">
                <div class="sh-column-wrapper">
                    <div class="sh-filter-container sh-portfolio-filter-default">
                        <div class="sh-filter">
                            <span class="sh-filter-item active" data-filter="*" data-href="#">
                                <div class="sh-filter-item-content">All</div>
                            </span>
                        </div>
                    </div>
                    <div id="pills-tabContent" >
                        <div class="grid-block" style="position: relative; height: 505px;">
                        @foreach ($projects as $project)
                            <div class="fw-col-xs-12 fw-col-sm-3 fw-col-md-3">
                                <div class="category-design category-life-work category-misc sh-portfolio-item sh-portfolio-masonry2 sh-portfolio-overlay-style-overlay4">
                                    <div class="sh-portfolio-image">
                                        <div class="sh-portfolio-image-position">
                                            <img class="sh-portfolio-img" src="/storage/{{ $project->image }}" alt="Portfolio_2_2">
                                        </div>
                                        <div class="sh-portfolio-overlay sh-portfolio-overlay4">
                                            <div class="sh-portfolio-overlay4-container">
                                                <div class="sh-portfolio-overlay4-title">{{ $project->name }}</div>
                                                <div class="sh-portfolio-overlay4-categories">
                                                    <a href="#" class="sh-portfolio-category">{{ $project->category }}</a>
                                                </div>

                                                <div class="sh-portfolio-overlay4-icons sh-table">
                                                    <a href="#" class="sh-overlay-item sh-table-cell">
                                                        <div class="sh-overlay-item-container">
                                                            <i class="fa fa-link" aria-hidden="true"></i>
                                                        </div>
                                                    </a>
                                                    <a href="/storage/{{ $project->image }}" target="_blank" class="sh-overlay-item sh-table-cell">
                                                        <div class="sh-overlay-item-container">
                                                            <i class="fa fa-search-plus" aria-hidden="true"></i>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>
