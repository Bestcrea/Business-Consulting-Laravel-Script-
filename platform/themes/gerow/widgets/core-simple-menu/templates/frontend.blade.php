<div class="col-lg-2 col-md-5 col-sm-6">
    <div class="footer-widget">
        @if ($title = Arr::get($config, 'name'))
            <h3 class="fw-title">{!! BaseHelper::clean($title) !!}</h3>
        @endif
        <div class="footer-link">
            <ul class="list-wrap">
                @foreach($items as $item)
                    @if (($label = $item->label) && ($url = $item->url))
                        <li>
                            <a
                                href="{{ url($url) }}"
                                {!! $item->attributes ? BaseHelper::clean($item->attributes) : null !!}
                            >
                                {!! BaseHelper::clean($label) !!}
                            </a>
                        </li>
                    @endif
                @endforeach
                <li></li>
            </ul>
        </div>
    </div>
</div>

