@if ($paginator->hasPages())
    <div class="pagination flex-l-m flex-w m-l--6 p-t-25">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="item-pagination flex-c-m trans-0-4 disabled-pagination" aria-disabled="true"
               aria-label="@lang('pagination.previous')">
                &lsaquo;
            </a>
        @else
            <a class="item-pagination flex-c-m trans-0-4" href="{{ $paginator->previousPageUrl() }}" rel="prev"
               aria-label="@lang('pagination.previous')">
                &lsaquo;
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="item-pagination flex-c-m trans-0-4 disabled-pagination">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="item-pagination flex-c-m trans-0-4 active-pagination dark-color" aria-current="page">
                            {{ $page }}
                        </a>
                    @else
                        <a class="item-pagination flex-c-m trans-0-4" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="item-pagination flex-c-m trans-0-4" href="{{ $paginator->nextPageUrl() }}" rel="next"
               aria-label="@lang('pagination.next')">
                &rsaquo;
            </a>
        @else
            <a class="item-pagination flex-c-m trans-0-4 disabled-pagination" aria-disabled="true"
               aria-label="@lang('pagination.next')">
                &rsaquo;
            </a>
        @endif
    </div>
@endif
