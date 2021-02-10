@extends('main')

@section('content')
    <h2>Cadastro de Produto - Alterar produto</h2>
    <form action="{{route('produtos.update', $produto)}}" method="post">
        @csrf
        @method('PUT')
        @include('produtos.form')
    </form>
@endsection
