<section>
    <div class="mb-3">
        <label class="form-label">{{ __('Post style') }}</label>
        {!! Form::customSelect(
            'post_style',
            [
                'style-1' => __('Style :number', ['number' => 1]),
                'style-2' => __('Style :number', ['number' => 2]),
                'style-3' => __('Style :number', ['number' => 3]),
                'style-4' => __('Style :number', ['number' => 4]),
                'style-5' => __('Style :number', ['number' => 5]),
            ],
            Arr::get($attributes, 'post_style'),
        ) !!}
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Address') }}</label>
        <input
            class="form-control"
            name="address"
            value="{{ Arr::get($attributes, 'address') }}"
        />
    </div>
</section>
