

<?php

define('DB_HOST',"192.168.1.33:3306");

define('DB_USER',"lap.mn");

define('DB_PASS',"JhVV7gRYhAbBtRDVFFKEFBbUfeR2xh");

define('DB_NAME',"lap.mn");

define('URL',"https://lap.mn.ufrj.br");
$url = URL;
//Passo 1 - Abrir conexao

$servidor = DB_HOST;

$usuario = DB_USER;

$senha = DB_PASS;

$banco = DB_NAME; 



$conecta = mysqli_connect($servidor, $usuario, $senha, $banco);

if ( mysqli_connect_errno() ) {

  die("Conexao falhou: " . mysqli_connect_errno() );

} else {
$_SERVER["conecta"] = $conecta;	
}


?>

 












