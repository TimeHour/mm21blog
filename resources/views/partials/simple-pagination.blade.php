@if ($paginator->hasPages())

        <div class="join ">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <a class="join-item btn btn-outline btn-disabled">@lang('pagination.previous')</a>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="join-item btn btn-outline">@lang('pagination.previous')</a>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                 <a href="{{ $paginator->nextPageUrl() }}" class="join-item btn btn-outline">@lang('pagination.next')</a>

            @else
                <a class="join-item btn btn-outline btn-disabled">@lang('pagination.next')</a>
            @endif

        </div>
@endif



