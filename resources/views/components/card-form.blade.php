{{-- aparece en registro web --}}
<div class="card shadows-m">
    @isset($titulo)
        <div class="card-header bg-primary rounded-top">
            <h1 class="text-white">{{ $titulo }}</h1>
            @isset($show)
                @if (!$show)
                    <span class="text-danger">* Indica que la pregunta es obligatoria</span> 
                @endif
            @endisset
        </div>
    @endisset
    <div class="card-body">
        {{$slot}}
    </div>
</div>
