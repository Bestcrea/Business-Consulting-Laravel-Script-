<div class="mb-3 mb-3">
    <label class="form-label" for="detail">{{ __('Title') }}</label>
    <input type="text" class="form-control" name="title" value="{{ Arr::get($config, 'title') }}">
</div>

<div class="mb-3 mb-3">
    <label class="form-label" for="detail">{{ __('Limit') }}</label>
    <input type="number" class="form-control" name="limit" value="{{ Arr::get($config, 'limit') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Style') }}</label>
    {!! Form::customSelect('style', [
            'style-1'  => __('Style :number', ['number' => 1]),
            'style-2'  => __('Style :number', ['number' => 2]),
    ], Arr::get($config, 'style')) !!}
</div>
