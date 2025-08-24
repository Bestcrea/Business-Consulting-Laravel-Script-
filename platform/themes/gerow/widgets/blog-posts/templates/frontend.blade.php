@if (is_plugin_active('blog'))
    <div class="blog-widget">
        @if ($title = $config['title'])
            <h3 class="bw-title">{{ $title }}</h3>
        @endif
        <div class="rc-post-wrap">
            @foreach($posts as $post)
                <div class="rc-post-item">
                    <div class="thumb">
                        <a href="{{ $post->url }}">
                            {{ RvMedia::image($post->image, $post->name, 'thumb') }}
                        </a>
                    </div>
                    <div class="content">
                        <span class="date"><i class="far fa-calendar"></i>{{ $post->created_at->translatedFormat('M d, Y') }}</span>
                        <h2 title="{{ $post->name }}" class="title"><a href="{{ $post->url }}">{{ $post->name }}</a></h2>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif
