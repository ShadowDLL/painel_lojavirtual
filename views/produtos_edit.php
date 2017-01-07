<h1>Produtos - Editar</h1>
<form method="POST" enctype="multipart/form-data">
    <input type="text" name="nome" value="<?php echo utf8_encode($produto['nome']); ?>"  placeholder="Nome do Produto" autofocus class="form-control" /><br/>
    <textarea name="descricao" placeholder="Descrição do Produto" class="form-control" ><?php echo utf8_encode($produto['descricao']); ?></textarea><br/>
    <select name="categoria" class="form-control">
        <?php foreach ($categorias as $categoria): ?>
        <option <?php echo($categoria['id']==$produto['id_categoria'])?"selected='selected'":""; ?> value="<?php echo $categoria['id']; ?>"><?php echo utf8_encode($categoria['titulo']); ?></option>
        <?php endforeach; ?>
    </select><br/>
    <input type="text" name="preco" value="<?php echo utf8_encode($produto['preco']); ?>"  placeholder="Preço do Produto" class="form-control" /><br/>
    <input type="number" name="quantidade" value="<?php echo utf8_encode($produto['quantidade']); ?>"  placeholder="Quantidade do Produto" min="1" class="form-control" /><br/> 
    <input type="file" name="imagem" class="form-control"/><br/>
    <img src="/assets/images/<?php echo $produto['imagem']; ?>" border="0" height="80"  ><br/><br/>
    <input type="submit" value="Salvar" class="btn btn-default" />
</form>

