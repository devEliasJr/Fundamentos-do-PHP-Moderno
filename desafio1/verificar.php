<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
  <link rel="stylesheet" href="../styles/style.css" />
</head>

<body>

  <main>
    <h1>Verificando processamento</h1>
    <p>
        <?php
          $number = $_REQUEST["number"] ?? 1;
          echo "O Numero escolhido foi " .  "<strong>$number</strong>" . "<br>";
          echo "O seu antecessor é " . $number - 1 . "<br>";
          echo "O seu sucessor é " . $number + 1;
       ?>
    </p>
    <button onclick="javascript:history.go(-1)">&#x2b05 Voltar</button>
  </main>
</body>

</html>