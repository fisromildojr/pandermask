@extends('main')

@section('content')
<h2>Cadastro de Produto - Visualizar produto</h2>
<div class="row">
    <div class="col-12">
        <label for="descricao">Descricao:</label>
        <input type="text" name="descricao" id="" class="form-control" value="{{ $produto->descricao }}" disabled>
    </div>
</div>
<div class="row">
    <div class="col-4">
        <label for="categoria">Categoria</label>
        <input type="text" name="categoria" id="" class="form-control" value="{{ $produto->categoria->descricao }}" disabled>
    </div>
    <div class="col-4">
        <label for="tamanho">Tamanho</label>
        <input type="text" name="tamanho" id="" class="form-control" value="{{ $produto->tamanho }}" disabled>
    </div>
    <div class="col-4">
        <label for="generomasc">Genero</label>
        <input type="text" name="genero" id="" class="form-control" value="{{ $produto->genero ? "Masculino" : "Feminino" }}" disabled>
    </div>
</div>
<div class="row">
    <div class="col-4">
        <label for="vlrproduto">Valor do produto:</label>
        <input type="number" step="0.01" name="vlrproduto" id="vlrproduto" class="form-control" value="{{ number_format($produto->vlrproduto, 2, ',', '.') }}" disabled>
    </div>
    <div class="col-4">
        <label for="estoque">Estoque:</label>
        <input type="number" step="1" name="estoque" id="estoque" class="form-control" value="{{ $produto->estoque }}" disabled>
    </div>
</div>
<div class="row" style="margin-top: 10px">
    <div class="col-12">
        <a href="{{route('produtos.index')}}" class="btn btn-primary">Voltar</a>
    </div>
</div>

@endsection
