<ul {!! $options !!}>
    @foreach ($menu_nodes->loadMissing('metadata') as $key => $row)
        <li @class([
            'menu-item-has-children' => $row->has_child,
            'active' => $row->active,
        ])>
            <a
                href="{{ url($row->url) }}"
                title="{{ $row->title }}"
                @if ($row->target !== '_self') target="{{ $row->target }}" @endif
            >
                {{ $row->title }}
            </a>
            @if ($row->has_child)
                {!! Menu::generateMenu([
                    'menu' => $menu,
                    'menu_nodes' => $row->child,
                    'view' => 'main-menu',
                    'options' => ['class' => 'sub-menu'],
                ]) !!}
            @endif
        </li>
    @endforeach
</ul>
