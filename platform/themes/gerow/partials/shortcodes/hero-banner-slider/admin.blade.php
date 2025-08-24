<div class="mb-3">
    <label class="form-label">{{ __('Title 1') }}</label>
    <input
        class="form-control"
        name="title_1"
        value="{{ Arr::get($attributes, 'title_1') }}"
    />
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Title 2') }}</label>
    <input
        class="form-control"
        name="title_2"
        value="{{ Arr::get($attributes, 'title_2') }}"
    />
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Subtitle 1') }}</label>
    <input
        class="form-control"
        name="subtitle_1"
        value="{{ Arr::get($attributes, 'subtitle_1') }}"
    />
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Subtitle 2') }}</label>
    <input
        class="form-control"
        name="subtitle_2"
        value="{{ Arr::get($attributes, 'subtitle_2') }}"
    />
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Description 1') }}</label>
    <textarea
        class="form-control"
        name="description_1"
    >{{ Arr::get($attributes, 'description_1') }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Description 2') }}</label>
    <textarea
        class="form-control"
        name="description_2"
    >{{ Arr::get($attributes, 'description_2') }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Button Label 1') }}</label>
    <input
        class="form-control"
        name="button_label_1"
        value="{{ Arr::get($attributes, 'button_label_1') }}"
    />
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Button URL 1') }}</label>
    <input
        class="form-control"
        name="button_url_1"
        value="{{ Arr::get($attributes, 'button_url_1') }}"
    />
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Button Label 2') }}</label>
    <input
        class="form-control"
        name="button_label_2"
        value="{{ Arr::get($attributes, 'button_label_2') }}"
    />
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Button URL 2') }}</label>
    <input
        class="form-control"
        name="button_url_2"
        value="{{ Arr::get($attributes, 'button_url_2') }}"
    />
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Image :number', ['number' => 1]) }}</label>
    {!! Form::mediaImage('image_1', Arr::get($attributes, 'image_1')) !!}
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Background image :number', ['number' => 1]) }}</label>
    {!! Form::mediaImage('background_image_1', Arr::get($attributes, 'background_image_1')) !!}
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Image :number', ['number' => 2]) }}</label>
    {!! Form::mediaImage('image_2', Arr::get($attributes, 'image_2')) !!}
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Background image:number', ['number' => 2]) }}</label>
    {!! Form::mediaImage('background_image_2', Arr::get($attributes, 'background_image_2')) !!}
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Is autoplay?') }}</label>
    <select
        class="form-select"
        name="is_autoplay"
    >
        <option
            value="no"
            @if (Arr::get($attributes, 'is_autoplay', $defaultAutoplay ?? 'no') == 'no') selected @endif
        >{{ trans('core/base::base.no') }}</option>
        <option
            value="yes"
            @if (Arr::get($attributes, 'is_autoplay', $defaultAutoplay ?? 'no') == 'yes') selected @endif
        >{{ trans('core/base::base.yes') }}</option>
    </select>
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Autoplay speed (if autoplay enabled)') }}</label>
    {!! Form::customSelect(
        'autoplay_speed',
        array_combine([2000, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000], [2000, 3000, 4000, 5000, 6000, 7000, 8000, 9000, 10000]),
        Arr::get($attributes, 'autoplay_speed', 3000),
    ) !!}
</div>
