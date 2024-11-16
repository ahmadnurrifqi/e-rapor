@if ($paginator->hasPages())
    <div class="slide-data">
        @if ($paginator->onFirstPage())
            <button><span class="arrow material-symbols-outlined"
                    style="cursor: not-allowed;">keyboard_arrow_left</span></button>
        @else
            <button onclick="window.location = '{{ $paginator->previousPageUrl() }}'"><span
                    class="arrow material-symbols-outlined">keyboard_arrow_left</span></button>
        @endif

        @if ($paginator->hasMorePages())
            <button onclick="window.location='{{ $paginator->nextPageUrl() }}'"><span
                    class="arrow material-symbols-outlined">keyboard_arrow_right</span></button>
        @else
            <button><span class="arrow material-symbols-outlined"
                    style="cursor: not-allowed;">keyboard_arrow_right</span></button>
        @endif
    </div>
@endif
