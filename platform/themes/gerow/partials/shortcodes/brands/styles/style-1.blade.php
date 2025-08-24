<div class="brand-area-two">
    <div class="container">
        @if ($title = $shortcode->title)
            <div class="section-title-two mb-60 tg-heading-subheading animation-style3">
                <h2 class="title tg-element-title">{!! BaseHelper::clean($title) !!}</h2>
            </div>
        @endif
        <div class="row brand-active">
            @foreach ($tabs as $tab)
                @if ($tab['image'])
                    <div class="col-lg-12">
                        <div class="brand-item">
                            <a href="{{ $tab['link'] }}" target="_blank">
                                {{ RvMedia::image($tab['image'], $tab['name'], lazy: false) }}
                            </a>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
