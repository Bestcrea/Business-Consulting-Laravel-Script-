@php
    Theme::set('breadcrumbEnabled', false);
@endphp

<section class="section container box-comingsoon pt-100 pb-100 overflow-hidden">
    @if($shortcode->image)
        <div class="row align-items-center">
            <div class="col-lg-5 mb-30">
                @endif
                @if($countdownTime)
                    <div
                        class="deals-countdown"
                        data-countdown="{{ $countdownTime }}"
                        data-days-text="{{ __('Days') }}"
                        data-hours-text="{{ __('Hours') }}"
                        data-minutes-text="{{ __('Minutes') }}"
                        data-seconds-text="{{ __('Seconds') }}"
                    ></div>
                @endif

                @if($shortcode->title)
                    <h3 class="color-brand-2 wow animate__animated animate__fadeIn">
                        {!! BaseHelper::clean($shortcode->title) !!}
                    </h3>
                @endif

                {!! $form->renderForm() !!}

                <div class="mt-30 footer-info">
                    <ul class="list-wrap">
                        @if ($address = $shortcode->address)
                            <li>
                                <div class="icon">
                                    <i class="flaticon-pin"></i>
                                </div>
                                <div class="content">
                                    <p>{!! BaseHelper::clean($address) !!}</p>
                                </div>
                            </li>
                        @endif

                        @if ($hotline = $shortcode->hotline)
                            <li>
                                <div class="icon">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <div class="content">
                                    <a href="tel:{{ $hotline }}" dir="ltr">{{ $hotline }}</a>
                                </div>
                            </li>
                        @endif

                        @if ($businessHours = $shortcode->business_hours)
                            <li>
                                <div class="icon">
                                    <i class="flaticon-clock"></i>
                                </div>
                                <div class="content">
                                    <p>{!! BaseHelper::clean(nl2br($businessHours)) !!}</p>
                                </div>
                            </li>
                        @endif
                    </ul>
                </div>

                @if($shortcode->show_social_links ?? true)
                    <div class="mt-30 footer-social footer-social-two">
                        <ul class="list-wrap">
                            @include(Theme::getThemeNamespace('widgets.social-links.templates.partials.social-links'))
                        </ul>
                    </div>
                @endif

                @if($shortcode->image)
            </div>
            <div class="col-lg-7 mb-30">
                {{ RvMedia::image($shortcode->image, $shortcode->title, attributes: ['class' => 'coming-soon-image']) }}
            </div>
            @endif
        </div>
</section>
