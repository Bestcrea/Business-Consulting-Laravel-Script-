@if (is_plugin_active('gallery') && $gallery)
    <ul class="side-instagram list-wrap">
        @foreach (gallery_meta_data($gallery) as $image)
            <li>
                <a href="{{ Gallery::getGalleriesPageUrl() }}">
                    {{ RvMedia::image($image['img'], $image['description']) }}
                </a>
            </li>
        @endforeach
    </ul>
@endif
