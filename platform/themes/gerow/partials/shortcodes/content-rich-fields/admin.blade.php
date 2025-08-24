<section>
    <div class="mb-3">
        <label class="form-label">{{ __('Style') }}</label>
        {!! Form::customSelect(
            'style',
            [
                'style-1' => __('Style :number', ['number' => 1]),
                'style-2' => __('Style :number', ['number' => 2]),
                'style-3' => __('Style :number', ['number' => 3]),
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
        <label class="form-label">{{ __('Description') }}</label>
        <textarea
            class="form-control"
            name="description"
        >{{ Arr::get($attributes, 'description') }}</textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Left Image') }}</label>
        {!! Form::mediaImage('left_image', Arr::get($attributes, 'left_image')) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Left Image Link') }}</label>
        <input
            class="form-control"
            name="left_image_link"
            value="{{ Arr::get($attributes, 'left_image_link') }}"
        />
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Right Image') }}</label>
        {!! Form::mediaImage('right_image', Arr::get($attributes, 'right_image')) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Right Image Link') }}</label>
        <input
            class="form-control"
            name="right_image_link"
            value="{{ Arr::get($attributes, 'right_image_link') }}"
        />
    </div>

    <div class="mb-3">
        {!! Shortcode::fields()->tabs(
            [
                'title' => [
                    'type' => 'text',
                    'title' => __('Title'),
                    'required' => true,
                ],
                'description' => [
                    'type' => 'textarea',
                    'title' => __('Description'),
                    'required' => false,
                ],
                'icon_image' => [
                    'type' => 'image',
                    'title' => __('Icon image'),
                    'required' => false,
                ],
                'icon' => [
                    'type' => 'icon',
                    'title' => __('Icon'),
                    'required' => false,
                ],
            ],
            $attributes,
        ) !!}
    </div>
</section>
