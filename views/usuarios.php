<h1>Usuários</h1>
<a href="/usuarios/add" class="btn btn-default">Adicionar Usuário</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Usuário</th>
            <th>Senha</th>
            <th>Ações</th>
        </tr>
    </thead>
    <?php foreach($usuarios as $usuario): ?>
        <tr>
            <td><?php echo $usuario['id']; ?></td>
            <td><?php echo $usuario['usuario']; ?></td>
            <td><?php echo $usuario['senha']; ?></td>
            <td>
                <a href="/usuarios/edit/<?php echo $usuario['id'] ?>" class="btn btn-default">Editar</a>
                <a href="/usuarios/del/<?php echo $usuario['id'] ?>" class="btn btn-default">Excluir</a>
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

