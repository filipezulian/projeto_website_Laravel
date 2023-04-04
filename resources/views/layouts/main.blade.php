<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Fontes do google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@500&family=Roboto&family=Source+Sans+Pro&display=swap"
        rel="stylesheet">

    <!--Bootstrap-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <!--CSS da Aplicação-->

    <link href="/css/styles.css" rel="stylesheet">
    <title>@yield('title')</title>

</head>

<body>
    @yield('content')
                <footer>
                    <div>
                        <h1 class="textFooter1" >Contato</h1>
                        <h1 class="textFooter2" >Cristina de Oliveira Abuchaim</h1>
                        <h1 class="textFooter2" >Email: cristinaabuchaim@gmail.com</h1>
                        <h1 class="textFooter2" >Whatsapp: +55 (48) 9918-8940</h1>
                    </div>
                </footer>
</body>

</html>
