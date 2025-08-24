@if ($content && $detail)
    <div @class(['header-action d-none d-lg-block', 'action-header-style-1' => $headerStyle === 'style-1'])>
        <ul class="list-wrap">
            <li class="header-contact-two">
                @if (! Str::startsWith($detail, ['https://', 'http://', 'mailto:', 'tel:']))
                    <div class="icon">
                        <i class="{{ $icon }}"></i>
                    </div>
                @else
                    <a href="{{ $detail }}" class="p-0">
                        <div class="icon">
                            <i class="{{ $icon }}"></i>
                        </div>
                    </a>
                @endif
                <div class="content">
                    @if (! Str::startsWith($detail, ['https://', 'http://', 'mailto:', 'tel:']))
                        <span>{{ $content }}</span>
                        <a dir="ltr" href="tel:{{ $detail }}">{{ $detail }}</a>
                    @else
                        <a href="{{ $detail }}">
                            <span class="fw-bold fs-6">{{ $content }}</span>
                        </a>
                    @endif
                </div>
            </li>
        </ul>
    </div>
@endif
