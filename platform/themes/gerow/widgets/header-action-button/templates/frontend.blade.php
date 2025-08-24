@if ($sidebar == 'header_top_sidebar_style_1')
    @if (($buttonLabel = Arr::get($config, 'content')) && ($link))
        <div class="col-lg-3 p-0">
            <div class="header-top-btn">
                <a class="text-truncate" href="{{ $link }}">
                    @if ($icon = Arr::get($config, 'icon'))
                        <i class="{{ $icon }}"></i>
                    @endif
                    <span>{!! BaseHelper::clean($buttonLabel) !!}</span>
                </a>
            </div>
        </div>
    @endif
@else
    @if ($content = Arr::get($config, 'content'))
        <div @class(['header-action d-none d-lg-block', 'action-header-style-1' => $headerStyle === 'style-1'])>
            <ul class="list-wrap">
                <li class="header-btn">
                    <a href="{{ $link }}" class="btn btn-two">{{ $content }}</a>
                </li>
            </ul>
        </div>
    @endif
@endif
