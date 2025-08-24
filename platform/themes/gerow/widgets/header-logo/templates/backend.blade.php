<div class="mb-3">
    <label class="form-label">{{ __('Logo image') }}</label>
    {!! Form::mediaImage('logo_image', Arr::get($config, 'logo_image')) !!}
    <x-core::alert type="info" class="small mt-2">
        {{ __("If you don't set it, it will be inherited from Theme options -> Logo.") }}
    </x-core::alert>
</div>
