<?php

use Botble\Base\Forms\FieldOptions\MediaImageFieldOption;
use Botble\Base\Forms\FieldOptions\SelectFieldOption;
use Botble\Base\Forms\FieldOptions\TextareaFieldOption;
use Botble\Base\Forms\FieldOptions\TextFieldOption;
use Botble\Base\Forms\Fields\MediaImageField;
use Botble\Base\Forms\Fields\SelectField;
use Botble\Base\Forms\Fields\TextareaField;
use Botble\Base\Forms\Fields\TextField;
use Botble\Shortcode\Compilers\Shortcode as ShortcodeCompiler;
use Botble\Shortcode\Facades\Shortcode;
use Botble\Shortcode\Forms\FieldOptions\ShortcodeTabsFieldOption;
use Botble\Shortcode\Forms\Fields\ShortcodeTabsField;
use Botble\Shortcode\Forms\ShortcodeForm;
use Botble\Team\Models\Team;
use Botble\Theme\Facades\Theme;

app()->booted(function (): void {
    if (! is_plugin_active('team')) {
        return;
    }

    Shortcode::register('teams', __('Teams'), __('Teams'), function (ShortcodeCompiler $shortcode): ?string {
        $tabs = Shortcode::fields()->getTabsData(['team_id', 'image'], $shortcode);

        $teamIds = collect($tabs)->pluck('team_id')->filter()->all();

        if (! $teamIds) {
            return null;
        }

        $collectionTeams = Team::query()
            ->whereIn('id', $teamIds)
            ->wherePublished()
            ->with(['slugable'])
            ->get();

        $teams = [];

        foreach ($tabs as $tab) {
            if ($tab['team_id']) {
                $team = $collectionTeams->where('id', $tab['team_id'])->first();
                if ($team) {
                    if ($tab['image']) {
                        $team->photo = $tab['image'];
                    }

                    $teams[] = $team;
                }
            }
        }

        return Theme::partial('shortcodes.teams.index', compact('shortcode', 'teams'));
    });

    Shortcode::setAdminConfig('teams', function (array $attributes): ShortcodeForm {
        $teams = Team::query()
            ->wherePublished()
            ->pluck('name', 'id')
            ->all();

        return ShortcodeForm::createFromArray($attributes)
            ->withLazyLoading()
            ->add(
                'style',
                SelectField::class,
                SelectFieldOption::make()
                    ->label(__('Style'))
                    ->choices([
                        'style-1' => __('Style :number', ['number' => 1]),
                        'style-2' => __('Style :number', ['number' => 2]),
                        'style-3' => __('Style :number', ['number' => 3]),
                        'style-4' => __('Style :number', ['number' => 4]),
                        'style-5' => __('Style :number', ['number' => 5]),
                        'style-6' => __('Style :number', ['number' => 6]),
                    ])
            )
            ->add(
                'title',
                TextField::class,
                TextFieldOption::make()->label(__('Title'))
            )
            ->add(
                'subtitle',
                TextField::class,
                TextFieldOption::make()->label(__('Subtitle'))
            )
            ->add(
                'description',
                TextareaField::class,
                TextareaFieldOption::make()->label(__('Description'))
            )
            ->add(
                'background_image',
                MediaImageField::class,
                MediaImageFieldOption::make()->label(__('Background image'))
            )
            ->add(
                'tabs',
                ShortcodeTabsField::class,
                ShortcodeTabsFieldOption::make()
                    ->attrs($attributes)
                    ->fields([
                        'team_id' => [
                            'type' => 'select',
                            'title' => __('Team'),
                            'options' => $teams,
                            'required' => true,
                        ],
                        'image' => [
                            'type' => 'image',
                            'title' => __('Image'),
                            'required' => true,
                        ],
                    ])
            );
    });

    Shortcode::register('team-skill', __('Team skill'), __('Team skill'), function (ShortcodeCompiler $shortcode): ?string {
        $tabs = Shortcode::fields()->getTabsData(['title', 'index'], $shortcode);

        return Theme::partial('shortcodes.team-skill.index', compact('shortcode', 'tabs'));
    });

    Shortcode::setAdminConfig('team-skill', function (array $attributes): ?string {
        return Theme::partial('shortcodes.team-skill.admin', compact('attributes'));
    });
});
