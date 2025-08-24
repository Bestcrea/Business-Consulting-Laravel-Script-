@php
    $style = $style ?? 'style-1';
    $author = $post->author;
    $authorDisplayName = $author->getMetaData('display_name', true);
    $category = $post->firstCategory;
@endphp

@if ($style === 'style-5')
    <div class="blog-post-item">
        <div class="blog-post-thumb">
            @if ($image = $post->image)
                <a href="{{ $post->url }}">
                    {{ RvMedia::image($image, $post->name, 'small') }}
                </a>
            @endif
            <span class="date">{{ $post->created_at->translatedFormat('M d, Y') }}</span>
        </div>
        <div class="blog-post-content">
            @if ($category)
                <a href="{{ $category->url }}" class="tag">{{ $category->name }}</a>
            @endif
            <h2 title="{{ $post->name }}" class="title truncate-2-custom">
                <a href="{{ $post->url }}">{{ $post->name }}</a>
            </h2>
            @if ($description = $post->description)
                <p title="{{ $description }}" class="truncate-3-custom mb-0">{!! BaseHelper::clean(nl2br($description)) !!}</p>
            @endif
        </div>
    </div>
@else
    <div
        @class([
            'blog-post-item-four' => $style === 'style-4',
            'blog-post-item-two' => $style !== 'style-4',
        ])>
        <div @class([
            'blog-post-thumb-four' => $style === 'style-4',
            'blog-post-thumb-two' => $style !== 'style-4',
        ])
        >
            <a href="{{ $post->url }}">
                {{ RvMedia::image($post->image, $post->name, 'small') }}
            </a>

            @if ($category && $style !== 'style-4')
                <a
                    href="{{ $category->url }}"
                    @class(['tag', 'tag-two' => $style === 'style-2'])
                >
                    {{ $category->name }}
                </a>
            @endif
        </div>
        <div @class([
            'blog-post-content-two' => $style !== 'style-4',
            'blog-post-content-four' => $style === 'style-4'
        ])
        >
            @if($style === 'style-4')
                @if($category)
                    <a
                        href="{{ $category->url }}"
                        class="tag"
                    >
                        {{ $category->name }}
                    </a>
                @endif
                <div class="blog-meta-two">
                    <ul class="list-wrap">
                        <li><i class="far fa-calendar"></i>{{ $post->created_at->translatedFormat('M d, Y') }}</li>
                        @if ($author->exists)
                            @if ($authorDisplayName)
                                <li>
                                    <i class="far fa-user"></i>
                                    <a href="{{ $post->url }}">{{ __('by :name', ['name' => $authorDisplayName]) }}</a>
                                </li>
                            @else
                                <li>
                                    <i class="far fa-user"></i>
                                    <a href="{{ $post->url }}">{{ __('by :name', ['name' => $authorDisplayName]) }}</a>
                                </li>
                            @endif
                        @endif
                    </ul>
                </div>
            @endif
            <h2
                class="title truncate-2-custom"
                title="{{ $post->name }}"
            >
                <a href="{{ $post->url }}">{{ $post->name }}</a>
            </h2>

            @if ($description = $post->description)
                <p title="{{ $description }}" class="truncate-3-custom">{{ $description }}</p>
            @endif

            @if($style !== 'style-4')
                <div class="blog-meta">
                    <ul class="list-wrap">
                        @if ($author->exists)
                            <li>
                                <span>
                                    {{ RvMedia::image($author->avatar_url, 'avatar', 'small') }}
                                    {{ $authorDisplayName ?: $author->name }}
                                </span>
                            </li>
                        @endif
                        <li><i class="far fa-calendar"></i>{{ $post->created_at->translatedFormat('M d, Y') }}</li>
                    </ul>
                </div>
            @endif
        </div>
    </div>
@endif
