<div class="mb-3">
    <label class="form-label">{{ __('Title') }}</label>
    <input
        class="form-control"
        name="title"
        value="{{ Arr::get($attributes, 'title') }}"
    />
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Subtitle') }}</label>
    <input
        class="form-control"
        name="subtitle"
        value="{{ Arr::get($attributes, 'subtitle') }}"
    />
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Button Label') }}</label>
    <input
        class="form-control"
        name="button_label"
        value="{{ Arr::get($attributes, 'button_label') }}"
    />
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Button URL') }}</label>
    <input
        class="form-control"
        name="button_url"
        value="{{ Arr::get($attributes, 'button_url') }}"
    />
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Image') }}</label>
    {!! Form::mediaImage('image', Arr::get($attributes, 'image')) !!}
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Background image') }}</label>
    {!! Form::mediaImage('background_image', Arr::get($attributes, 'background_image')) !!}
</div>

{!! Shortcode::fields()->lazyLoading($attributes) !!}
