<?php
$pedido_id = $_GET['pedido_id'] ?? null;
?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Pagamento recusado</title>
  <link rel="stylesheet" href="../styles/home.css">
</head>
<body>
  <main class="main">

    <h1 class="title">
      PAGAMENTO <span class="contrast">NÃO APROVADO</span>
    </h1>

    <?php if ($pedido_id): ?>
      <p>Pedido nº <?= htmlspecialchars($pedido_id) ?></p>
    <?php endif; ?>

    <p>
      O pagamento não foi concluído.<br>
      Você pode tentar novamente ou escolher outro método de pagamento.
    </p>

    <div style="margin-top:20px;">
      <a class="button" href="home.html">Voltar para o início</a>
    </div>

  </main>
</body>
</html>
