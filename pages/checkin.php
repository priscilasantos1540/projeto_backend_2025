<?php
session_start();
require_once __DIR__ . '/../includes/db.php';


if (!isset($_SESSION['usuario_id']) || $_SESSION['perfil'] !== 'portaria') {
    header("Location: /projeto_backend_2025/pages/auth.html"); // volta pro login
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Check-in | Portaria</title>
    <link rel="stylesheet" href="/styles/auth.css">
    <script src="https://unpkg.com/html5-qrcode" defer></script> 
</head>
<body>

<div class="container">

    <header class="header">
        <h1 class="title">Painel de Check-in</h1>
        <p class="subtitle">
            Operador logado:
            <strong><?= htmlspecialchars($_SESSION['nome_usuario']) ?></strong>
        </p>
    </header>

    <main class="card">

        <h2 class="card-title">Leitura do Ingresso</h2>

        <div id="reader" class="qr-reader"></div>
        <div class="divider">ou</div>

        <div class="form-group">
            <label for="manual_input">Código do ingresso</label>
            <input
                type="text"
                id="manual_input"
                class="input-text"
                placeholder="Digite o código do ingresso"
            >
        </div>

        <button
            class="btn btn-primary"
            onclick="iniciarCheckin(document.getElementById('manual_input').value)">
            Validar Ingresso
        </button>

        <div id="resultado_checkin" class="alert alert-info">
            Aguardando leitura do ingresso...
        </div>

    </main>

</div>

</body>
</html>
