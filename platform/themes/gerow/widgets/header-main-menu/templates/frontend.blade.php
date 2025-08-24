@php
    $textAlignDirection = Arr::get($config, 'direction');
    if ($textAlignDirection === 'left') {
        $className = 'me-auto';
    } elseif ($textAlignDirection === 'right') {
        $className = 'ms-auto';
    } else {
        $className = 'mx-auto';
    }
@endphp

<div class="navbar-wrap main-menu d-none d-lg-flex">
    {!!
       Menu::renderMenuLocation('main-menu', [
           'options' => ['class' => "navigation $className"],
           'view' => 'main-menu',
       ])
    !!}
</div>
