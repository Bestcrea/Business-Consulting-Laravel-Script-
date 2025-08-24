<div class="blog-post-wrap">
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-md-6">
                {!! Theme::partial('blog.post.item', compact('post')) !!}
            </div>
        @endforeach

        @if ($posts instanceof \Illuminate\Contracts\Pagination\LengthAwarePaginator)
            <div class="text-center mt-30">
                {!! $posts->withQueryString()->links(Theme::getThemeNamespace('partials.pagination')) !!}
            </div>
        @endif
    </div>
</div>
