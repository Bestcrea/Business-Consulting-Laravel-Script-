@if ($paginator->hasPages())
    <nav class="pagination-wrap mt-30">
        <ul class="pagination list-wrap">
            @if ($paginator->onFirstPage())
                <li class="page-item">
                    <span class="page-link page-prev prev-page" aria-disabled="true">
                        <i class="fas fa-angle-double-left"></i>
                    </span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link page-prev" href="{{ $paginator->previousPageUrl() }}">
                        <i class="fas fa-angle-double-left"></i>
                    </a>
                </li>
            @endif
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li>
                        <a class="page-dotted disabled" href="#" aria-disabled="true"></a>
                    </li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active">
                                <a class="page-link" href="#" aria-current="page">{{ $page }}</a>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link page-next" href="{{ $paginator->nextPageUrl() }}">
                        <i class="fas fa-angle-double-right"></i>
                    </a>
                </li>
            @else
                <li class="page-item">
                    <span class="page-link page-next disabled" aria-disabled="true">
                        <i class="fas fa-angle-double-right"></i>
                    </span>
                </li>
            @endif
        </ul>
    </nav>
@endif
