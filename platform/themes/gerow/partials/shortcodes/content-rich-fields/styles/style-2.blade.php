<div class="sd-inner-wrap sd-inner-wrap-two">
    <div class="row align-items-center">
        @if ($title = $shortcode->title)
            <h3 class="title-two">{{ $title }}</h3>
        @endif
        @if ($description = $shortcode->description)
            <p>{!! BaseHelper::clean(nl2br($description)) !!}</p>
        @endif
    </div>
    <div class="row align-items-center">
        @if ($leftImage = $shortcode->left_image)
            <div class="col-58">
                <div class="thumb">
                    {{ RvMedia::image($leftImage, $shortcode->left_image_link ?: $shortcode->title) }}
                    @if ($leftLink = $shortcode->left_image_link)
                        <a
                            class="play-btn popup-video"
                            href="{{ $leftLink }}"
                        ><i class="fas fa-play"></i></a>
                    @endif
                </div>
            </div>
        @endif
        <div class="col-42">
            <div class="services-details-list">
                <ul class="list-wrap">
                    @foreach ($tabs as $tab)
                        @if ($title = $tab['title'])
                            <li>
                                @if (isset($tab['icon_image']))
                                    <div class="icon icon-image">
                                        {{ RvMedia::image($tab['icon_image'], $tab['title'] ?: $shortcode->title) }}
                                    </div>
                                @elseif (isset($tab['icon']))
                                    <div class="icon">
                                        <i class="{{ $tab['icon'] }}"></i>
                                    </div>
                                @endif
                                <div class="content">
                                    <h5 class="title">{{ $title }}</h5>
                                    @if ($description = $tab['description'])
                                        <p>{!! BaseHelper::clean(nl2br($description)) !!}</p>
                                    @endif
                                </div>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
        @if ($rightImage = $shortcode->right_image)
            <div class="col-58">
                <div class="thumb">
                    {{ RvMedia::image($rightImage, $shortcode->right_image_link ?: $shortcode->title) }}
                    @if ($rightLink = $shortcode->right_image_link)
                        <a
                            class="play-btn popup-video"
                            href="{{ $rightLink }}"
                        ><i class="fas fa-play"></i></a>
                    @endif
                </div>
            </div>
        @endif
    </div>
</div>
