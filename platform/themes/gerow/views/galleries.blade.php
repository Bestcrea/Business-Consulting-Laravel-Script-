@php
    Theme::set('pageTitle', __('Galleries'));
    Theme::set('headerStyle', theme_option('header_style', 'style-1'));
    Theme::set('headerTopStyle',theme_option('header_top_sidebar_style', 'style-1'));
@endphp

@if (function_exists('get_galleries'))
    @php
        Gallery::registerAssets();
    @endphp
    <section class="section">
        <div class="gallery-wrap">
            @foreach ($galleries as $gallery)
                <div class="gallery-item">
                    <div class="img-wrap">
                        <a href="{{ $gallery->url }}">
                            {{ RvMedia::image($gallery->image, $gallery->name) }}
                        </a>
                    </div>
                    <div class="gallery-detail">
                        <div class="gallery-title"><a href="{{ $gallery->url }}">{{ $gallery->name }}</a></div>
                        @if ($gallery->user->id && $gallery->user->name)
                            <div class="gallery-author">{{ __('By :name', ['name' => $gallery->user->name]) }}</div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endif
