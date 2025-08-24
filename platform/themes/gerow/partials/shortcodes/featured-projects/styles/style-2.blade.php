<section class="project-area-four">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-8">
                <div class="section-title section-title-three mb-50 tg-heading-subheading animation-style1">
                    @if ($subtitle = $shortcode->subtitle)
                        <span class="sub-title tg-element-title">{!! BaseHelper::clean($subtitle) !!}</span>
                    @endif

                    @if ($title = $shortcode->title)
                        <h2 class="title tg-element-title">{!! BaseHelper::clean($title) !!}</h2>
                    @endif
                </div>
            </div>
            <div class="col-lg-6 col-md-4">
                @if (($buttonLabel = $shortcode->button_label) && ($buttonUrl = $shortcode->button_url))
                    <div class="view-all-btn text-end mb-30">
                        <a href="{{ $buttonLabel }}" class="btn btn-three">{!! BaseHelper::clean($buttonLabel) !!}</a>
                    </div>
                @endif
            </div>
        </div>
        @if ($projects->isNotEmpty())
            <div class="row justify-content-center">
                @foreach($projects as $project)
                    @if ($loop->index < 2)
                        <div class="col-lg-6 col-md-6">
                            {!! Theme::partial('portfolio.projects.item', compact('project')) !!}
                        </div>
                    @else
                        <div class="col-lg-4 col-md-6">
                            {!! Theme::partial('portfolio.projects.item', compact('project')) !!}
                        </div>
                    @endif
                @endforeach
            </div>
        @endif
    </div>
</section>
