@php
    Theme::set('pageTitle', __('Careers'));
    Theme::layout('page-detail');
    Theme::set('headerStyle', theme_option('header_style', 'style-2'));
@endphp

@if (is_plugin_active('career') && $careers->isNotEmpty())
    <div class="container career-list pt-80">
        <div class="row g-4">
            @forelse($careers as $career)
                <div class="col-lg-6 col-12">
                    {!! Theme::partial('careers.item', compact('career')) !!}
                </div>
            @empty
                <div>
                    <h3 class="text-center">{{ __('No data to display') }}</h3>
                </div>
            @endforelse
        </div>

        @if ($careers instanceof \Illuminate\Contracts\Pagination\LengthAwarePaginator)
            <div class="text-center mt-30">
                {!! $careers->withQueryString()->links(Theme::getThemeNamespace('partials.pagination')) !!}
            </div>
        @endif
    </div>
@endif
