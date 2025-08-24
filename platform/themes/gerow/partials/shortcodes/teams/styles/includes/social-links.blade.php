<ul class="list-wrap">
    @foreach (['facebook', 'twitter', 'instagram'] as $social)
        @if ($url = Arr::get($socials, $social))
            @switch($social)
                @case('twitter')
                    <li>
                        <a href="{{ $url }}" target="_blank" title="X">{!! BaseHelper::renderIcon('ti ti-brand-x') !!}</a>
                    </li>
                    @break

                @case('facebook')
                    <li>
                        <a href="{{ $url }}" target="_blank" title="Facebook">{!! BaseHelper::renderIcon('ti ti-brand-facebook') !!}</a>
                    </li>
                    @break

                @case('instagram')
                    <li>
                        <a href="{{ $url }}" target="_blank" title="Instagram">{!! BaseHelper::renderIcon('ti ti-brand-instagram') !!}</a>
                    </li>
                    @break
            @endswitch
        @endif
    @endforeach
</ul>
