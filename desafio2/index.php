<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Antecessor e sucessor</title>
  <link rel="stylesheet" href="../styles/style.css" />
</head>

<body>


  <main>
    <p>
    <h1>Trabalhando com números aleatórios</h1>
    <?php
    $random_number = mt_rand(1, 100);

    echo "Gerando um numero aleatorio entre 0 100..." . "<br>";
    echo "O valor gerado foi" . "<strong> $random_number </strong>"
    
    ?>
    </p>
    <button onclick="javascript:location.reload()">&#x231B Gerar Outro</button>
  </main>

</body>

</html>