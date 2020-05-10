<html>

<head>
    <link href="css/app.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <title>Controle de estoque em laravel</title>
</head>

<body>
    <div class='container'>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="nav-header">
                    <a class="navbar-brand" href="/produtos">
                        Estoque Laravel
                    </a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route('produtos.listagem')}}">Listagem</a></li>
                    <li><a href="{{route('produtos.novo')}}">Novo produto</a></li>
                </ul>
            </div>
        </nav>
        @yield('conteudo')
        <footer class="footer">
            <p>Projeto desenvolvido estudando o livro de laravel da casa do codigo</p>
        </footer>
    </div>
</body>

</html>