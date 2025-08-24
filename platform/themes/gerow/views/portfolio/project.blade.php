@php
    Theme::set('pageTitle', $project->name);
    Theme::set('headerStyle', theme_option('header_style', 'style-1'));
    Theme::set('headerTopStyle',theme_option('header_top_sidebar_style', 'style-1'));
@endphp

<section class="project-details-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="project-details-wrap">
                    <div class="row">
                        @if ($image = $project->image)
                            <div class="col-71">
                                <div class="project-details-thumb">
                                    {{ RvMedia::image($image, $project->name, attributes: ['style' => 'width: 100%']) }}
                                </div>
                            </div>
                        @endif
                        <div class="col-29">
                            <div class="project-details-info">
                                <h4 class="title">{{ __('Project Information') }}</h4>
                                <ul class="list-wrap">
                                    @if($project->client)
                                        <li><span class="me-1">{{ __('Client') }}:</span>{{ $project->client }}</li>
                                    @endif
                                    @if($project->start_date)
                                        <li><span class="me-1">{{ __('Date') }}:</span>{{ $project->start_date->translatedFormat('M d, Y') }}
                                        </li>
                                    @endif
                                    @if ($project->category)
                                        <li><span class="me-1">{{ __('Category') }}:</span> <a href="{{ $project->category->url }}">{{ $project->category->name }}</a></li>
                                    @endif
                                    @if ($project->author)
                                        <li><span class="me-1">{{ __('Author') }}:</span> {{ $project->author }}</li>
                                    @endif
                                    @if($project->place)
                                        <li><span class="me-1">{{ __('Place') }}:</span> {{ $project->place }}</li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="project-details-content">
                        <h2 class="title">{{ $project->name }}</h2>
                        @if ($description = $project->description)
                            <p>{!! BaseHelper::clean($description) !!}</p>
                        @endif

                        <div class="ck-content">{!! BaseHelper::clean($project->content) !!}</div>

                        <div class="col-12">
                            <div class="blog-post-share justify-content-start mt-4 mb-4">
                                <strong>{{ __('Share:') }}</strong>
                                {!! Theme::renderSocialSharing($project->url, SeoHelper::getDescription(), $project->image) !!}
                            </div>
                        </div>

                        {!! apply_filters(BASE_FILTER_PUBLIC_COMMENT_AREA, null, $project) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    {!! dynamic_sidebar('project_detail_bottom_sidebar') !!}
</section>
