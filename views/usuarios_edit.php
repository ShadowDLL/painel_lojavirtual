<h1>Usuários - Editar</h1>
<form method="POST">
    <input type="text" name="usuario" value="<?php echo utf8_encode($usuario['usuario']); ?>" placeholder="Usuário" autofocus class="form-control" /><br/>
    <input type="password" name="senha" value="<?php echo utf8_encode($usuario['senha']); ?>" placeholder="Senha" class="form-control" /><br/>
    <input type="submit" value="Salvar" class="btn btn-default" />
</form>

