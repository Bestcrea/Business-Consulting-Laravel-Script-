@if (is_plugin_active('blog'))
    <div class="sidebar-search">
        <form role="search" method="get" action="{{ route('public.search') }}">
            <input type="search" placeholder="{{ __('Enter keyword') }}" value="{{ BaseHelper::stringify(request()->query('q')) }}" name="q" required>
            <button type="submit" title="{{ __('Search') }}"><i class="flaticon-search"></i></button>
        </form>
    </div>
@endif
