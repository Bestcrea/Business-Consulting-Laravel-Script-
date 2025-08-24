<div class="brand-area-four">
    <div class="container">
        <div class="brand-item-wrap-two">
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
</div>
