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
    <label class="form-label">{{ __('Button Label') }}</label>
    <input
        class="form-control"
        name="button_label"
        value="{{ Arr::get($attributes, 'button_label') }}"
    />
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Video URL') }}</label>
    <input
        class="form-control"
        name="youtube_video_url"
        value="{{ Arr::get($attributes, 'youtube_video_url') }}"
    />
    {{ Form::helper('YouTube URL (e.g: https://www.youtube.com/watch?v=aJOTlE1K90k) or upload mp4 video in Admin -> Media and give that video URL here.') }}
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Background image') }}</label>
    {!! Form::mediaImage('background_image', Arr::get($attributes, 'background_image')) !!}
</div>

<div class="mb-3">
    <label class="form-label">{{ __('Background image :number', ['number' => 1]) }}</label>
    {!! Form::mediaImage('background_image_1', Arr::get($attributes, 'background_image_1')) !!}
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
        <label class="form-label">{{ __('Box subtitle') }}</label>
        <input
            class="form-control"
            name="box_subtitle"
            value="{{ Arr::get($attributes, 'box_subtitle') }}"
        />
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Box description') }}</label>
        <input
            class="form-control"
            name="box_description"
            value="{{ Arr::get($attributes, 'box_description') }}"
        />
    </div>

    {!! Shortcode::fields()->tabs(
        [
            'title' => [
                'type' => 'text',
                'title' => __('Title'),
                'required' => true,
            ],
            'percent' => [
                'type' => 'number',
                'title' => __('Percent'),
                'required' => true,
            ],
        ],
        $attributes,
    ) !!}
</div>

 {!! Shortcode::fields()->lazyLoading($attributes) !!}
