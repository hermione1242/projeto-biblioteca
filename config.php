<?php
//configuração de banco de dados
$db_host= "localhost"; // Hostname do servidor de banco de dados
$db_user= "root"; // Nome do usuário para conectar ao banco de dados
$db_pass= ""; // Senha para conectar ao banco de dados ( vazio significa sem senha)
$db_name= "db_biblioteca"; // Nome do banco de dados a conectar

// Conectar ao banco de dados
$conn= new mysqli($db_host,$db_user,$db_pass,$db_name);

//Verificar se a conexão foi bem -sucedida
if ($conn-> connect_error){
    // Se houver um erro, exibir a mensagem de erro e encerrar a execução do script
    // a seta -> é usada para acessar propriedades e métodos de objetivos em PHP, tornando o código mais legivél e fácil de manter
    die("conexão falhou: {$conn-> connect_error}");
}
else {
    echo " PARABENS!!! A conexão ao banco de dados ocorreu normalmente!";
}