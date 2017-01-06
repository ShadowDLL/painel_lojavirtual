<h1>Produtos - Adicionar</h1>
<form method="POST" enctype="multipart/form-data">
    <input type="text" name="nome" placeholder="Nome do Produto" autofocus class="form-control" /><br/>
    <textarea name="descricao" placeholder="Descrição do Produto" class="form-control" ></textarea><br/>
    <select name="categoria" class="form-control">
        <?php foreach ($categorias as $categoria): ?>
        <option value="<?php echo $categoria['id']; ?>"><?php echo utf8_encode($categoria['titulo']); ?></option>
        <?php endforeach; ?>
    </select><br/>
    <input type="text" name="preco" placeholder="Preço do Produto" class="form-control" /><br/>
    <input type="number" name="quantidade" placeholder="Quantidade do Produto" min="1" class="form-control" /><br/> 
    <input type="file" name="imagem" class="form-control"/><br/> 
    <input type="submit" value="Salvar" class="btn btn-default" />
</form>

