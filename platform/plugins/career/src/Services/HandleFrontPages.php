<?php

namespace ArchiElite\Career\Services;

use ArchiElite\Career\Models\Career;
use Botble\Base\Supports\Helper;
use Botble\SeoHelper\Facades\SeoHelper;
use Botble\SeoHelper\SeoOpenGraph;
use Botble\Slug\Models\Slug;
use Botble\Theme\Facades\AdminBar;
use Botble\Theme\Facades\Theme;
use Illuminate\Support\Facades\Auth;

class HandleFrontPages
{
    public function handle(Slug|array $slug): array|Slug
    {
        if (! $slug instanceof Slug) {
            return $slug;
        }

        if ($slug->reference_type == Career::class) {
            $career = Career::query()
                ->where('id', $slug->reference_id);

            if (! Auth::guard()->check() || ! request()->input('preview')) {
                $career = $career->wherePublished();
            }

            /**
             * @var Career $career
             */
            $career = $career->firstOrFail();

            Helper::handleViewCount($career, 'career_viewed');

            SeoHelper::setTitle($career->name)
                ->setDescription($career->description);

            $meta = new SeoOpenGraph();
            $meta->setDescription($career->description);
            $meta->setUrl($career->url);
            $meta->setTitle($career->name);
            $meta->setType('article');

            SeoHelper::setSeoOpenGraph($meta);

            SeoHelper::meta()->setUrl($career->url);
            Theme::breadcrumb()->add(__('Careers'), route('public.careers'));

            Theme::breadcrumb()->add($career->name);

            do_action(BASE_ACTION_PUBLIC_RENDER_SINGLE, CAREER_MODULE_SCREEN_NAME, $career);

            if (function_exists('admin_bar')) {
                AdminBar::registerLink(
                    trans('plugins/career::career.edit_career'),
                    route('careers.edit', $career->id),
                    null,
                    'careers.edit'
                );
            }

            $relatedCareers = Career::query()
                ->wherePublished()
                ->where('id', '<>', $career->getKey())
                ->with('metadata')
                ->inRandomOrder()
                ->limit(3)
                ->get();

            return [
                'view' => 'career.career',
                'default_view' => 'plugins/career::themes.career',
                'data' => compact('career', 'relatedCareers'),
                'slug' => $career->slug,
            ];
        }

        return $slug;
    }
}
