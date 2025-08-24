@if ($logoImage)
    <div class="logo">
        <a href="{{ BaseHelper::getHomepageUrl() }}">
            {{ Theme::getLogoImage(logoUrl: $logoImage) }}
        </a>
    </div>
@endif
