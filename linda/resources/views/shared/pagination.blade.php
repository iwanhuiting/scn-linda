@if ($paginator->lastPage() > 1)
    <ul class="uk-pagination uk-flex-center">

        @if($paginator->currentPage() > 1)
            <li class="{{ ($paginator->currentPage() == 1) 
                            ? ' disabled' 
                            : '' 
                        }}">
                <a href="{{ $paginator->url(1) }}">
                    <i uk-icon="icon:triangle-left"></i>
                </a>
            </li>
        @endif

        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            @if($paginator->currentPage() == $i)
                <li class="uk-active">
                    <span>{{ $i }}</span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
                </li>
            @endif
        @endfor

        @if($paginator->currentPage() < $paginator->lastPage())
            <li>
                <a href="{{ $paginator->url($paginator->currentPage()+1) }}" >
                    <i uk-icon="icon:triangle-right"></i>
                </a>
            </li>
        @endif

    </ul>
@endif