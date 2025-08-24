@php
    $style = $shortcode->style ?: 'style-1';
@endphp

@if (in_array($style, ['style-1','style-2','style-3']))
    <section style="overflow: unset !important;" @class([
            'cta-area' => $style === 'style-1',
            'cta-area-two pt-120' => $style === 'style-2',
        ])
    >
        <div class="container">
            <div
                @class([
                    'cta-inner-wrap' => $style === 'style-1',
                    'cta-inner-wrap-two' => $style === 'style-2',
                    'cta-inner-wrap-three' => $style === 'style-3',
                ])
                @if ($bgImage = $shortcode->background_image)
                    data-background="{{ RvMedia::getImageUrl($bgImage) }}"
                @endif
            >
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <div class="cta-content">
                            <div class="cta-info-wrap">
                                <div class="icon">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <div class="content">
                                    @if ($subtitle = $shortcode->subtitle)
                                        <span>{!! BaseHelper::clean($subtitle) !!}</span>
                                    @endif

                                    @if ($hotline = $shortcode->hotline)
                                        <a href="tel:{{ $hotline }}" dir="ltr">{!! BaseHelper::clean($hotline) !!}</a>
                                    @endif
                                </div>
                            </div>

                            @if ($title = $shortcode->title)
                                <h2 class="title">{!! BaseHelper::clean($title) !!}</h2>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-3">
                        @if (($buttonLabel = $shortcode->button_label) && ($buttonUrl = $shortcode->button_url))
                            <div class="cta-btn text-end">
                                <a
                                    href="{{ $buttonUrl }}"
                                    @class([
                                        'btn',
                                        'btn-three' => in_array($style, ['style-2', 'style-3']),
                                    ])
                                >
                                    {!! BaseHelper::clean($buttonLabel) !!}
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@else
    {!! Theme::partial('shortcodes.contact-block.styles.' . $style, compact('shortcode')) !!}
@endif
