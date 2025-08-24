<section class="about-area-three">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-9">
                <div class="about-img-wrap-three">
                    @if ($image = $shortcode->image)
                        {{ RvMedia::image($image, $shortcode->title, attributes: ['data-aos' => 'fade-down-right', 'data-aos-delay' => '0']) }}
                    @endif

                    @if ($image1 = $shortcode->image_1)
                        {{ RvMedia::image($image1, $shortcode->title, attributes: ['data-aos' => 'fade-left', 'data-aos-delay' => '400']) }}
                    @endif

                    @if (($companyAge = $shortcode->company_age) && ($companyDescription = $shortcode->company_description))
                        <div
                            class="experience-wrap w-100"
                            data-aos="fade-up"
                            data-aos-delay="300"
                        >
                            <h2 class="title">{{ $companyAge }} <span>{{ __('Years') }}</span></h2>
                            <p>{!! BaseHelper::clean($companyDescription) !!}</p>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content-three">
                    <div class="section-title-two mb-20 tg-heading-subheading animation-style3">
                        @if ($subtitle = $shortcode->subtitle)
                            <span class="sub-title">{!! BaseHelper::clean($subtitle) !!}</span>
                        @endif

                        @if ($title = $shortcode->title)
                            <h2 class="title tg-element-title">{!! BaseHelper::clean($title) !!}</h2>
                        @endif
                    </div>

                    @if ($description = $shortcode->description)
                        <p class="info-one">{!! BaseHelper::clean(nl2br($description)) !!}</p>
                    @endif
                    <div class="about-list-two">
                        <ul class="list-wrap">
                            @foreach ($tabs as $tab)
                                @if ($tab['title'])
                                    <li><i class="fas fa-arrow-right"></i>{!! BaseHelper::clean($tab['title']) !!}</li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    @if ($subDescription = $shortcode->sub_description)
                        <p>{!! BaseHelper::clean($subDescription) !!}</p>
                    @endif
                    <div class="about-author-info">
                        @if ($authorAvatar = $shortcode->author_avatar)
                            <div class="thumb">
                                {{ RvMedia::image($authorAvatar, $shortcode->author_name) }}
                            </div>
                        @endif

                        @if ($authorName = $shortcode->author_name)
                            <div class="content">
                                <h2 class="title">{!! BaseHelper::clean($authorName) !!}</h2>
                                @if ($authorBio = $shortcode->author_bio)
                                    <span>{!! BaseHelper::clean($authorBio) !!}</span>
                                @endif
                            </div>
                        @endif

                        @if ($authorSignature = $shortcode->author_signature)
                            <div class="signature">
                                {{ RvMedia::image($authorSignature, $authorName) }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-shape-wrap-two">
        @if ($bgImage1 = $shortcode->background_image_1)
            {{ RvMedia::image($bgImage1, $shortcode->title) }}
        @endif

        @if ($bgImage2 = $shortcode->background_image_2)
            {{ RvMedia::image($bgImage2, $shortcode->title) }}
        @endif

        @if ($bgImage3 = $shortcode->background_image_3)
            {{ RvMedia::image($bgImage3, $shortcode->title, attributes: ['data-aos' => 'fade-left', 'data-aos-delay' => '500']) }}
        @endif
    </div>
</section>
