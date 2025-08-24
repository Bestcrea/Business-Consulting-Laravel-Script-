<div class="mb-3">
    <label class="form-label">{{ __('Logo') }}</label>
    {!! Form::mediaImage('logo', Arr::get($config, 'logo')) !!}
</div>

<div class="mb-3 mb-3">
    <label class="form-label" for="site-copyright">{{ __('Copyright') }}</label>
    <input type="text" id="site-copyright" class="form-control" name="copyright" value="{{ Arr::get($config, 'copyright') }}">
    <x-core::alert type="info" class="small mt-2">
        {{ __('Using %Y to display current year.') }}
    </x-core::alert>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Style') }}</label>
    {!! Form::customSelect('style', [
            'default'  => __('Default'),
            'style-1'  => __('Style :number', ['number' => 1]),
        ], Arr::get($config, 'style')) !!}
</div>
