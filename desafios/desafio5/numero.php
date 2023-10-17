<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Analisando Numero...</title>
  <link rel="stylesheet" href="../styles/style.css" />
</head>
<body>
    <main>
      <h1>Analisador de Numero Real</h1>
      <?php 
        $num = $_REQUEST["n"] ?? 0;


        echo "<p>Analisando o número <strong>". number_format($num, 3, ",", "." ) ."</strong> informado pelo usuario</p>" . "<br>";

        $int = (int) $num;
        $frac = $num - $int;

        echo "<ul><li>Parte inteira <strong> $int" . "</strong></li>";
        echo "<li>Fracionaria <strong>" . number_format($frac, 3, ",", "." ) . "</strong> </li></ul>";

      ?>
      <button onclick="javascript:history.go(-1)">&#x2b05 Voltar</button>
    </main>
</body>
</html>