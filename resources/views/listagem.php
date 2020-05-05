<html>

<head>
    <link href="css/app.css" rel="stylesheet"><!-- acessando o css do laravel -->
    <title>Controle de estoque</title>
</head>

<body>
    <div class="container">
        <h1>Listagem de produtos</h1>
        <!-- view alimentada pelo controller produtos -->
        <table class="table">
            <?php foreach ($produtos as $p) : ?>
                <tr>
                    <td><?= $p->nome ?></td>
                    <td>R$ <?= $p->valor ?></td>
                    <td><?= $p->descricao ?></td>
                    <td><?= $p->quantidade ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>

</body>

</html>