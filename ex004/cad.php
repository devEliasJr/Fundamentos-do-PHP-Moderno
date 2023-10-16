<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <header>
    <h1>Resultado do processamento</h1>
  </header>
  <main>
    <?php
    $name = $_GET["nome"] ?? "Sem Nome";
    $lastname = $_GET["sobrenome"] ?? "Desconhecido";
    echo "É um prazer te conhecer, <strong>$name $lastname</strong>"
    ?>
    <p> <a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
  </main>
</body>

</html>