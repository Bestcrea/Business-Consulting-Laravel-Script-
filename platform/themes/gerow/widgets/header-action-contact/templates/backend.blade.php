<div class="mb-3 mb-3">
    <label class="form-label" for="content">{{ __('Content') }}</label>
    <input type="text" class="form-control" name="content" value="{{ Arr::get($config, 'content')}}">
</div>

<div class="mb-3 mb-3">
    <label class="form-label" for="detail">{{ __('Detail') }}</label>
    <input type="text" class="form-control" name="detail" value="{{ Arr::get($config, 'detail') }}">
    {!! Form::helper(__('Use http:// or https:// to add your custom URL')) !!}
</div>

<div class="mb-3 mb-3">
    <label class="form-label">{{ __('Icon') }}</label>
    {!! Form::themeIcon('icon', Arr::get($config, 'icon')) !!}
</div>
