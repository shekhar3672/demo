
@if ($paginator->hasPages())


<ul class="pagination justify-content-end margin-auto">

@if ($paginator->onFirstPage())
            <li class="page-item"><a class="page-link pdding-none"><i class=" material-icons keyboard_arrow_left_right">keyboard_arrow_left</i></a></li>
@else
<li class="page-item"><a class="page-link pdding-none" href="{{ $paginator->previousPageUrl() }}"><i class=" material-icons keyboard_arrow_left_right">keyboard_arrow_left</i></a></li>
@endif

 @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item"><a class="page-link active">{{ $page }}</a></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())

        <li class="page-item">
<a class="page-link pdding-none" href="{{ $paginator->nextPageUrl() }}"> <i class=" material-icons keyboard_arrow_left_right">keyboard_arrow_right</i></a>
</li>
        @else
            
        <li class="page-item">
<a class="page-link pdding-none" > <i class=" material-icons keyboard_arrow_left_right">keyboard_arrow_right</i></a>
</li>
        @endif

</ul>


@endif

