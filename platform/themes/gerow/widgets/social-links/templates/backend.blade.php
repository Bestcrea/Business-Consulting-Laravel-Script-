<section class="pb-2" style="max-height: 400px; overflow: auto">
    <div class="mb-3">
        <label>{{ __('Content') }}</label>
        <input type="text" class="form-control" name="content" value="{{ Arr::get($config, 'content') }}">
    </div>
    <div class="mb-3">
        <label>{{ __('Icon') }}</label>
        {!! Form::themeIcon('icon', Arr::get($config, 'icon')) !!}
    </div>

    <x-core::alert type="info" class="small">
        {{ __('Please go to Theme options -> Social links to setup social links.') }}
    </x-core::alert>
</section>
