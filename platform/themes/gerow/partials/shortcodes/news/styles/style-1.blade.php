<section
    class="blog-area-two blog-bg-two"
    @if ($bgImage = $shortcode->background_image) data-background="{{ RvMedia::getImageUrl($bgImage) }}" @endif
>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title-two text-center mb-50 tg-heading-subheading animation-style3">
                    @if ($subtitle = $shortcode->subtitle)
                        <span class="sub-title">{!! BaseHelper::clean($subtitle) !!}</span>
                    @endif

                    @if ($title = $shortcode->title)
                        <h2 class="title tg-element-title">{!! BaseHelper::clean($title) !!}</h2>
                    @endif

                    @if ($description = $shortcode->description)
                        <p>{!! BaseHelper::clean(nl2br($description)) !!}</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($posts as $post)
                <div class="col-lg-4 col-md-6 col-sm-10">
                    {!! Theme::partial('blog.post.item', ['post' => $post, 'style' => $shortcode->post_style]) !!}
                </div>
            @endforeach
        </div>
    </div>
</section>
