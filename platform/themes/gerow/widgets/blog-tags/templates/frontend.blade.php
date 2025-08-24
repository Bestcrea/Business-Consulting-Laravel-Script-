@if (is_plugin_active('blog') && $tags->isNotEmpty())
    <div class="blog-widget">
        @if ($title = $config['title'])
            <h3 class="bw-title">{{ $title }}</h3>
        @endif

        <div class="bs-tag-list">
            <ul class="list-wrap">
                @foreach($tags as $tag)
                    <li><a href="{{ $tag->url }}">{{ $tag->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
