@extends('layouts.main')

@section('title', 'Produto')

@section('content')

<h1>Tela de Produtos</h1>
@if ($id != null)
    <p>Exibindo produto id: {{$id}}</p>
@endif


@endsection