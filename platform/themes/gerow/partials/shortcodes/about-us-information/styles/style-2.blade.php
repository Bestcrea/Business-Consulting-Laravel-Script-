<section class="about-area-four pb-120">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-7 col-md-10 order-0 order-lg-2">
                <div class="about-img-wrap-four">
                    @if ($image = $shortcode->image)
                        <div
                            @if ($bgImage1 = $shortcode->background_image_1) class="mask-img-wrap" style="-webkit-mask-image: url({{ RvMedia::getImageUrl($bgImage1) }})" @endif
                        >
                            {{ RvMedia::image($image, $shortcode->title) }}
                        </div>
                    @endif

                    <div class="icon"><i class="flaticon-business-presentation"></i></div>
                    @if ($image1 = $shortcode->image_1)
                        {{ RvMedia::image($image1, $shortcode->title, attributes: ['class' => 'img-two']) }}
                    @endif

                    <div class="about-shape-wrap-three">
                        @if ($bgImage2 = $shortcode->background_image_2)
                            {{ RvMedia::image($bgImage2, $shortcode->title) }}
                        @endif

                        @if ($bgImage3 = $shortcode->background_image_3)
                            {{ RvMedia::image($bgImage3, $shortcode->title) }}
                        @endif

                        @if ($bgImage4 = $shortcode->background_image_4)
                            {{ RvMedia::image($bgImage4, $shortcode->title) }}
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="about-content-four">
                    <div class="section-title-two mb-30 tg-heading-subheading animation-style1">
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
                    <div class="about-list-three">
                        <ul class="list-wrap">
                            @foreach ($tabs as $tab)
                                @continue(!$tab['title'])
                                <li>
                                    @if ($tab['icon'])
                                        <div class="icon">
                                            <i class="{{ $tab['icon'] }}"></i>
                                        </div>
                                    @elseif ($tab['icon_image'])
                                        <div class="icon">
                                            {{ RvMedia::image($tab['icon'], $tab['title']) }}
                                        </div>
                                    @endif
                                    <div class="content">
                                        <h2 class="title">{!! BaseHelper::clean($tab['title']) !!}</h2>

                                        @if ($tab['description'])
                                            <p>{!! BaseHelper::clean($tab['description']) !!}</p>
                                        @endif
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
