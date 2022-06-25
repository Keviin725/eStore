@extends('mainLayout')

@section('title', 'eStore')
@section('content')

<br>
<div id="search-container" class="col-md-12">
    <form action="">
        <input type="text" id="search" class="form-control" placeholder="Pesquisar...">
    </form>
</div>
<div class="container">
    <h2>Produtos</h2>
    <div class="row">

        <div class="card col-3 mb-3 md-3">
            <img src="{{asset('img/products/boardR.png')}}" alt="board">
            <div class="card-body">
                <h5 class="card-title">Mother board Ryzen 3</h5>
                <h6 class="card-preco">12500MZN</h6>
                <a href="#" class="btn btn-sm btn-primary">adicionar ao carrinho</a>
            </div>
        </div>
        <div class="card col-3 mb-3 md-3">
            <img src="{{asset('img/products/board.png')}}" alt="board">
            <div class="card-body">
                <h5 class="card-title">Mother board ROG STRIX B550-F GAMING</h5>
                <h6 class="card-preco">12500MZN</h6>
                <a href="#" class="btn btn-sm btn-primary">adicionar ao carrinho</a>
            </div>
        </div>
        <div class="card col-3 mb-3 md-3">
            <img src="{{asset('img/products/board-rogZ.png')}}" alt="board">
            <div class="card-body">
                <h5 class="card-title">Mother board ROG STRIX B550-F GAMING</h5>
                <h6 class="card-preco">12500MZN</h6>
                <a href="#" class="btn btn-sm btn-primary">adicionar ao carrinho</a>
            </div>
        </div>
        <div class="card col-3 mb-3 md-3">
            <img src="{{asset('img/products/placa-grafica.png')}}" alt="Placa Grafica">
            <div class="card-body">
                <h5 class="card-title">Placa Grafica RTX</h5>
                <h6 class="card-preco">12500MZN</h6>
                <a href="#" class="btn btn-sm btn-primary">adicionar ao carrinho</a>
            </div>
        </div>
        <div class="card col-3 mb-3 md-3">
            <img src="{{asset('img/products/monitor-rogS.png')}}" alt="Monitor rogS">
            <div class="card-body">
                <h5 class="card-title">Monitor ROG Swift PG43UQ</h5>
                <h6 class="card-preco">12500MZN</h6>
                <a href="#" class="btn btn-sm btn-primary">adicionar ao carrinho</a>
            </div>
        </div>
        <div class="card col-3 mb-3 md-3">
            <img src="{{asset('img/products/monitor-rogSX.png')}}" alt="Monitor rogSX">
            <div class="card-body">
                <h5 class="card-title">Monitor ROG Strix XG49VQ</h5>
                <h6 class="card-preco">12500MZN</h6>
                <a href="#" class="btn btn-sm btn-primary">adicionar ao carrinho</a>
            </div>
        </div>

    </div>
</div>


@endsection
