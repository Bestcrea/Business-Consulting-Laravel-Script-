<div class="mb-3">
    <label class="form-label">{{ __('FAQ categories') }}</label>
    {!! Shortcode::fields()->ids('category_ids', $attributes, $categories) !!}
</div>

