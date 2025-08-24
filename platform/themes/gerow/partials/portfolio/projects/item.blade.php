<div class="project-item-four">
    <div class="project-thumb-four">
        {{ RvMedia::image($project->image, $project->image) }}
        <div class="project-link">
            <a href="{{ $project->url }}">
                <i class="fa fa-eye"></i>
            </a>
        </div>
    </div>
    <div class="project-content-four">
        <h4 class="title"><a href="{{ $project->url }}">{{ $project->name }}</a></h4>
        @if ($category = $project->category)
            <span>{{ $category->name }}</span>
        @endif
    </div>
</div>
