{!! Theme::partial('header') !!}

{!! Theme::partial('breadcrumbs') !!}

<section class="section pt-80 pb-80" style="min-height: 400px">
    <div class="container">
        {!! Theme::content() !!}
    </div>
</section>

{!! Theme::partial('footer') !!}
