<h1>Produtos</h1>
<a href="/produtos/add" class="btn btn-default">Adicionar Produto</a>
<table class="table">
    <thead>
        <tr>
            <th width="110">Imagem</th>
            <th width="500">Nome</th>
            <th width="100">Categoria</th>
            <th width="100">Preço</th>
            <th width="100">Quantidade</th>
            <th width="200">Ações</th>
        </tr>
    </thead>
    <?php foreach($produtos as $produto): ?>
        <tr>
            <td><img src="/assets/images/<?php echo $produto['imagem']; ?>" border="0" height="60" /></td>
            <td><?php echo $produto['nome']; ?></td> 
            <td><?php echo utf8_encode($produto['categoria']); ?></td>
            <td>R$ <?php echo $produto['preco']; ?></td>
            <td><?php echo $produto['quantidade']; ?></td>
            <td>
                <a href="/produtos/edit/<?php echo $produto['id'] ?>" class="btn btn-default">Editar</a>
                <a href="/produtos/del/<?php echo $produto['id'] ?>" class="btn btn-default">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
    <?php if (isset($_GET['p']) && !empty($_GET['p']) && $_GET['p'] > 1): ?> 
        <a href="/produtos?p=<?php echo ($_GET['p'] - 1); ?>" class="btn btn-default">Anterior</a>
    <?php endif; ?>    
<?php
    $page = ceil($quantidade / $limit);
    for($i = 1; $i <= $page; $i++): ?>
        <a href="/produtos?p=<?php echo $i; ?>" class="btn btn-default"><?php echo $i; ?></a>
<?php endfor;?>
<?php if (isset($_GET['p']) && !empty($_GET['p']) && $_GET['p'] < $page): ?> 
        <a href="/produtos?p=<?php echo ($_GET['p'] + 1); ?>" class="btn btn-default">Próxima</a>
    <?php endif; ?> 

