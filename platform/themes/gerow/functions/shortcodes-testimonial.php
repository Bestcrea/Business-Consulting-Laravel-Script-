<?php

use Botble\Shortcode\Compilers\Shortcode as ShortcodeCompiler;
use Botble\Shortcode\Facades\Shortcode;
use Botble\Testimonial\Models\Testimonial;
use Botble\Theme\Facades\Theme;

app()->booted(function (): void {
    if (! is_plugin_active('testimonial')) {
        return;
    }

    Shortcode::register('testimonials', __('Testimonials'), __('Testimonials'), function (ShortcodeCompiler $shortcode): ?string {
        if (! ($testimonialIds = Shortcode::fields()->getIds('testimonial_ids', $shortcode))) {
            return null;
        }

        $testimonials = Testimonial::query()
            ->whereIn('id', $testimonialIds)
            ->wherePublished()
            ->get();

        return Theme::partial('shortcodes.testimonials.index', compact('shortcode', 'testimonials'));
    });

    Shortcode::setAdminConfig('testimonials', function (array $attributes): ?string {
        $testimonials = Testimonial::query()
            ->wherePublished()
            ->pluck('name', 'id')
            ->all();

        return Theme::partial('shortcodes.testimonials.admin', compact('attributes', 'testimonials'));
    });
});
