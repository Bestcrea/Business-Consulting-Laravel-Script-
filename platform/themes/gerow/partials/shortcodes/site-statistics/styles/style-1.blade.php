<section class="counter-area-two">
    <div class="container">
        <div class="counter-item-wrap">
            <div class="row justify-content-center">
                @foreach ($tabs as $tab)
                    @continue(! $tab['data'])
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="counter-item-two">
                                <h2 class="count">
                                    <span
                                        class="odometer"
                                        data-count="{{ $tab['data'] }}"
                                    ></span>{{ $tab['unit'] }}
                                </h2>

                            @if ($tab['title'])
                                <p>{!! BaseHelper::clean($tab['title']) !!}</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
