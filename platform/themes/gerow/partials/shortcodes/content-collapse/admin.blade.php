<section>
    <div class="mb-3">
        {!! Shortcode::fields()->tabs([
            'title' => [
                'type' => 'text',
                'title' => __('Title'),
                'required' => true,
            ],
            'description' => [
                'type' => 'textarea',
                'title' => __('content'),
                'required' => false,
            ],
        ]) !!}
    </div>
</section>
