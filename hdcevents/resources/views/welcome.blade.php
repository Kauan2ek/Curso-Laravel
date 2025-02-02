@extends('layouts.main')

@section('title', 'HDC Events')


@section('content')

<h1>Algum título</h1>
<img src="/img/banner.jpg" alt="Banner">
@if (10 > 5)
    <p>A condição é true</p>
@endif

<h2>Bem vindo {{$nome}}, você tem {{$idade}} anos, e trabalha como {{ $profissao}}</h2>

@if($nome == "Kauan")
    <p>O nome é Kauan</p>
@elseif ($nome == "Mateus")
    <p>O nome é Mateus</p>
@else
    <p>O nome não é Kauan</p>
@endif

@for ($i = 0; $i < count($arr); $i++)
    <p>{{$arr[$i]}} - {{$i}}</p>
    @if ($i == 2)
        <p>O $i é 2</p>
    @endif
@endfor

@foreach ($nomes as $nome)
    <p>{{$loop->index}} - {{$nome}}</p>
@endforeach

@php
    $name = "Talles";
    echo $name;
@endphp

@endsection