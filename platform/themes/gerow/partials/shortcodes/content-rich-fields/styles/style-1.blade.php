<div class="sd-inner-wrap">
    <div class="row align-items-center">
        @if ($leftImage = $shortcode->left_image)
            <div class="col-44">
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
        <div class="col-56">
            <div class="content">
                @if ($title = $shortcode->title)
                    <h3 class="title-two">{{ $title }}</h3>
                @endif
                @if ($description = $shortcode->description)
                    <p>{!! BaseHelper::clean(nl2br($description)) !!}</p>
                @endif
                <ul class="list-wrap">
                    @foreach ($tabs as $tab)
                        @if ($title = $tab['title'])
                            <li class="d-flex align-items-center gx-5">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    height="1em"
                                    viewBox="0 0 512 512"
                                >
                                    <path
                                        fill="currentColor"
                                        d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"
                                    />
                                </svg>
                                {{ $title }}
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
        @if ($rightImage = $shortcode->right_image)
            <div class="col-44">
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
