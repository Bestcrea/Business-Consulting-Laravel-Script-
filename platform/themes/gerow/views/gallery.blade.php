@php
    Theme::set('pageTitle', $gallery->name);
    Theme::set('headerStyle', theme_option('header_style', 'style-1'));
    Theme::set('headerTopStyle',theme_option('header_top_sidebar_style', 'style-1'));
@endphp

@if (function_exists('get_galleries'))
    <section>
        <div class="container">
            <div class="row">
                <article class="post post--single">
                    <div class="post__content">
                       <div class="ck-content">
            {!! BaseHelper::clean($gallery->description) !!}
        </div><br />
                        <div class="row" id="list-photo">
                            @foreach (gallery_meta_data($gallery) as $image)
                                @if ($image)
                                    <div class="col-6 col-md-4 col-xl-2 mt-10" data-src="{{ RvMedia::getImageUrl(Arr::get($image, 'img')) }}" data-sub-html="{{ BaseHelper::clean(Arr::get($image, 'description')) }}">
                                        <div class="photo-item">
                                            <div class="thumb">
                                                <a href="{{ BaseHelper::clean(Arr::get($image, 'description')) }}">
                                                    {{ RvMedia::image(Arr::get($image, 'img'), BaseHelper::clean(Arr::get($image, 'description'))) }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>

                        {!! apply_filters(BASE_FILTER_PUBLIC_COMMENT_AREA, null, $gallery) !!}
                    </div>
                </article>
            </div>
        </div>
    </section>
@endif
