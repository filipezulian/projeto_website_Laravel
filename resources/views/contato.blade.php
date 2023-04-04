@extends('layouts.main')

@section('title', 'Contato')

@section('content')

<div class="container">
    <header>
        <div class="Logo">
            <img src="/imgs/CristinaLogo.png" alt="LogoCristina" class="logoIMG">
        </div>
        <div class="navItems">
            <a class="navText" href="{{ route('home')}}">HOME</a>
            <a class="navText" href="{{ route('servicos')}}">SERVIÇOS</a>
            <a class="currentNav" href="{{ route('contato') }}">CONTATO</a>
            <a class="navText" href="{{ route('faq')}}">FAQ</a>
        </div>
    </header>
</div>
<div class="CorpoConsulta">
    <div class="Corpo1">
        
    </div>
    <div class="Corpo2">

    </div>
</div>

@endsection