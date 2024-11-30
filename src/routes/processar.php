<?php
require_once "database.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = trim($_POST["nome"]);
    $email = trim($_POST["email"]);
    $telefone = trim($_POST["telefone"]);

    // Validações simples
    if (empty($nome) || empty($email) || empty($telefone)) {
        die("Todos os campos são obrigatórios.");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Email inválido.");
    }

    try {
        // Inicia uma transação
        $pdo->beginTransaction();

        // Inserir dados na tabela Cliente
        $sqlCliente = "INSERT INTO Cliente (nome, email) VALUES (:nome, :email)";
        $stmtCliente = $pdo->prepare($sqlCliente);
        $stmtCliente->execute([
            ":nome" => $nome,
            ":email" => $email,
        ]);

        // Recuperar o ID do cliente inserido
        $clienteId = $pdo->lastInsertId();

        // Inserir dados na tabela Contatos
        $sqlContato = "INSERT INTO Contatos (cliente_id, telefone) VALUES (:cliente_id, :telefone)";
        $stmtContato = $pdo->prepare($sqlContato);
        $stmtContato->execute([
            ":cliente_id" => $clienteId,
            ":telefone" => $telefone,
        ]);

        // Confirma a transação
        $pdo->commit();

        echo "Dados inseridos com sucesso!";
    } catch (PDOException $e) {
        // Desfaz a transação em caso de erro
        $pdo->rollBack();
        die("Erro ao inserir os dados: " . $e->getMessage());
    }
}
?>
