<ul {!! BaseHelper::clean($options) !!}>
    @foreach ($menu_nodes->loadMissing('metadata') as $item)
        <li>
            <a
                href="{{ url($item->url) }}"
                target="{{ $item->target }}"
            >{{ $item->title }}</a>
        </li>
    @endforeach
</ul>
