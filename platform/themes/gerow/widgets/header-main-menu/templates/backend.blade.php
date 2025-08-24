<div class="mb-3">
    <label class="form-label">{{ __('Text align') }}</label>
    {!! Form::customSelect('direction', [
        'center'  => __('Center'),
        'left'  => __('Left'),
        'right'  => __('Right'),
    ], Arr::get($config, 'direction')) !!}
</div>
