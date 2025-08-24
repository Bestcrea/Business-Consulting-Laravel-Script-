<section
    class="choose-area-three"
    @if ($bgColor = $shortcode->background_color) style="background: {{ $bgColor }}" @endif
>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="choose-content-three">
                    <div class="section-title-two white-title mb-30">
                        @if ($subtitle = $shortcode->subtitle)
                            <span class="sub-title">{!! BaseHelper::clean($subtitle) !!}</span>
                        @endif

                        @if ($title = $shortcode->title)
                            <h2 class="title">{!! BaseHelper::clean($title) !!}</h2>
                        @endif
                    </div>

                    @if ($description = $shortcode->description)
                        <p>{!! BaseHelper::clean(nl2br($description)) !!}</p>
                    @endif
                    <div class="accordion-wrap-two">
                        <div
                            class="accordion"
                            id="accordionExample"
                        >
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
                                            @class(['accordion-collapse collapse', 'show ' => $loop->first])
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
            <div class="col-lg-6">
                @if ($image = $shortcode->image)
                    <div class="choose-img-three">
                        {{ RvMedia::image($image, $shortcode->title) }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
