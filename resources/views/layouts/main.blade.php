<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    @yield('link')
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <img src="/img/eng.png" alt="">
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="#" onclick="onOff()">+ Adicionar Termo</a></li>
            </ul>
        </nav>
    </header>

    @yield('content')

    <footer>
        <p>Todos os direitos reservados &copy; 2021</p>
        <p>By <strong>Rikellme</strong></p>
    </footer>

    <script src="/js/script.js"></script>
</body>
</html>
