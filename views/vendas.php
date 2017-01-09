<?php global $config; ?>
<h1>Vendas</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th width="50">ID</th>
            <th>Nome do Cliente</th>
            <th>Valor</th>
            <th>Forma de Pgto.</th>
            <th>Status</th>
            <th width="200">Ações</th>
        </tr>
    </thead>
    <?php foreach($vendas as $venda): ?>
        <tr>
            <td><?php echo $venda['id']; ?></td>
            <td><?php echo utf8_encode($venda['nome']); ?></td>
            <td>R$ <?php echo $venda['valor']; ?></td>
            <td><?php echo utf8_encode($venda['pg_nome']); ?></td>
            <td><?php echo $config['status_pg'][$venda['status_pg']]; ?></td>
            <td>
                <a href="/vendas/ver/<?php echo $venda['id']; ?>" class="btn ">Detalhes</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
   <?php if (isset($_GET['p']) && !empty($_GET['p']) && $_GET['p'] > 1): ?> 
        <a href="/vendas?p=<?php echo ($_GET['p'] - 1); ?>" class="btn btn-default">Anterior</a>
    <?php endif; ?>    
<?php
    $page = ceil($quantidade / $limit);
    for($i = 1; $i <= $page; $i++): ?>
        <a href="/vendas?p=<?php echo $i; ?>" class="btn btn-default"><?php echo $i; ?></a>
<?php endfor;?>
<?php if (isset($_GET['p']) && !empty($_GET['p']) && $_GET['p'] < $page): ?> 
        <a href="/vendas?p=<?php echo ($_GET['p'] + 1); ?>" class="btn btn-default">Próxima</a>
    <?php endif; ?> 



