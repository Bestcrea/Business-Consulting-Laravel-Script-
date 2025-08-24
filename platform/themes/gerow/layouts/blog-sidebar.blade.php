{!! Theme::partial('header') !!}

{!! Theme::partial('breadcrumbs') !!}

<section class="blog-area pt-80 pb-80">
    <div class="container">
        <div class="inner-blog-wrap">
            <div class="row justify-content-center">
                <div class="col-71">
                    {!! Theme::content() !!}
                </div>
                <div class="col-29">
                    <aside class="blog-sidebar">
                        {!! dynamic_sidebar('blog_sidebar') !!}
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>

{!! Theme::partial('footer') !!}
