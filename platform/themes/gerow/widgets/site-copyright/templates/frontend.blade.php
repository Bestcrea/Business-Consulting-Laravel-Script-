@switch($config['style'])
    @case('style-1')
        <div class="col-md-6">
            <div class="left-sider">
                @if ($logo = Arr::get($config, 'logo'))
                    <div class="f-logo">
                        <a href="{{ BaseHelper::getHomepageUrl() }}">
                            {{ Theme::getLogoImage(logoUrl: RvMedia::getImageUrl($logo)) }}
                        </a>
                    </div>
                @endif

                @if ($copyright = Arr::get($config, 'copyright'))
                    <div class="copyright-text">
                        <p>{!! BaseHelper::clean(str_replace('%Y', \Carbon\Carbon::now()->year, $copyright)) !!}</p>
                    </div>
                @endif
            </div>
        </div>
    @break

    @default
        @if ($copyright = Arr::get($config, 'copyright'))
            <div class="footer-bottom-two">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright-text-two text-center">
                                <p>{!! BaseHelper::clean(str_replace('%Y', \Carbon\Carbon::now()->year, $copyright)) !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @break
@endswitch

