@extends('mainLayout')

@section('title', 'eStore')
@section('content')
    <h2>Categorias</h2>

    @if(isset($listaCategoria) && count($listaCategoria) > 0)
        <ul>
            @foreach($listaCategoria as $cat)
                <li>{{ $cat -> categoria }}</li>
            @endforeach
        </ul>
    @endif

    @if(isset($lista) && count($lista) > 0)
        <ul>
            @foreach
                <li>{{ $prod -> nome }}</li>
            @endforeach
        </ul>
    @endif
@endsection
