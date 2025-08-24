@php
    Theme::set('pageTitle', $service->name);
    Theme::set('headerStyle', theme_option('header_style', 'style-3'));
    Theme::set('headerTopStyle',theme_option('header_top_sidebar_style', 'style-2'));
    $serviceSidebarContent = dynamic_sidebar('service_detail_sidebar');
@endphp

<section class="services-details-area">
    <div @class(['container' => $serviceSidebarContent])>
        <div @class(['row justify-content-center' => $serviceSidebarContent])>
            @if($serviceSidebarContent)
                <div class="col-29">
                    <aside class="services-sidebar">
                        {!! $serviceSidebarContent !!}
                    </aside>
                </div>
            @endif
            <div class="col-71">
                <div class="services-details-wrap">
                    @if (theme_option('show_service_image_at_the_top_of_service_page', 'yes') == 'yes' && $image = $service->image)
                        <div class="services-details-thumb">
                            {{ RvMedia::image($image, $service->name) }}
                        </div>
                    @endif
                    <div class="services-details-content">
                        @if ($description = $service->description)
                            <h2 class="title">{{ $service->description }}</h2>
                        @endif

                        <div class="ck-content">
                            {!! BaseHelper::clean($service->content) !!}
                        </div>

                        {!! apply_filters(BASE_FILTER_PUBLIC_COMMENT_AREA, null, $service) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-5">
    {!! dynamic_sidebar('service_detail_bottom_sidebar') !!}
</section>
