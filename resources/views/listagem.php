<html>
    <body>
        <h1>Listagem de produtos</h1>
        <!-- view alimentada pelo controller produtos -->
        <table>
            <?php foreach($produtos as $p):?>
            <tr>
                <td><?=$p->nome?></td>
                <td>R$ <?=$p->valor?></td>
                <td><?=$p->descricao?></td>
                <td><?=$p->quantidade?></td>
            </tr>
            <?php endforeach?>
        </table>
    </body>
</html>