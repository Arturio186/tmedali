@if ($paginator->hasPages())
<style>
.pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 8px;
    margin-top: 32px;
}

.pagination a,
.pagination span {
    width: 42px;
    height: 42px;

    display: flex;
    justify-content: center;
    align-items: center;

    border-radius: 10px;

    text-decoration: none;

    border: 1px solid #d9dde5;

    color: #1b1b1b;

    background: white;

    transition: .2s;
}

.pagination a:hover {
    border-color: #0E284C;
    color: #0E284C;
}

.pagination .active {
    background: #0E284C;
    color: white;
    border-color: #0E284C;
}

.pagination .disabled {
    opacity: .35;
    cursor: default;
}

.pagination .dots {
    border: none;
    background: transparent;
}
</style>

    <nav class="pagination">

        @if ($paginator->onFirstPage())

            <span class="disabled">
                ←
            </span>

        @else

            <a href="{{ $paginator->previousPageUrl() }}">
                ←
            </a>

        @endif

        @foreach ($elements as $element)

            @if (is_string($element))

                <span class="dots">
                    {{ $element }}
                </span>

            @endif

            @if (is_array($element))

                @foreach ($element as $page => $url)

                    @if ($page == $paginator->currentPage())

                        <span class="active">
                            {{ $page }}
                        </span>

                    @else

                        <a href="{{ $url }}">
                            {{ $page }}
                        </a>

                    @endif

                @endforeach

            @endif

        @endforeach

        @if ($paginator->hasMorePages())

            <a href="{{ $paginator->nextPageUrl() }}">
                →
            </a>

        @else

            <span class="disabled">
                →
            </span>

        @endif

    </nav>

@endif