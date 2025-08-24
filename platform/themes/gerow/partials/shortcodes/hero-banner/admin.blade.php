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

    <div class="mb-3 d-none shortcode-field-style-item" data-styles="4">
        <label class="form-label">{{ __('Highlight text') }}</label>
        <input
            class="form-control"
            name="highlight_text"
            value="{{ Arr::get($attributes, 'highlight_text') }}"
        />
        {{ Form::helper(__('Title must contain highlight text if you want that text to be highlight.')) }}
    </div>

    <div class="mb-3 d-none shortcode-field-style-item" data-styles="1,3">
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

    <div class="mb-3 d-none shortcode-field-style-item" data-styles="1,3,4">
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

    <div class="mb-3 d-none shortcode-field-style-item" data-styles="1">
        <div class="mb-3">
            <label class="form-label">{{ __('Button play video label') }}</label>
            <input
                class="form-control"
                name="button_play_video_label"
                value="{{ Arr::get($attributes, 'button_play_video_label') }}"
            />
        </div>

        <div class="mb-3">
            <label class="form-label">{{ __('Video URL') }}</label>
            <input
                class="form-control"
                name="youtube_url"
                value="{{ Arr::get($attributes, 'youtube_url') }}"
            />
            {{ Form::helper('YouTube URL (e.g: https://www.youtube.com/watch?v=aJOTlE1K90k) or upload mp4 video in Admin -> Media and give that video URL here.') }}
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Image') }}</label>
        {!! Form::mediaImage('image', Arr::get($attributes, 'image')) !!}
    </div>

    <div class="mb-3 d-none shortcode-field-style-item" data-styles="2,4">
        <label class="form-label">{{ __('Image :number', ['number' => 1]) }}</label>
        {!! Form::mediaImage('image_1', Arr::get($attributes, 'image_1')) !!}
    </div>

    <div class="mb-3 d-none shortcode-field-style-item" data-styles="2">
        <label class="form-label">{{ __('Image :number', ['number' => 2]) }}</label>
        {!! Form::mediaImage('image_2', Arr::get($attributes, 'image_2')) !!}
    </div>

    <div class="mb-3 d-none shortcode-field-style-item" data-styles="1,3,4">
        <label class="form-label">{{ __('Background image') }}</label>
        {!! Form::mediaImage('background_image', Arr::get($attributes, 'background_image')) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Background image :number', ['number' => 1]) }}</label>
        {!! Form::mediaImage('background_image_1', Arr::get($attributes, 'background_image_1')) !!}
    </div>

    <div class="mb-3 d-none shortcode-field-style-item" data-styles="1,2,3">
        <label class="form-label">{{ __('Background image :number', ['number' => 2]) }}</label>
        {!! Form::mediaImage('background_image_2', Arr::get($attributes, 'background_image_2')) !!}
    </div>

    <div class="mb-3 d-none shortcode-field-style-item" data-styles="1,3">
        <label class="form-label">{{ __('Background image :number', ['number' => 3]) }}</label>
        {!! Form::mediaImage('background_image_3', Arr::get($attributes, 'background_image_3')) !!}
    </div>
</section>
