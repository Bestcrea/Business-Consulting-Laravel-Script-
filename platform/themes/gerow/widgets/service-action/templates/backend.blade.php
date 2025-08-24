<div class="mb-3 mb-3">
    <label class="form-label" for="detail">{{ __('Title') }}</label>
    <input type="text" class="form-control" name="title" value="{{ Arr::get($config, 'title') }}">
</div>

<div class="mb-3 mb-3">
    <label class="form-label" for="content">{{ __('Button Label') }}</label>
    <input type="text" class="form-control" name="label" value="{{ Arr::get($config, 'label') }}">
</div>

<div class="mb-3 mb-3">
    <label class="form-label" for="content">{{ __('Button URL') }}</label>
    <input type="text" class="form-control" name="link" value="{{ Arr::get($config, 'link') }}">
</div>

<div class="mb-3">
    <label class="form-label">{{ __('button color') }}</label>
    {!! Form::customColor('button_color', Arr::get($config, 'button_color', '#0055ff'), ['class' => 'form-control']) !!}
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Icon') }}</label>
    {!! Form::themeIcon('icon', Arr::get($config, 'icon')) !!}
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Background color') }}</label>
    {!! Form::customColor('background_color', Arr::get($config, 'background_color', '#334770'), ['class' => 'form-control']) !!}
</div>
