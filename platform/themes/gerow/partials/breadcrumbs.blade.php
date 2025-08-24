@if (theme_option('theme_breadcrumb_enabled', 1) && Theme::get('breadcrumbEnabled', true))
    @php
        $bgImage = Theme::get('breadcrumbBackgroundImage') ?: theme_option('breadcrumb_background');
        $breadcrumbBackgroundImageOverlayEnabled = Theme::get('breadcrumbBackgroundImageOverlayEnabled') ?: theme_option('breadcrumb_background_overlay_enabled', 'yes');
        $firstShapeImage = theme_option('breadcrumb_first_shape_image');
        $secondShapeImage = theme_option('breadcrumb_second_shape_image');
    @endphp

    <section
        class="breadcrumb-area breadcrumb-bg @if($breadcrumbBackgroundImageOverlayEnabled === 'no') breadcrumb-bg-transparent @endif"
        @if ($bgImage)
            data-background="{{ RvMedia::getImageUrl($bgImage) }}"
        style="background-image: url({{ RvMedia::getImageUrl($bgImage) }});"
        @endif
    >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        @if ($pageTitle = Theme::get('pageTitle'))
                            <h2 class="title">{!! BaseHelper::clean($pageTitle) !!}</h2>
                        @endif
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                @foreach (Theme::breadcrumb()->getCrumbs() as $crumb)
                                    @if (!$loop->last)
                                        <li class="breadcrumb-item"><a href="{{ $crumb['url'] }}">{{ $crumb['label'] }}</a>
                                        </li>
                                    @else
                                        <li
                                            class="breadcrumb-item active"
                                            aria-current="page"
                                        >{{ $crumb['label'] }}</li>
                                    @endif
                                @endforeach
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        @if($firstShapeImage || $secondShapeImage)
            <div class="breadcrumb-shape-wrap">
                @if($firstShapeImage)
                    {{ RvMedia::image($firstShapeImage, 'shape') }}
                @endif

                @if($secondShapeImage)
                    {{ RvMedia::image($secondShapeImage, 'shape') }}
                @endif
            </div>
        @endif
    </section>
@endif
