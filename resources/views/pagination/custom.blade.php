<ul class="pagination justify-content-center">
    @if($paginator->onFirstPage())
        <li class="page-item disabled"><span class="page-link prev">&laquo; Previous</span></li>
    @else
        <li class="page-item"><a class="page-link prev" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo; Previous</a></li>
    @endif

    @foreach ($elements as $element)
        @if (is_string($element))
            <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
        @endif

        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                @else
                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach

    @if($paginator->hasMorePages())
        <li class="page-item"><a class="page-link next" href="{{ $paginator->nextPageUrl() }}" rel="next">Next &raquo;</a></li>
    @else
        <li class="page-item disabled"><span class="page-link next">Next &raquo;</span></li>
    @endif
</ul>
