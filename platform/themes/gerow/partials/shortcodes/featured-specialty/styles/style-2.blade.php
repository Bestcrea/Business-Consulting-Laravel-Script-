<section class="faq-area">
    <div class="faq-bg-shape" @if ($bgImage = $shortcode->background_image) data-background="{{ RvMedia::getImageUrl($bgImage) }}" @endif></div>
    @if ($shortcode->background_image_1 || $shortcode->background_image_2)
        <div class="faq-shape-wrap">
            @if ($backgroundImage1 = $shortcode->background_image_1)
                {{ RvMedia::image($backgroundImage1, $shortcode->title) }}
            @endif

            @if ($backgroundImage2 = $shortcode->background_image_2)
                {{ RvMedia::image($backgroundImage2, $shortcode->title) }}
            @endif
        </div>
    @endif
    <div class="container">
        <div class="row align-items-end justify-content-center">
            <div class="col-lg-6 col-md-9">
                @if ($shortcode->image || $shortcode->image_1)
                    <div class="faq-img-wrap">
                        @if ($image = $shortcode->image)
                            {{ RvMedia::image($image, $shortcode->title) }}
                        @endif

                        @if ($image1 = $shortcode->image_1)
                            {{ RvMedia::image($image1, $shortcode->title, attributes: ['data-parallax' => '{"y" : 100 }']) }}
                        @endif
                    </div>
                @endif
            </div>
            <div class="col-lg-6">
                <div class="faq-content">
                    <div class="section-title mb-30 tg-heading-subheading animation-style2">
                        @if ($subtitle = $shortcode->subtitle)
                            <span class="sub-title tg-element-title">{!! BaseHelper::clean($subtitle) !!}</span>
                        @endif

                        @if ($title = $shortcode->title)
                            <h2 class="title tg-element-title">{!! BaseHelper::clean($title) !!}</h2>
                        @endif
                    </div>
                    @if ($description = $shortcode->description)
                        <p>{!! BaseHelper::clean(nl2br($description)) !!}</p>
                    @endif
                    <div class="accordion-wrap">
                        <div class="accordion" id="accordionExample">
                            @foreach ($tabs as $tab)
                                @if ($tab['title'] && $tab['description'])
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button
                                                data-bs-toggle="collapse"
                                                data-bs-target="#collapseTab{{ $loop->index }}"
                                                type="button"
                                                aria-expanded="true"
                                                aria-controls="collapseTab{{ $loop->index }}"
                                                @class(['accordion-button', 'collapsed' => !$loop->first])
                                            >
                                                {!! BaseHelper::clean($tab['title']) !!}
                                            </button>
                                        </h2>
                                        <div
                                            id="collapseTab{{ $loop->index }}"
                                            data-bs-parent="#accordionExample"
                                            @class(['accordion-collapse collapse', 'show' => $loop->first])
                                        >
                                            <div class="accordion-body">
                                                <p>{!! BaseHelper::clean($tab['description']) !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
