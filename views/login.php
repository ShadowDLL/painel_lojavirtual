<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css"/>
        <title>Página de Login</title>
    </head>
    <body>
        <form method="POST">
            <div class="conteudo">
                  <div class="panel panel-primary">
                    <div class="panel-heading logintitulo">Login Administrador</div>
                      <div class="panel-body">
                          <?php if (!empty($aviso)):?>
                              <div class="alert alert-danger fade in">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <?php echo $aviso; ?>
                              </div>  
                          <?php endif; ?>                  
                          <input class="btn btn-default btn-block" type="text" name="usuario" autofocus placeholder="Usuário" /><br/>
                          <input class="btn btn-default btn-block" type="password" name="senha"  placeholder="Senha" /><br/>
                          <input class="btn btn-success btn-block" type="submit" value="Login" />
                      </div>
                    </div>
                  </div>    
            </div>
          </form>
    </body>
</html>




