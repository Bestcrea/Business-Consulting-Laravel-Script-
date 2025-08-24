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
        <label class="form-label">{{ __('Image') }}</label>
        {!! Form::mediaImage('image', Arr::get($attributes, 'image')) !!}
    </div>

    <div class="mb-3">
        {!! shortcode()->fields()->tabs(
                [
                    'title' => [
                        'type' => 'text',
                        'title' => __('Title'),
                        'required' => true,
                    ],
                    'address' => [
                        'type' => 'text',
                        'title' => __('Address'),
                        'required' => true,
                    ],
                    'phone' => [
                        'type' => 'text',
                        'title' => __('Phone'),
                        'required' => true,
                    ],
                    'email' => [
                        'type' => 'text',
                        'title' => __('Email'),
                        'required' => true,
                    ],
                ],
                $attributes,
            ) !!}
    </div>
</section>
