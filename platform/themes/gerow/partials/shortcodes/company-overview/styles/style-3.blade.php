<section class="about-area-eight pt-80 pb-80">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-9">
                @if ($image = $shortcode->image)
                    <div class="about-img-eight">
                        {{ RvMedia::image($image, $shortcode->title) }}
                    </div>
                @endif
            </div>
            <div class="col-lg-6">
                <div class="about-content-eight">
                    <div class="section-title-two mb-30">
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
                    <div class="about-content-inner">
                        @if (! empty($tabs))
                            <ul class="list-wrap">
                                @foreach ($tabs as $tab)
                                    @continue(! $tab['title'] && ! $tab['data'])

                                    <li>
                                        @if ($tab['logo_image'])
                                            <div class="icon">
                                                {{ RvMedia::image($tab['logo_image'], $tab['title']) }}
                                            </div>
                                        @elseif ($tab['logo'])
                                            <div class="icon">
                                                <i class="{{ $tab['logo'] }}"></i>
                                            </div>
                                        @endif
                                        <div class="content">
                                            @if ($tab['title'])
                                                <h3 class="title">{!! BaseHelper::clean($tab['title']) !!}</h3>
                                            @endif

                                            @if ($tab['description'])
                                                <p>{!! BaseHelper::clean($tab['description']) !!}</p>
                                            @endif
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        @endif

                        @if ($image1 = $shortcode->image_1)
                            <div class="right-slide-img">
                                {{ RvMedia::image($image1, $shortcode->title) }}
                            </div>
                        @endif
                    </div>
                    <div class="about-content-bottom">
                        @if (($buttonLabel = $shortcode->button_label) && ($buttonUrl = $shortcode->button_url))
                            <div class="services-btn">
                                <a
                                    class="btn"
                                    href="{{ $buttonUrl }}"
                                >{!! BaseHelper::clean($buttonLabel) !!}</a>
                            </div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
