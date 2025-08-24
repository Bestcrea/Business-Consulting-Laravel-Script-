<section class="counter-area-three pb-90">
    @if (count($tabs) > 0)
        <div class="container">
            <div class="row justify-content-center">
                @foreach($tabs as $tab)
                    @continue(! $tab['data'])
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="counter-item-three">
                            <div class="counter-icon">
                                @if ($tab['icon'])
                                    <i class="{{ $tab['icon'] }}"></i>
                                @endif
                            </div>
                            <div class="counter-content">
                                <h2 class="count"><span class="odometer" data-count="{{ $tab['data'] }}"></span>{{ $tab['unit'] }}</h2>

                                @if ($tab['title'])
                                    <p>{!! BaseHelper::clean($tab['title']) !!}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</section>
