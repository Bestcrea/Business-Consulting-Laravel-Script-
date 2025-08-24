<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <div class="job-list">
                @foreach ($careers as $career)
                    <div class="job-item">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="job-title">
                                    <a href="{{ $career->url }}">{{ $career->name }}</a>
                                </div>
                                <div class="job-body">
                                    <p>{{ $career->location }}</p>
                                    <p>{{ __('Salary') }}: {{ $career->salary }}</p>
                                    <p>{{ __('Posted at') }}: {{ $career->created_at->translatedFormat('M d, Y') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <nav class="d-flex justify-content-center pt-3">
                    {!! $careers->links() !!}
                </nav>
            </div>
        </div>
        <div class="col-sm-3">
            {!! dynamic_sidebar('primary_sidebar') !!}
        </div>
    </div>
</div>
<br>
<br>
