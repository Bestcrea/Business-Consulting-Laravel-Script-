<div class="mb-3">
    <label class="form-label" for="content">{{ __('Content') }}</label>
    <input type="text" id="content" class="form-control" name="content" value="{{ Arr::get($config, 'content') }}">
</div>

<div class="mb-3">
    <label class="form-label" for="link">{{ __('Link to') }}</label>
    <input type="text" id="link" class="form-control" name="link" value="{{ Arr::get($config, 'link') }}">
</div>

<div class="mb-3">
    <label class="form-label" for="icon">{{ __('Icon') }}</label>
    {!! Form::themeIcon('icon', Arr::get($config, 'icon')) !!}
</div>
