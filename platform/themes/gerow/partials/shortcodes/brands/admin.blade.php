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
    {!! Shortcode::fields()->tabs(
        [
            'name' => [
                'title' => __('Name'),
                'required' => true,
            ],
            'image' => [
                'type' => 'image',
                'title' => __('Logo'),
                'required' => true,
            ],
            'link' => [
                'type' => 'text',
                'title' => __('URL'),
                'required' => false,
            ],
        ],
        $attributes,
        40
    ) !!}
</div>

{!! Shortcode::fields()->lazyLoading($attributes) !!}
