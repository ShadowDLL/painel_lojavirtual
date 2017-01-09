<h1>Detalhes da Venda</h1>
<h3>Produtos da Venda</h3>
<table class="table table-striped">
    <thead>
        <tr>
            <th><strong>Imagem</th>
            <th><strong>Nome</th>
            <th><strong>Quantidade</th>
            <th><strong>Preco</th>     
        </tr>
    </thead>
    <?php foreach($produtos as $produto):?>
        <tr>
            <td><img src="/assets/images/<?php echo $produto['imagem']; ?>" border="0" width="100" /></td>
            <td><?php echo utf8_encode($produto['nome']); ?></td>
            <td><?php echo $produto['quantidade']; ?></td>
            <td>R$ <?php echo $produto['preco']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
