<section
    class="project-area-two project-bg-two pt-60 pb-60"
    @if ($bgImage = $shortcode->background_image) data-background="{{ RvMedia::getImageUrl($bgImage) }}" @endif
>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
                <div class="section-title-two mb-40 tg-heading-subheading animation-style3">
                    @if ($subtitle = $shortcode->subtitle)
                        <span class="sub-title">{!! BaseHelper::clean($subtitle) !!}</span>
                    @endif

                    @if ($title = $shortcode->title)
                        <h2 class="title tg-element-title">{!! BaseHelper::clean($title) !!}</h2>
                    @endif
                </div>
            </div>
            <div class="col-lg-6 col-md-10">
                @if ($description = $shortcode->description)
                    <div class="project-content-top">
                        <p>{!! BaseHelper::clean(nl2br($description)) !!}</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($projects as $project)
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="project-item-two">
                        <div class="project-thumb-two">
                            {{ RvMedia::image($project->image, $project->name) }}
                        </div>
                        <div class="project-content-two text-center">
                            <h2 class="title"><a href="{{ $project->url }}">{{ $project->name }}</a></h2>
                            <span>{{ $project->description }}</span>
                            <a
                                class="link-btn"
                                href="{{ $project->url }}"
                            ><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
