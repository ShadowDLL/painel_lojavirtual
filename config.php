<?php

require 'environment.php';
define("BASE_URL", "http://painel.lojavirtual:81/");
global $config;
$config = array();

if(ENVIRONMENT == 'development')
{
    $config['dbname'] = 'lojavirtual';
    $config['host']   = '127.0.0.1';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}
else
{
    $config['dbname'] = 'u125275386_chat';
    $config['host']   = 'mysql.hostinger.com.br';
    $config['dbuser'] = 'u125275386_root';
    $config['dbpass'] = '123456';
}
/*Formas de Pagamento
 * 
 * 1 => Aguardando Aprovação
 * 2 => Aprovado
 * 3=> Cancelado
*/

$config['status_pg'][1] = "Aguardando Aprovação";
$config['status_pg'][2] = "Aprovado";
$config['status_pg'][3] = "Cancelado";

