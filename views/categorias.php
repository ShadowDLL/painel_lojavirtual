<h1>Categorias</h1>
<a href="/categorias/add" class="btn btn-default">Adicionar Categoria</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th><strong>Título</th>
            <th width="200">Ações</th>
        </tr>
    </thead>
    <?php foreach($categorias as $categoria):?>
        <tr>
            <td><?php echo utf8_encode($categoria['titulo']); ?></td>
            <td>
                <a href="/categorias/edit/<?php echo $categoria['id']; ?>" class="btn btn-default">Editar</a>
                <a href="/categorias/del/<?php echo $categoria['id']; ?>" class="btn btn-default">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
    

