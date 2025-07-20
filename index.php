<?php 
require_once ("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css/login.css">

    <title><?php echo $nome_sistema;?></title>
</head>
<body>
    
<div class="login">
	<img src="img/logo-do-projeto.png" alt="logo" style="width: 25%; display: block; margin: 0 auto; margin-bottom: 10px;">
    <form method="post" action="autenticar.php">
    	<input type="text" name="usuario" placeholder="Email ou CPF" required="required" />
        <input type="password" name="senha" placeholder="Insira Sua Senha" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Logar</button>
    </form>
</div>
    
</body>
</html>