<?php
//configuração do banco de dados
$banco = "sistema_agro";
$servidor = "localhost";
$usuario = "root";
$senha = "";

// Necessário para fazer o primeiro acesso ao sistema
$email_super_adm = "integrasys.me@gmail.com";
$nome_sistema = "Agrotec";

// define o fuso horário padrão para são paulo
date_default_timezone_set('America/Sao_Paulo');

try {
    // Cria uma nova conexão com o banco de dados usando PDO
    $pdo = new PDO("mysql:dbname=$banco; host=$servidor",
    $usuario, $senha);
} catch (Exception $e) {
    // Se houver um erro, exibe a mensagem de erro.
    echo 'Erro ao conectar ao banco de dados! <br>' .$e;
}

    // ISERIR REGISTROS INICIAIS

// Criar um usuário padrao!⬇️
// esse comando consulta informações
$query = $pdo->query("SELECT * FROM administrador");
$res = $query->fetchall(PDO::FETCH_ASSOC);
$total_reg = count($res);

if($total_reg == 0)
$pdo->query("INSERT INTO administrador SET nome = 'administrador', email = '$email_super_adm', cnpj = '123.123.222-52', telefone = '(00)1 2345-6789' ");

//Criar um Usuário Super com nivel de administrador padrão!
$query = $pdo->query("SELECT * FROM usuarios");
$res = $query->fetchall(PDO::FETCH_ASSOC);
$total_reg = count($res);

if($total_reg == 0)
$pdo->query("INSERT INTO usuarios SET nome = 'administrador', email = '$email_super_adm', cnpj = '123.123.222-52', senha = '894753',nivel =' administrador', id_pessoa = 1 ");


//VARIAVEIS PADROES DO SISTEMA
$query = $pdo->query("SELECT * FROM config");
$res = $query->fetchall(PDO::FETCH_ASSOC);
$total_reg = count($res);

if($total_reg == 0){
$pdo->query("INSERT INTO config SET nome = 'email_super_adm', valor = '$email_super_adm' ");
$pdo->query("INSERT INTO config SET nome = 'nome_sistema', valor = '$nome_sistema' ");
}

//BUSCAR INFORMAÇÕES DE CONFIGURAÇÕES NO BANCO
// Buscar email_super_adm
$query = $pdo->query("SELECT * FROM config where nome = 'email_super_adm'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$email_super_adm = $res[0]['valor'];

// Buscar nome_sistema
$query = $pdo->query("SELECT * FROM config where nome = 'nome_sistema'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$nome_sistema = $res[0]['valor']; 
 


?>