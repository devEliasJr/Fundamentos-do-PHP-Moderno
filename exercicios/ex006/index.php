<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Antecessor e sucessor</title>
  <link rel="stylesheet" href="../styles/style.css" />
</head>

<body>
  <?php 
  //Capturando dados do form retroalimentado
    $valor1 = isset($_GET['v1']) ? (int)$_GET['v1'] : 1;
    $valor2 = isset($_GET['v2']) ? (int)$_GET['v2'] : 1;

  ?>
  <header>
    <h1>Somador de Valores</h1>
  </header>
  <main>
    <form action="<?=$_SERVER["PHP_SELF"] ?>" method="get">
      <label for="v1">Valor 1</label>
      <input type="number" name="v1" id="v1" value="<?=$valor1?>">
      <label for="v2">Valor 2</label>
      <input type="number" name="v2" id="v2" value="<?=$valor2?>">
      <input type="submit" value="Converter">
    </form>
  </main>

  <section>
    <h2>Resultado da Soma</h2>
    <?php 
      $soma = $valor1 + $valor2;
      print "A soma entre $valor1 e $valor2 é igual a: $soma";
    ?>
  </section>
</body>
</html>