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
    <label class="form-label">{{ __('Subtitle') }}</label>
    <input
        class="form-control"
        name="subtitle"
        value="{{ Arr::get($attributes, 'subtitle') }}"
    />
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Choose testimonials') }}</label>
    {!! Shortcode::fields()->ids('testimonial_ids', $attributes, $testimonials) !!}
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Image') }}</label>
    {!! Form::mediaImage('image', Arr::get($attributes, 'image')) !!}
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Background image') }}</label>
    {!! Form::mediaImage('background_image', Arr::get($attributes, 'background_image')) !!}
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
    <label class="form-label">{{ __('Background image :number', ['number' => 4]) }}</label>
    {!! Form::mediaImage('background_image_4', Arr::get($attributes, 'background_image_4')) !!}
</div>

<div class="border p-2 mb-2">
    <h6>{{ __('Box') }}</h6>
    <div class="mb-3">
        <label class="form-label">{{ __('Box title') }}</label>
        <input
            class="form-control"
            name="box_title"
            value="{{ Arr::get($attributes, 'box_title') }}"
        />
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Box image') }}</label>
        {!! Form::mediaImage('box_image', Arr::get($attributes, 'box_image')) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Box Description') }}</label>
        <textarea
            class="form-control"
            name="box_description"
        >{{ Arr::get($attributes, 'box_description') }}</textarea>
    </div>
</div>

{!! Shortcode::fields()->lazyLoading($attributes) !!}
