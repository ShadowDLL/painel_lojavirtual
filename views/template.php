<html>
    <head>
      <meta charset="UTF-8" />
      <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>/assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css"/>
      <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/jquery-3.1.1.min.js"></script>
      <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/angular.min.js"></script>
      <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/script.js"></script>
      <!--<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />-->
      <!--<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
      <title>Titulo do Site</title>  
    </head>
    <body>           
        <div class="container">
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <ul class="nav navbar-nav">
                        <div class="navbar-header">
                            <li><a class="navbar-brand" href="">Minha Empresa</a></li>
                        </div>
                            <li><a href="/home">Home</a></li>
                            <li><a href="/categorias">Categorias</a></li>
                            <li><a href="/produtos">Produtos</a></li>
                            <li><a href="/vendas">Vendas</a></li>
                            <li><a href="/usuarios">Usuários</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                            <li><a href="/login/logout">Sair</a></li>
                    </ul>
		</div>		
            </nav>
                <?php $this->loadViewInTemplate($viewName, $viewData); ?>
	</div>
            
            
        </div>    
    </body>
</html>