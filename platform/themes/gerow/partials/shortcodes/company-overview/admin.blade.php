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
            'style-6' => __('Style :number', ['number' => 6]),
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

<div class="mb-3">
    <label class="form-label">{{ __('Description') }}</label>
    <textarea
        class="form-control"
        name="description"
    >{{ Arr::get($attributes, 'description') }}</textarea>
</div>

<div class="mb-3 d-none shortcode-field-style-item" data-styles="1,2,3,5,6">
    <label class="form-label">{{ __('Image') }}</label>
    {!! Form::mediaImage('image', Arr::get($attributes, 'image')) !!}
</div>

<div class="mb-3 d-none shortcode-field-style-item" data-styles="1,2,3">
    <label class="form-label">{{ __('Image :number', ['number' => 1]) }}</label>
    {!! Form::mediaImage('image_1', Arr::get($attributes, 'image_1')) !!}
</div>

<div class="mb-3 d-none shortcode-field-style-item" data-styles="1,2,4,5,6">
    <label class="form-label">{{ __('Background image') }}</label>
    {!! Form::mediaImage('background_image', Arr::get($attributes, 'background_image')) !!}
</div>

<div class="mb-3 d-none shortcode-field-style-item" data-styles="1,2,5,6">
    <label class="form-label">{{ __('Background image :number', ['number' => 1]) }}</label>
    {!! Form::mediaImage('background_image_1', Arr::get($attributes, 'background_image_1')) !!}
</div>

<div class="mb-3 d-none shortcode-field-style-item" data-styles="2,6">
    <label class="form-label">{{ __('Background image :number', ['number' => 2]) }}</label>
    {!! Form::mediaImage('background_image_2', Arr::get($attributes, 'background_image_2')) !!}
</div>

<div class="mb-3 d-none shortcode-field-style-item" data-styles="3">
    <label class="form-label">{{ __('Button Label') }}</label>
    <input
        class="form-control"
        name="button_label"
        value="{{ Arr::get($attributes, 'button_label') }}"
    />
    <label class="form-label">{{ __('Button URL') }}</label>
    <input
        class="form-control"
        name="button_url"
        value="{{ Arr::get($attributes, 'button_url') }}"
    />
</div>

<div class="border p-2 mb-2 mb-3 d-none shortcode-field-style-item" data-styles="3">
    <h6>{{ __('Author') }}</h6>
    <div class="mb-3">
        <label class="form-label">{{ __('Author name') }}</label>
        <input
            class="form-control"
            name="author_name"
            value="{{ Arr::get($attributes, 'author_name') }}"
        />
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Author bio') }}</label>
        <input
            class="form-control"
            name="author_bio"
            value="{{ Arr::get($attributes, 'author_bio') }}"
        />
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Author avtar') }}</label>
        {!! Form::mediaImage('author_avatar', Arr::get($attributes, 'author_avatar')) !!}
    </div>
</div>

<div class="mb-3 d-none shortcode-field-style-item" data-styles="1,2,3,4,5">
    {!! Shortcode::fields()->tabs(
        [
            'title' => [
                'title' => __('Title'),
                'required' => true,
            ],
            'description' => [
                'type' => 'textarea',
                'title' => __('Description'),
                'required' => false,
            ],
            'logo_image' => [
                'type' => 'image',
                'title' => __('Logo image'),
                'required' => false,
            ],
            'logo' => [
                'type' => 'icon',
                'title' => __('Logo'),
                'required' => false,
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

{!! Shortcode::fields()->lazyLoading($attributes) !!}
