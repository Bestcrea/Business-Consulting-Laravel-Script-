<section class="section mt-5 mb-5">
    <div class="container">
        @if ($image = $career->getMetaData('image', true))
            <div class="box-image-detail">
                <img
                    class="bd-rd16 d-block"
                    src="{{ RvMedia::getImageUrl($image) }}"
                    alt="{{ $career->name }}"
                >
            </div>
        @endif

        <div class="box-detail-content">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-8 col-sm-12 col-12 mb-30">
                    <h3 class="color-brand-1 mb-10 mt-0">{{ $career->name }}</h3>
                    <span class="date-post font-xs color-grey-300">
                        {{ $career->created_at->translatedFormat('d M Y') }}
                    </span>
                    <span class="time-read font-xs color-grey-300">
                        {{ number_format($career->views) }}
                    </span>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-start text-md-end mb-30">
                    <a
                        class="btn btn-primary"
                        href="{{ $career->getMetaData('apply_url', true) }}"
                    >
                        {{ __('Apply Now') }}
                    </a>
                </div>
            </div>
            <div class="border-bottom bd-grey-80 mb-40 pt-3"></div>
            <h4 class="mt-5">{{ __('Job summary') }}</h4>
            <div class="box-info-job">
                <div class="row align-items-start">
                    @if ($salary = $career->salary)
                        <div class="col-lg-6 col-md-6">
                            <div class="item-job">
                                <div class="left-title">
                                    <span class="ps-1">{{ __('Salary') }}</span>
                                </div>
                                <div class="right-info">
                                    {{ $salary }}
                                </div>
                            </div>
                        </div>
                    @endif

                    @if ($location = $career->location)
                        <div class="col-md-6 col-lg-6">
                            <div class="item-job">
                                <div class="left-title">
                                    <span class="ps-1">{{ __('Location') }}</span>
                                </div>
                                <div class="right-info">
                                    {{ $location }}
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            <br>
            <div class="ck-content">{!! BaseHelper::clean($career->content) !!}</div>
            <br>

            <div class="box-info-bottom">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-5 col-12 mb-30">
                        <a
                            class="btn btn-primary"
                            href="{{ $career->getMetaData('apply_url', true) }}"
                        >
                            {{ __('Apply Now') }}
                        </a>
                    </div>
                    @php($tags = collect(json_decode($career->getMetaData('tags', true), true))->pluck('value'))

                    @if ($tags->isNotEmpty())
                        <div
                            class="d-flex gap-2 justify-content-end col-lg-6 col-md-6 col-sm-7 col-12 text-start text-sm-end mb-30">
                            @foreach ($tags as $tag)
                                <span class="btn btn-tag gap-2">{{ $tag }}</span>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@if ($relatedCareers->isNotEmpty())
    <section class="section mt-50">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-8 col-md-8">
                    <h2 class="color-brand-1 mb-20">{{ __('More Job Openings') }}</h2>
                    <p class="font-lg color-gray-500">
                        {{ __('We regularly recruit at many positions. See related jobs here') }}
                    </p>
                </div>
            </div>
            <div class="row mt-50">
                @foreach ($relatedCareers as $career)
                    <div
                        class="col-lg-4 col-md-6 col-sm-6 wow animate__animated animate__fadeIn"
                        data-wow-delay=".{!! $loop->index !!}s"
                    >
                        <div class="card-offer hover-up">
                            <div class="card-image">
                                <img
                                    src="{{ RvMedia::getImageUrl($career->getMetaData('icon', true)) }}"
                                    alt="{{ $career->name }}"
                                >
                            </div>
                            <div class="card-info">
                                <h4 class="color-brand-1 mb-15">
                                    <a href="{{ $career->url }}">{{ $career->name }}</a>
                                </h4>
                                <p class="font-md color-grey-500 mb-15">{{ Str::words($career->description, 12) }}</p>
                                <div class="box-button-offer">
                                    <a
                                        class="btn btn-default font-sm-bold pl-0 color-brand-1"
                                        href="{{ $career->url }}"
                                    >
                                        {{ __('Learn More') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
