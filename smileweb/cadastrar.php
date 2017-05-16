<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO usuario (nome, sexo, username, senha, cpf, endereco, bairro, numero, cidade, estado, email, news) 
    VALUES (:nome, :sexo, :username, :senha, :cpf, :endereco, :bairro, :numero, :cidade, :estado, :email, :news)");
    $stmt->bindParam(':nome', $_POST['nome']);
    $stmt->bindParam(':sexo', $_POST['sexo']);
    $stmt->bindParam(':username', $_POST['username']);
    $stmt->bindParam(':senha', $_POST['senha']);
    $stmt->bindParam(':cpf', $_POST['cpf']);
    $stmt->bindParam(':endereco', $_POST['endereco']);
    $stmt->bindParam(':bairro', $_POST['bairro']);
    $stmt->bindParam(':numero', $_POST['numero']);
    $stmt->bindParam(':cidade', $_POST['cidade']);
    $stmt->bindParam(':estado', $_POST['estado']);
    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':news', $_POST['news']);

    $stmt->execute();

    echo "Cadastro Realizado com sucesso!";
    }
catch(PDOException $e)
    {
    echo "Ops... Erro no servidor: ".$e->getMessage();
    }
?>