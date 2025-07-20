<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript" src="js/alerta-tempo.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<?php
require_once ("conexao.php");

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$query = $pdo->query("SELECT * FROM usuarios WHERE (email = '$usuario' OR cnpj = '$usuario') AND senha = '$senha'");
$res = $query->fetchall(PDO::FETCH_ASSOC);
$total_reg = count($res);

if($total_reg>0){
	echo "<script>window.location='painel-adm'</script>";
}else{
	echo "<script>$(function(){ alertaTempo('Dados Incorretos!!', '1000') });</script>";
    }


?>