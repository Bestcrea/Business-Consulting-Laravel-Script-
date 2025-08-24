<div class="sd-inner-wrap">
    <div class="row align-items-center">
        @if ($title = $shortcode->title)
            <h3 class="title-two">{{ $title }}</h3>
        @endif
        @if ($description = $shortcode->description)
            <p>{!! BaseHelper::clean(nl2br($description)) !!}</p>
        @endif
        <div class="row">
            @if ($rightImage = $shortcode->right_image)
                <div class="col-md-6">
                    <div class="thumb">
                        {{ RvMedia::image($rightImage, $shortcode->title) }}
                        @if ($rightLink = $shortcode->right_image_link)
                            <a
                                class="play-btn popup-video"
                                href="{{ $rightLink }}"
                            ><i class="fas fa-play"></i></a>
                        @endif
                    </div>
                </div>
            @endif
            @if ($leftImage = $shortcode->left_image)
                <div class="col-md-6">
                    <div class="thumb">
                        {{ RvMedia::image($leftImage, $shortcode->title) }}
                        @if ($leftLink = $shortcode->left_image_link)
                            <a
                                class="play-btn popup-video"
                                href="{{ $leftLink }}"
                            ><i class="fas fa-play"></i></a>
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
