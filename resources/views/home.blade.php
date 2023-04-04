@extends('layouts.main')

@section('title', 'home')

@section('content')
    <div class="container">
        <header>
            <div class="Logo">
                <img src="/imgs/CristinaLogo.png" alt="LogoCristina" class="logoIMG">
            </div>
            <div class="navItems">
                <a class="currentNav" href="{{ route('home') }}">HOME</a>
                <a class="navText" href="{{ route('servicos') }}">SERVIÇOS</a>
                <a class="navText" href="{{ route('contato') }}">CONTATO</a>
                <a class="navText" href="{{ route('faq') }}">FAQ</a>
            </div>
        </header>
    </div>
    <div class="CorpoConsulta">
        <div class="Corpo1">
            <div class="slide">
                <div class="imageCristinaFundo">
                </div>
                <div class="imageCristina">

                </div>
                <h1 class="TituloNome">Cristina de Oliveira Abuchaim</h1>
                <ul>
                    <li class="TituloFaculade"> Psicóloga formada em 1994 pela PUC/RS </li>
                    <li class="Especialista"> Especialista em: </li>
                    <h1 class="Diagnóstico"> Diagnóstico Psicológico- PUC/RS </h1>
                    <h1 class="Psicoterapia"> Psicoterapia Psicanalítica- Instituto Abuchaim/RS </h1>
                    <h1 class="Neuropsicopedagogia"> Neuropsicopedagogia-FACON/SP </h1>
                    <h1 class="Neuropsicologia"> Neuropsicologia IPOG/SC </h1>
                    <li class="PósFaculdade"> Pós graduanda em Terapia Cognitivo-comportamental IPOG/SC </li>
                </ul>

                <div class="botaoContato">
                    <a class="TextBotao" href="{{ route('contato') }}">Contato</a>
                </div>
            </div>
            <div class="botaoFaq">
                <a class="faqText1" href="{{ route('faq') }}">Alguma Duvida?</a>
                <a class="faqText2" href="{{ route('faq') }}">Veja as resposta de perguntas frequentes</a>
                <a class="faqText3"href="{{ route('faq') }}">---></a>
            </div>
        </div>
        <div class="Corpo2">
            <div>
                <img class="borboleta" src="/imgs/borboleta2.png" height="469" width="469" alt="Borboleta">
            </div>
            <div class="mapa2"></div>
            <iframe
              class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7075.795535212718!2d-48.50766164390867!3d-27.53463505768017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9527470d7aaf826b%3A0x4d3572e8bdd0a188!2sSquare%20SC!5e0!3m2!1sen!2sbr!4v1680582052879!5m2!1sen!2sbr"
                width="990" height="540" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
@endsection
