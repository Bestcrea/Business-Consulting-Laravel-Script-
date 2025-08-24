<div class="career-item">
    @if ($icon = $career->getMetaData('icon', true))
        <div class="thumb">
            <div class="wrapper-image">
                {{ RvMedia::image($icon, $career->name, 'thumb') }}
            </div>
        </div>
    @endif

    <div class="content">
        <div class="title">
            <a title="{{ $career->name }}" class="truncate-custom truncate-2-custom" href={{ $career->url }}>{{ $career->name }}</a>
        </div>

        @if($description = $career->description)
            <div class="description">
                {!! BaseHelper::clean($description) !!}
            </div>
        @endif

        <div class="cta-btn action">
            <a href="{{ $career->url }}" class="btn">
                {{ __('Learn More') }}
            </a>
        </div>
    </div>
</div>
