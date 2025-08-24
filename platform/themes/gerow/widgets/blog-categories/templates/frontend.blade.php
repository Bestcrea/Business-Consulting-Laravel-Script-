@if (is_plugin_active('blog') && $categories->isNotEmpty())
    <div class="blog-widget">
        @if ($title = $config['title'])
            <h3 class="bw-title">{{ $title }}</h3>
        @endif
        <div class="bs-cat-list">
            <ul class="list-wrap">
                @foreach($categories as $category)
                    <li>
                        <a href="{{ $category->url }}">
                            {{ $category->name }}
                            <span>{{ number_format($category->posts_count) }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endif

