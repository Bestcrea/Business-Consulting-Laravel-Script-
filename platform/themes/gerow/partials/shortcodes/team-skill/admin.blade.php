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
        <label class="form-label">{{ __('Description') }}</label>
        <input
            class="form-control"
            name="description"
            value="{{ Arr::get($attributes, 'description') }}"
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
                'index' => [
                    'type' => 'number',
                    'title' => __('Index'),
                    'required' => true,
                ],
            ],
            $attributes,
        ) !!}
    </div>
</section>
