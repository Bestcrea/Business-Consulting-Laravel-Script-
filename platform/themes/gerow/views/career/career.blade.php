@php
    Theme::set('breadcrumbEnabled', false);
    Theme::set('headerStyle', theme_option('header_style', 'style-3'));
    $image = $career->getMetaData('image', true);
    $backgroundImage = $image ? RvMedia::getImageUrl($image) : null;
    $applyUrl = $career->getMetaData('apply_url', true);
@endphp

<section class="career-details">
    @if ($backgroundImage)
        <div class="background-image" @style(["--background-image: url('$backgroundImage') !important;"])></div>
    @endif
    <div class="row">
        <div class="col-lg-10 col-11 m-auto">
            <div class="content" @style(["margin-top: unset !important;" => ! $backgroundImage])>
                <div class="heading">
                    <div class="row">
                        <h2 @class(['title truncate-custom truncate-2-custom', 'col-lg-9' => $applyUrl, 'col-12' => ! $applyUrl])>
                            {{ $career->name }}
                        </h2>
                        @if ($applyUrl)
                            <div class="action col-lg-3 text-start text-lg-end mt-3 mt-lg-0">
                                <a class="btn-apply btn btn-three" href="{{ $applyUrl }}">{{ __('Apply now') }}</a>
                            </div>
                        @endif

                        <div class="meta">
                            <span class="meta-item">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="16" height="16">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                </svg>

                                <span>{{ $career->created_at->translatedFormat('d M Y') }}</span>
                            </span>

                            <span class="meta-item">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="16" height="16">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>

                                <span>{{ number_format($career->views) }}</span>
                            </span>

                            @if($salary = $career->salary)
                                <span class="meta-item">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="16" height="16">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>

                                <span>{{ $salary }}</span>
                            </span>
                            @endif

                            @if($location = $career->location)
                                <span class="meta-item">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="16" height="16">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                                </svg>


                                <span>{!! BaseHelper::clean($location) !!}</span>
                            </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="body-content">
                    <div class="content-inner ck-content">
                        {!! BaseHelper::clean($career->content) !!}
                    </div>

                    {!! apply_filters(BASE_FILTER_PUBLIC_COMMENT_AREA, null, $career) !!}

                    @if ($applyUrl)
                        <div class="action">
                            <a class="btn-apply btn btn-three" href="{{ $applyUrl }}">{{ __('Apply now') }}</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
