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


?>