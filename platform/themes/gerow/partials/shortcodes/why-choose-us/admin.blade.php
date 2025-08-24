<section>
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
        <label class="form-label">{{ __('Description') }}</label>
        <textarea
            class="form-control"
            name="description"
        >{{ Arr::get($attributes, 'description') }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Image') }}</label>
        {!! Form::mediaImage('image', Arr::get($attributes, 'image')) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Background image :number', ['number' => 1]) }}</label>
        {!! Form::mediaImage('background_image_1', Arr::get($attributes, 'background_image_1')) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Background image :number', ['number' => 2]) }}</label>
        {!! Form::mediaImage('background_image_2', Arr::get($attributes, 'background_image_2')) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Background image :number', ['number' => 3]) }}</label>
        {!! Form::mediaImage('background_image_3', Arr::get($attributes, 'background_image_3')) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Background color') }}</label>
        {!! Form::customColor('background_color', Arr::get($attributes, 'background_color', theme_option('secondary_color')), [
            'class' => 'form-control',
        ]) !!}
    </div>

    <div class="mb-3">
        {!! Shortcode::fields()->tabs(
            [
                'title' => [
                    'title' => __('Title'),
                    'required' => true,
                ],
                'data' => [
                    'type' => 'number',
                    'title' => __('Data'),
                    'required' => true,
                ],
                'unit' => [
                    'type' => 'text',
                    'title' => __('Unit'),
                    'required' => false,
                ],
            ],
            $attributes,
        ) !!}
    </div>
</section>
