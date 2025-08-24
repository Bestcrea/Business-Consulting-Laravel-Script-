<div class="team-skill-wrap">
    @if ($title = $shortcode->title)
        <h3 class="title-two">{{ $title }}</h3>
    @endif

    @if ($description = $shortcode->description)
        {!! BaseHelper::clean(nl2br($description)) !!}
    @endif

    <div class="progress-wrap">
        @foreach ($tabs as $tab)
            <div class="progress-item">
                @if ($title = $tab['title'])
                    <h3 class="title">{{ $title }}</h3>
                @endif

                @if ($index = $tab['index'])
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="{{ $index }}" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar wow slideInLeft" data-wow-delay=".1s" style="width: {{ $index }}%; visibility: visible; animation-delay: 0.1s; animation-name: slideInLeft;"><span>{{ $index }}%</span></div>
                        </div>
                @endif
            </div>
        @endforeach
    </div>
</div>
