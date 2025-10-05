@if ($paginator->hasPages())
    <nav>
        <div class="join grid grid-cols-2 mb-4">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <button class="join-item btn btn-outline">Previous page</button>
            @else
                <a class="join-item btn btn-outline" href="{{ $paginator->previousPageUrl() }}" rel="prev">Previous page</a>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a class="join-item btn btn-outline" href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a>
            @else
                <button class="join-item btn btn-outline">Next</button>
            @endif
        </div>
    </nav>
@endif
