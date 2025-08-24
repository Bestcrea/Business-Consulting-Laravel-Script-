<div class="col-lg-2 col-md-5 col-sm-6">
    <div class="footer-widget">
        @if ($title = Arr::get($config, 'name'))
            <h3 class="fw-title">{!! BaseHelper::clean($title) !!}</h3>
        @endif
        <div class="footer-link">
            {!! Menu::generateMenu([
                   'slug' => Arr::get($config, 'menu_id'),
                   'options' => ['class' => 'list-wrap'],
                   'view' => 'footer-menu',
                ])
           !!}
        </div>
    </div>
</div>
