@if (theme_option('social_links') && $socialLinks = json_decode(theme_option('social_links'), true))
    @foreach($socialLinks as $social)
        @php($social = collect($social)->pluck('value', 'key'))
        <li>
            <a target="_blank" href="{{ $social->get('url') }}" title="{{ $social->get('social-name') }}">
                @if($social->get('social-icon-image'))
                    {{ RvMedia::image($social->get('social-icon-image'), 'icon', attributes: ['width' => 18, 'height' => 18, 'style' => 'vertical-align: top; margin-top: 1px;']) }}
                @elseif($social->get('social-icon'))
                    {!! BaseHelper::renderIcon($social->get('social-icon')) !!}
                @endif
            </a>
        </li>
    @endforeach
@else
    @foreach(range(1, 10) as $i)
        @if (Arr::get($config, "link_$i") && (Arr::get($config, "icon_$i") || Arr::get($config, "icon_image_$i")))
            <li>
                <a target="_blank" href="{{ Arr::get($config, "link_$i") }}">
                    @if(Arr::get($config, "icon_image_$i"))
                        {{ RvMedia::image(Arr::get($config, "icon_image_$i"), 'icon', attributes: ['width' => 18, 'height' => 18, 'style' => 'vertical-align: top; margin-top: 5px;']) }}
                    @elseif(Arr::get($config, "icon_$i"))
                        {!! BaseHelper::renderIcon(Arr::get($config, "icon_$i")) !!}
                    @endif
                </a>
            </li>
        @endif
    @endforeach
@endif
