<section>
    <div class="mb-3">
        <label class="form-label">{{ __('Style') }}</label>
        {!! Form::customSelect(
            'style',
            [
                'style-1' => __('Style :number', ['number' => 1]),
                'style-2' => __('Style :number', ['number' => 2]),
                'style-3' => __('Style :number', ['number' => 3]),
                'style-4' => __('Style :number', ['number' => 4]),
                'style-5' => __('Style :number', ['number' => 5]),
            ],
            Arr::get($attributes, 'style'),
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
        <label class="form-label">{{ __('Badge') }}</label>
        <input
            class="form-control"
            name="badge"
            value="{{ Arr::get($attributes, 'badge') }}"
        />
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Description') }}</label>
        <input
            class="form-control"
            name="description"
            value="{{ Arr::get($attributes, 'description') }}"
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
            name="link"
            value="{{ Arr::get($attributes, 'link') }}"
        />
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Background image') }}</label>
        {!! Form::mediaImage('background_image', Arr::get($attributes, 'background_image')) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Background color') }}</label>
        {!! Form::customColor('background_color', Arr::get($attributes, 'background_color', '#E0F0F6'), [
            'class' => 'form-control',
        ]) !!}
        <p class="text-muted">{{ __('Can not be used with Background image') }}</p>
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Choose services') }}</label>
        {!! Shortcode::fields()->ids('service_ids', $attributes, $services) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Shape image') }}</label>
        {!! Form::mediaImage('shape_image', Arr::get($attributes, 'shape_image')) !!}
        <p class="text-muted">{{ __('This is only available for style 2') }}</p>
    </div>
</section>
