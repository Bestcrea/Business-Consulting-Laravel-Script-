<div class="mb-3">
    <label class="form-label">{{ __('Style') }}</label>
    {!! Form::customSelect(
        'style',
        [
            'style-1' => __('Style :number', ['number' => 1]),
            'style-2' => __('Style :number', ['number' => 2]),
            'style-3' => __('Style :number', ['number' => 3]),
            'style-4' => __('Style :number', ['number' => 4]),
        ],
        Arr::get($attributes, 'style'),
        ['class' => 'shortcode-field-select-style']
    ) !!}
</div>

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

<div class="mb-3 d-none shortcode-field-style-item" data-styles="2,4">
    <label class="form-label">{{ __('Description') }}</label>
    <input
        class="form-control"
        name="description"
        value="{{ Arr::get($attributes, 'description') }}"
    />
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Choose services') }}</label>
    {!! Shortcode::fields()->ids('service_ids', $attributes, $services) !!}
</div>

<div class="mb-3 d-none shortcode-field-style-item" data-styles="1,2,3">
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
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Background image') }}</label>
    {!! Form::mediaImage('background_image', Arr::get($attributes, 'background_image')) !!}
</div>

{!! Shortcode::fields()->lazyLoading($attributes) !!}
