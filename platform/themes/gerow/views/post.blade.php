@php
    Theme::set('pageTitle', $post->name);
    Theme::set('headerStyle', theme_option('header_style', 'style-1'));
    Theme::set('headerTopStyle', theme_option('header_top_sidebar_style', 'style-1'));
    Theme::set('headerFixed', theme_option('header_fixed', true));
@endphp

<section class="blog-details-area">
    <div class="blog-details-wrap">
        <div class="row justify-content-center">
            <div class="col-71">
                @if ($image = $post->image)
                    <div class="blog-details-thumb">
                        {{ RvMedia::image($image, $post->name) }}
                    </div>
                @endif
                <div class="blog-details-content">
                    @if (! theme_option('theme_breadcrumb_enabled', 1))
                        <h2 class="title">{{ $post->name }}</h2>
                    @endif

                    <div class="blog-meta-three">
                        <ul class="list-wrap">
                            <li><i class="far fa-calendar"></i>{{ $post->created_at->translatedFormat('M d, Y') }}
                            </li>
                            @if ($post->author && $post->author->exists)
                                @if ($authorDisplayName = ($post->author->getMetaData('display_name', true) ?: $post->author->name))
                                    <li>
                                        {{ RvMedia::image($post->author->avatar_url, $authorDisplayName) }}
                                        {{ __('by :author', ['author' => $authorDisplayName]) }}
                                    </li>
                                @endif
                            @endif
                            @if ($post->categories->isNotEmpty())
                                <li>
                                    <i class="fas fa-tags"></i>
                                    @foreach ($post->categories as $category)
                                        @if ($loop->last)
                                            <a href="{{ $category->url }}">{{ $category->name }}</a>
                                        @else
                                            <a href="{{ $category->url }}">{{ $category->name }},</a>
                                        @endif
                                    @endforeach
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>

                <section class="section">
                    <div class="container">
                        <div class="content-detail">
                            <div class="blog-details-content">

                                @if ($content = $post->content)
                                    <div class="ck-content">
                                        {!! BaseHelper::clean($content) !!}
                                    </div>
                                @endif

                                {!! apply_filters(BASE_FILTER_PUBLIC_COMMENT_AREA, null, $post) !!}

                                <div class="bd-content-bottom">
                                    <div class="row align-items-center">
                                        @if($post->tags->isNotEmpty())
                                            <div class="col-12">
                                                <div class="post-tags">
                                                    <h5 class="title">{{ __('Tags:') }}</h5>
                                                    <ul class="list-wrap">
                                                        @foreach($post->tags as $tag)
                                                            <li><a href="{{ $tag->url }}">{{ $tag->name }}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        @endif

                                        <div class="col-12">
                                            <div class="blog-post-share justify-content-start mt-4">
                                                <h5 class="title">{{ __('Share:') }}</h5>
                                                {!! Theme::renderSocialSharing($post->url, SeoHelper::getDescription(), $post->image) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-29">
                <aside class="sidebar-widget">
                    {!! dynamic_sidebar('blog_sidebar') !!}
                </aside>
            </div>
        </div>
    </div>
</section>
